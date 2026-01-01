<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Banner setting keys that should be managed on this page.
     */
    private $bannerKeys = [
        'banner_image_url',
        'banner_badge_text',
        'banner_heading',
        'banner_heading_highlight',
        'banner_description',
        'banner_button1_text',
        'banner_button2_text',
        'banner_button2_link',
    ];

    /**
     * Show the banner management page.
     */
    public function index()
    {
        $bannerSettings = Setting::whereIn('key', $this->bannerKeys)->orderBy('key')->get();
        
        return view('admin.banner', [
            'settings' => $bannerSettings,
        ]);
    }

    /**
     * Update banner settings.
     */
    public function update(Request $request)
    {
        // Track if image was uploaded to prevent overwriting URL later
        $imageUploaded = $request->hasFile('banner_image_upload');
        
        $data = $request->except(['_token', '_method', 'banner_image_upload']);
        
        // Handle banner image upload
        if ($imageUploaded) {
            try {
                $request->validate([
                    'banner_image_upload' => 'required|image|mimes:jpeg,jpg,png,webp|max:5120',
                ], [
                    'banner_image_upload.required' => 'Please select an image file.',
                    'banner_image_upload.image' => 'The file must be an image.',
                    'banner_image_upload.mimes' => 'The image must be a file of type: jpeg, jpg, png, webp.',
                    'banner_image_upload.max' => 'The image may not be greater than 5MB.',
                ]);

                $file = $request->file('banner_image_upload');
                
                if (!$file->isValid()) {
                    return redirect()->route('admin.banner')
                        ->withErrors(['banner_image_upload' => 'Invalid file uploaded. Please try again.'])
                        ->withInput();
                }
                
                $filename = 'banner-' . time() . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                
                // Ensure the directory exists
                $directory = 'uploads/banners';
                if (!Storage::disk('public')->exists($directory)) {
                    Storage::disk('public')->makeDirectory($directory, 0755, true);
                }
                
                // Store in public/uploads/banners directory
                $path = $file->storeAs($directory, $filename, 'public');
                
                if (!$path) {
                    return redirect()->route('admin.banner')
                        ->withErrors(['banner_image_upload' => 'Failed to upload image. Please check file permissions.'])
                        ->withInput();
                }
                
                // Get the full URL - use asset() for reliable URL generation
                $url = asset('storage/' . $path);
                
                // Directly update or create the setting using DB transaction
                DB::transaction(function () use ($url) {
                    $setting = Setting::where('key', 'banner_image_url')->lockForUpdate()->first();
                    
                    if ($setting) {
                        $setting->value = $url;
                        $setting->type = 'url';
                        $setting->group = 'banner';
                        $setting->description = 'Hero section background image URL';
                        $setting->save();
                    } else {
                        Setting::create([
                            'key' => 'banner_image_url',
                            'value' => $url,
                            'type' => 'url',
                            'group' => 'banner',
                            'description' => 'Hero section background image URL',
                        ]);
                    }
                });
                
                // Verify it was saved by querying again
                $savedSetting = Setting::where('key', 'banner_image_url')->first();
                if (!$savedSetting || empty($savedSetting->value)) {
                    \Log::error('Banner URL not saved', [
                        'url' => $url,
                        'path' => $path,
                        'setting_exists' => $savedSetting ? 'yes' : 'no',
                    ]);
                    
                    return redirect()->route('admin.banner')
                        ->withErrors(['banner_image_upload' => 'Image uploaded but failed to save URL. Please try again.'])
                        ->withInput();
                }
                
                // Log success for debugging
                \Log::info('Banner image URL saved successfully', [
                    'url' => $url,
                    'setting_id' => $savedSetting->id,
                    'saved_value' => $savedSetting->value,
                ]);
                
            } catch (\Illuminate\Validation\ValidationException $e) {
                return redirect()->route('admin.banner')
                    ->withErrors($e->errors())
                    ->withInput();
            } catch (\Exception $e) {
                \Log::error('Banner image upload error', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
                
                return redirect()->route('admin.banner')
                    ->withErrors(['banner_image_upload' => 'Error uploading image: ' . $e->getMessage()])
                    ->withInput();
            }
        }
        
        // Update only banner settings (filter by banner keys)
        // IMPORTANT: Skip banner_image_url if an image was just uploaded (it's already saved above)
        foreach ($data as $key => $value) {
            if (strpos($key, 'setting_') === 0) {
                $settingKey = str_replace('setting_', '', $key);
                
                // Skip banner_image_url if we just uploaded an image (to prevent overwriting with empty/null value)
                if ($imageUploaded && $settingKey === 'banner_image_url') {
                    continue;
                }
                
                // Only update if it's a banner key
                if (in_array($settingKey, $this->bannerKeys)) {
                    $setting = Setting::where('key', $settingKey)->first();
                    if ($setting) {
                        $setting->value = $value;
                        $setting->save();
                    } else {
                        // Create if doesn't exist
                        Setting::create([
                            'key' => $settingKey,
                            'value' => $value,
                            'type' => 'text',
                            'group' => 'banner',
                        ]);
                    }
                }
            }
        }

        $message = 'Banner settings updated successfully!';
        if ($imageUploaded) {
            $message = 'Banner image uploaded and settings updated successfully!';
        }
        
        return redirect()->route('admin.banner')->with('success', $message);
    }
}
