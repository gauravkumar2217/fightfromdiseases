@extends('admin.layout')

@section('title', 'View Service Count')
@section('page-title', 'View Service Count')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">{{ $serviceCount->label }}</h2>
            <a href="{{ route('admin.service-counts.edit', $serviceCount) }}" 
               class="px-4 py-2 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-colors">
                Edit
            </a>
        </div>

        <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Icon</label>
                    <p class="text-5xl">{{ $serviceCount->icon ?? '📊' }}</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Value</label>
                    <p class="text-4xl font-bold text-[#0a4d78]">{{ $serviceCount->value }}</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                    @if($serviceCount->is_active)
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                    @endif
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Display Order</label>
                    <p class="text-gray-900">{{ $serviceCount->display_order }}</p>
                </div>
            </div>

            <div class="pt-4 border-t border-gray-200">
                <a href="{{ route('admin.service-counts.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Back to List
                </a>
            </div>
        </div>
    </div>
@endsection

