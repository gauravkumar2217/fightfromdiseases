@extends('admin.layout')

@section('title', 'Edit Service Count')
@section('page-title', 'Edit Service Count')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form action="{{ route('admin.service-counts.update', $serviceCount) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Label -->
                <div>
                    <label for="label" class="block text-sm font-semibold text-gray-700 mb-2">
                        Label <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="label" 
                           name="label" 
                           value="{{ old('label', $serviceCount->label) }}"
                           placeholder="e.g., Countries Served"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('label')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Value -->
                <div>
                    <label for="value" class="block text-sm font-semibold text-gray-700 mb-2">
                        Value <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="value" 
                           name="value" 
                           value="{{ old('value', $serviceCount->value) }}"
                           placeholder="e.g., 20+ or 1000+ or 24/7"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    <p class="mt-1 text-xs text-gray-500">Enter the count value (e.g., "20+", "1000+", "24/7")</p>
                    @error('value')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Icon -->
                <div>
                    <label for="icon" class="block text-sm font-semibold text-gray-700 mb-2">
                        Icon (Optional)
                    </label>
                    <input type="text" 
                           id="icon" 
                           name="icon" 
                           value="{{ old('icon', $serviceCount->icon) }}"
                           placeholder="📊 or 🌍"
                           maxlength="10"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @if($serviceCount->icon)
                        <p class="mt-1 text-sm text-gray-600">Current icon: <span class="text-2xl">{{ $serviceCount->icon }}</span></p>
                    @endif
                    <p class="mt-1 text-xs text-gray-500">Enter an emoji or icon character (optional)</p>
                    @error('icon')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Display Order -->
                <div>
                    <label for="display_order" class="block text-sm font-semibold text-gray-700 mb-2">
                        Display Order
                    </label>
                    <input type="number" 
                           id="display_order" 
                           name="display_order" 
                           value="{{ old('display_order', $serviceCount->display_order) }}"
                           min="0"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('display_order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Is Active -->
            <div class="flex items-center">
                <input type="checkbox" 
                       id="is_active" 
                       name="is_active" 
                       value="1"
                       {{ old('is_active', $serviceCount->is_active) ? 'checked' : '' }}
                       class="w-4 h-4 text-[#0a4d78] border-gray-300 rounded focus:ring-[#0a4d78]">
                <label for="is_active" class="ml-2 text-sm font-semibold text-gray-700">
                    Active (Show on website)
                </label>
            </div>

            <!-- Actions -->
            <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                <a href="{{ route('admin.service-counts.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                    Update Service Count
                </button>
            </div>
        </form>
    </div>
@endsection

