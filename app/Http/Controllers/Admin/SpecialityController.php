<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::orderBy('display_order')->orderBy('name')->paginate(15);
        return view('admin.specialities.index', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specialities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'speciality-' . time() . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $directory = 'uploads/specialities';
            
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory, 0755, true);
            }
            
            $path = $file->storeAs($directory, $filename, 'public');
            $validated['image'] = asset('storage/' . $path);
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        Speciality::create($validated);

        return redirect()->route('admin.specialities.index')
            ->with('success', 'Speciality created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        return view('admin.specialities.show', compact('speciality'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        return view('admin.specialities.edit', compact('speciality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($speciality->image && strpos($speciality->image, 'storage/') !== false) {
                $oldPath = str_replace(asset('storage/'), '', $speciality->image);
                Storage::disk('public')->delete($oldPath);
            }

            $file = $request->file('image');
            $filename = 'speciality-' . time() . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $directory = 'uploads/specialities';
            
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory, 0755, true);
            }
            
            $path = $file->storeAs($directory, $filename, 'public');
            $validated['image'] = asset('storage/' . $path);
        } else {
            // Keep existing image if not uploading new one
            $validated['image'] = $speciality->image;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        $speciality->update($validated);

        return redirect()->route('admin.specialities.index')
            ->with('success', 'Speciality updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        // Delete image if exists
        if ($speciality->image && strpos($speciality->image, 'storage/') !== false) {
            $oldPath = str_replace(asset('storage/'), '', $speciality->image);
            Storage::disk('public')->delete($oldPath);
        }

        $speciality->delete();

        return redirect()->route('admin.specialities.index')
            ->with('success', 'Speciality deleted successfully!');
    }
}
