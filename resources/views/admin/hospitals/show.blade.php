@extends('admin.layout')

@section('title', 'View Hospital')
@section('page-title', 'View Hospital')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">{{ $hospital->name }}</h2>
            <a href="{{ route('admin.hospitals.edit', $hospital) }}" 
               class="px-4 py-2 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-colors">
                Edit
            </a>
        </div>

        <div class="space-y-6">
            @if($hospital->logo)
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Logo</label>
                <img src="{{ $hospital->logo }}" alt="{{ $hospital->name }}" class="h-32 w-auto object-contain border border-gray-200 rounded-lg p-4">
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Location</label>
                    <p class="text-gray-900">{{ $hospital->location ?? 'N/A' }}</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Website</label>
                    @if($hospital->website)
                        <a href="{{ $hospital->website }}" target="_blank" class="text-[#0a4d78] hover:underline">
                            {{ $hospital->website }}
                        </a>
                    @else
                        <p class="text-gray-500">N/A</p>
                    @endif
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                    @if($hospital->is_active)
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                    @endif
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Display Order</label>
                    <p class="text-gray-900">{{ $hospital->display_order }}</p>
                </div>
            </div>

            @if($hospital->description)
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <p class="text-gray-900">{{ $hospital->description }}</p>
            </div>
            @endif

            <div class="pt-4 border-t border-gray-200">
                <a href="{{ route('admin.hospitals.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Back to List
                </a>
            </div>
        </div>
    </div>
@endsection

