<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PhotoGalleryController extends Controller
{
    /**
     * Maximum width for gallery images
     */
    private const MAX_WIDTH = 1920;

    /**
     * Maximum height for gallery images
     */
    private const MAX_HEIGHT = 1080;

    /**
     * JPEG quality (0-100, higher is better quality but larger file)
     */
    private const JPEG_QUALITY = 85;

    /**
     * PNG compression level (0-9, higher is better compression)
     */
    private const PNG_COMPRESSION = 9;

    /**
     * WebP quality (0-100, higher is better quality but larger file)
     */
    private const WEBP_QUALITY = 85;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = PhotoGallery::orderBy('display_order')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.photo-gallery.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photo-gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp,gif',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        // Handle image upload with compression
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $directory = 'uploads/gallery';
            
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory, 0755, true);
            }
            
            // Compress and save image
            $path = $this->compressAndSaveImage($file, $directory);
            $validated['image_url'] = asset('storage/' . $path);
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        // Remove 'image' from validated array as we're using 'image_url'
        unset($validated['image']);

        PhotoGallery::create($validated);

        return redirect()->route('admin.photo-gallery.index')
            ->with('success', 'Photo added to gallery successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PhotoGallery $photoGallery)
    {
        return view('admin.photo-gallery.show', compact('photoGallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotoGallery $photoGallery)
    {
        return view('admin.photo-gallery.edit', compact('photoGallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        // Handle image upload with compression
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($photoGallery->image_url && strpos($photoGallery->image_url, 'storage/') !== false) {
                $oldPath = str_replace(asset('storage/'), '', $photoGallery->image_url);
                Storage::disk('public')->delete($oldPath);
            }

            $file = $request->file('image');
            $directory = 'uploads/gallery';
            
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory, 0755, true);
            }
            
            // Compress and save image
            $path = $this->compressAndSaveImage($file, $directory);
            $validated['image_url'] = asset('storage/' . $path);
        } else {
            // Keep existing image if not uploading new one
            $validated['image_url'] = $photoGallery->image_url;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        // Remove 'image' from validated array as we're using 'image_url'
        unset($validated['image']);

        $photoGallery->update($validated);

        return redirect()->route('admin.photo-gallery.index')
            ->with('success', 'Photo updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        // Delete image if exists
        if ($photoGallery->image_url && strpos($photoGallery->image_url, 'storage/') !== false) {
            $oldPath = str_replace(asset('storage/'), '', $photoGallery->image_url);
            Storage::disk('public')->delete($oldPath);
        }

        $photoGallery->delete();

        return redirect()->route('admin.photo-gallery.index')
            ->with('success', 'Photo deleted successfully!');
    }

    /**
     * Compress and save image with optimized settings
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $directory
     * @return string
     */
    private function compressAndSaveImage($file, $directory)
    {
        // Check if GD extension is available
        if (!extension_loaded('gd')) {
            // Fallback to original file if GD is not available
            $filename = 'gallery-' . time() . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            return $file->storeAs($directory, $filename, 'public');
        }

        // Increase memory limit for large images (temporarily)
        $originalMemoryLimit = ini_get('memory_limit');
        ini_set('memory_limit', '512M');

        try {
            // Get image info
            $imageInfo = getimagesize($file->getRealPath());
            if (!$imageInfo) {
                throw new \Exception('Invalid image file');
            }

            list($originalWidth, $originalHeight, $imageType) = $imageInfo;

            // Calculate memory needed (rough estimate: width * height * 4 bytes per pixel)
            $memoryNeeded = ($originalWidth * $originalHeight * 4) / (1024 * 1024); // MB
            if ($memoryNeeded > 400) {
                // For very large images, use more aggressive compression
                ini_set('memory_limit', '1024M');
            }

        // Calculate new dimensions maintaining aspect ratio
        $ratio = min(self::MAX_WIDTH / $originalWidth, self::MAX_HEIGHT / $originalHeight);
        $newWidth = (int)($originalWidth * $ratio);
        $newHeight = (int)($originalHeight * $ratio);

        // Don't upscale if image is smaller than max dimensions
        if ($newWidth > $originalWidth || $newHeight > $originalHeight) {
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;
        }

        // Create image resource based on type
        $sourceImage = null;
        switch ($imageType) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($file->getRealPath());
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($file->getRealPath());
                break;
            case IMAGETYPE_WEBP:
                if (function_exists('imagecreatefromwebp')) {
                    $sourceImage = imagecreatefromwebp($file->getRealPath());
                }
                break;
            case IMAGETYPE_GIF:
                $sourceImage = imagecreatefromgif($file->getRealPath());
                break;
        }

            if (!$sourceImage) {
                // Fallback to original file if we can't process it
                ini_set('memory_limit', $originalMemoryLimit);
                $filename = 'gallery-' . time() . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                return $file->storeAs($directory, $filename, 'public');
            }

            // Create new image with calculated dimensions
            $newImage = imagecreatetruecolor($newWidth, $newHeight);

            // Preserve transparency for PNG and GIF
            if ($imageType == IMAGETYPE_PNG || $imageType == IMAGETYPE_GIF) {
                imagealphablending($newImage, false);
                imagesavealpha($newImage, true);
                $transparent = imagecolorallocatealpha($newImage, 255, 255, 255, 127);
                imagefilledrectangle($newImage, 0, 0, $newWidth, $newHeight, $transparent);
            }

            // Resize image
            imagecopyresampled(
                $newImage,
                $sourceImage,
                0, 0, 0, 0,
                $newWidth,
                $newHeight,
                $originalWidth,
                $originalHeight
            );

            // Determine output format (prefer WebP for better compression, fallback to JPEG)
            $filename = 'gallery-' . time() . '-' . Str::random(10);
            $fullPath = null;
            
            // Try WebP first (best compression)
            if (function_exists('imagewebp')) {
                $filename .= '.webp';
                $fullPath = Storage::disk('public')->path($directory . '/' . $filename);
                imagewebp($newImage, $fullPath, self::WEBP_QUALITY);
            } 
            // Fallback to JPEG (universal support, good compression)
            else if ($imageType == IMAGETYPE_JPEG || function_exists('imagejpeg')) {
                $filename .= '.jpg';
                $fullPath = Storage::disk('public')->path($directory . '/' . $filename);
                imagejpeg($newImage, $fullPath, self::JPEG_QUALITY);
            }
            // Fallback to PNG if original was PNG and transparency is needed
            else if ($imageType == IMAGETYPE_PNG && function_exists('imagepng')) {
                $filename .= '.png';
                $fullPath = Storage::disk('public')->path($directory . '/' . $filename);
                imagepng($newImage, $fullPath, self::PNG_COMPRESSION);
            }
            // Last resort: GIF
            else if ($imageType == IMAGETYPE_GIF && function_exists('imagegif')) {
                $filename .= '.gif';
                $fullPath = Storage::disk('public')->path($directory . '/' . $filename);
                imagegif($newImage, $fullPath);
            }
            // If all else fails, save as JPEG
            else {
                $filename .= '.jpg';
                $fullPath = Storage::disk('public')->path($directory . '/' . $filename);
                // Convert to JPEG (loses transparency but ensures compatibility)
                $jpegImage = imagecreatetruecolor($newWidth, $newHeight);
                $white = imagecolorallocate($jpegImage, 255, 255, 255);
                imagefilledrectangle($jpegImage, 0, 0, $newWidth, $newHeight, $white);
                imagecopy($jpegImage, $newImage, 0, 0, 0, 0, $newWidth, $newHeight);
                imagejpeg($jpegImage, $fullPath, self::JPEG_QUALITY);
                imagedestroy($jpegImage);
            }

            // Free memory
            imagedestroy($sourceImage);
            imagedestroy($newImage);

            // Restore original memory limit
            ini_set('memory_limit', $originalMemoryLimit);

            return $directory . '/' . $filename;

        } catch (\Exception $e) {
            // Restore original memory limit on error
            ini_set('memory_limit', $originalMemoryLimit);
            
            // Log error for debugging
            \Log::error('Image compression failed', [
                'error' => $e->getMessage(),
                'file' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
            ]);

            // Fallback: save original file if compression fails
            $filename = 'gallery-' . time() . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            return $file->storeAs($directory, $filename, 'public');
        }
    }
}
