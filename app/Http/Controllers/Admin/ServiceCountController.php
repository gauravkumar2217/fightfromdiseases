<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCount;
use Illuminate\Http\Request;

class ServiceCountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceCounts = ServiceCount::orderBy('display_order')->orderBy('label')->paginate(15);
        return view('admin.service-counts.index', compact('serviceCounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service-counts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'icon' => 'nullable|string|max:50',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        ServiceCount::create($validated);

        return redirect()->route('admin.service-counts.index')
            ->with('success', 'Service count created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceCount $serviceCount)
    {
        return view('admin.service-counts.show', compact('serviceCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceCount $serviceCount)
    {
        return view('admin.service-counts.edit', compact('serviceCount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceCount $serviceCount)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'icon' => 'nullable|string|max:50',
            'is_active' => 'boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['display_order'] = $validated['display_order'] ?? 0;

        $serviceCount->update($validated);

        return redirect()->route('admin.service-counts.index')
            ->with('success', 'Service count updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceCount $serviceCount)
    {
        $serviceCount->delete();

        return redirect()->route('admin.service-counts.index')
            ->with('success', 'Service count deleted successfully!');
    }
}
