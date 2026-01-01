@extends('admin.layout')

@section('title', 'Edit Hospital')
@section('page-title', 'Edit Hospital')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form action="{{ route('admin.hospitals.update', $hospital) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Hospital Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name', $hospital->name) }}"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">
                        Location
                    </label>
                    <input type="text" 
                           id="location" 
                           name="location" 
                           value="{{ old('location', $hospital->location) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('location')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Website -->
                <div>
                    <label for="website" class="block text-sm font-semibold text-gray-700 mb-2">
                        Website URL
                    </label>
                    <input type="url" 
                           id="website" 
                           name="website" 
                           value="{{ old('website', $hospital->website) }}"
                           placeholder="https://example.com"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('website')
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
                           value="{{ old('display_order', $hospital->display_order) }}"
                           min="0"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('display_order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Logo -->
            <div>
                <label for="logo" class="block text-sm font-semibold text-gray-700 mb-2">
                    Hospital Logo
                </label>
                @if($hospital->logo)
                    <div class="mb-3">
                        <p class="text-sm text-gray-600 mb-2">Current Logo:</p>
                        <img src="{{ $hospital->logo }}" alt="{{ $hospital->name }}" class="h-20 w-auto object-contain border border-gray-200 rounded-lg p-2">
                    </div>
                @endif
                <input type="file" 
                       id="logo" 
                       name="logo" 
                       accept="image/jpeg,image/jpg,image/png,image/webp"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                <p class="mt-1 text-xs text-gray-500">Accepted formats: JPEG, JPG, PNG, WEBP (Max: 2MB). Leave empty to keep current logo.</p>
                @error('logo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                    Description
                </label>
                <textarea id="description" 
                          name="description" 
                          rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">{{ old('description', $hospital->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Is Active -->
            <div class="flex items-center">
                <input type="checkbox" 
                       id="is_active" 
                       name="is_active" 
                       value="1"
                       {{ old('is_active', $hospital->is_active) ? 'checked' : '' }}
                       class="w-4 h-4 text-[#0a4d78] border-gray-300 rounded focus:ring-[#0a4d78]">
                <label for="is_active" class="ml-2 text-sm font-semibold text-gray-700">
                    Active (Show on website)
                </label>
            </div>

            <!-- Actions -->
            <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                <a href="{{ route('admin.hospitals.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                    Update Hospital
                </button>
            </div>
        </form>
    </div>
@endsection

