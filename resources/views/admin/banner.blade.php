@extends('admin.layout')

@section('title', 'Banner Management')
@section('page-title', 'Banner Management')

@section('content')
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <p class="text-sm text-blue-800">
            <strong>Note:</strong> Manage your homepage hero/banner section here. Changes will be reflected on the homepage immediately.
        </p>
    </div>

    <form action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('POST')

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-[#0a4d78]/10 to-white">
                <h2 class="text-2xl font-bold text-gray-900">Banner Settings</h2>
                <p class="text-sm text-gray-600 mt-1">Configure the hero section on your homepage</p>
            </div>
            
            <div class="p-6 space-y-6">
                @foreach($settings as $setting)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="md:col-span-1">
                        <label for="setting_{{ $setting->key }}" class="block text-sm font-semibold text-gray-700 mb-2">
                            {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                        </label>
                        @if($setting->description)
                            <p class="text-xs text-gray-500 mt-1">{{ $setting->description }}</p>
                        @endif
                    </div>
                    <div class="md:col-span-2">
                        @if($setting->key === 'banner_image_url')
                            <div class="space-y-4">
                                <!-- Upload Section -->
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 bg-gray-50">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="mt-4">
                                            <label for="banner_image_upload" class="cursor-pointer">
                                                <span class="mt-2 block text-sm font-semibold text-gray-900">
                                                    Upload Banner Image
                                                </span>
                                                <span class="mt-1 block text-xs text-gray-500">
                                                    PNG, JPG, WEBP up to 5MB (Recommended: 1920x1080px or larger)
                                                </span>
                                            </label>
                                            <input 
                                                type="file" 
                                                id="banner_image_upload" 
                                                name="banner_image_upload" 
                                                accept="image/jpeg,image/jpg,image/png,image/webp"
                                                class="hidden"
                                                onchange="previewUploadedImage(this)"
                                            >
                                        </div>
                                        <button 
                                            type="button"
                                            onclick="document.getElementById('banner_image_upload').click()"
                                            class="mt-3 px-4 py-2 bg-[#0a4d78] text-white text-sm rounded-lg hover:bg-[#0a5a8a] transition-colors">
                                            Choose File
                                        </button>
                                    </div>
                                    <div id="upload_preview" class="mt-4 hidden">
                                        <p class="text-xs text-gray-600 mb-2">Upload Preview:</p>
                                        <img id="upload_preview_img" src="" alt="Upload preview" class="w-full h-48 object-cover rounded-lg border border-gray-200">
                                    </div>
                                </div>

                                <!-- Or Enter URL Section -->
                                <div class="relative">
                                    <div class="absolute inset-0 flex items-center">
                                        <div class="w-full border-t border-gray-300"></div>
                                    </div>
                                    <div class="relative flex justify-center text-sm">
                                        <span class="px-2 bg-white text-gray-500">OR</span>
                                    </div>
                                </div>

                                <!-- URL Input -->
                                <div>
                                    <label for="setting_{{ $setting->key }}" class="block text-xs font-semibold text-gray-700 mb-2">
                                        Enter Image URL
                                    </label>
                                    <input 
                                        type="url" 
                                        id="setting_{{ $setting->key }}" 
                                        name="setting_{{ $setting->key }}" 
                                        value="{{ old('setting_' . $setting->key, $setting->value) }}"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                        placeholder="https://example.com/image.jpg"
                                    >
                                </div>

                                <!-- Current Image Preview -->
                                @if($setting->value)
                                <div class="mt-4">
                                    <p class="text-xs text-gray-600 mb-2 font-semibold">Current Banner Image:</p>
                                    <div class="relative">
                                        <img src="{{ $setting->value }}" 
                                             alt="Banner preview" 
                                             class="w-full h-64 object-cover rounded-lg border border-gray-200"
                                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                                        <div style="display: none;" class="w-full h-64 bg-gray-100 rounded-lg border border-gray-200 flex items-center justify-center text-gray-400 text-sm">
                                            Image not found or invalid URL
                                        </div>
                                        <div class="mt-2 text-xs text-gray-500">
                                            <a href="{{ $setting->value }}" target="_blank" class="text-[#0a4d78] hover:underline">View Full Image</a>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @error('banner_image_upload')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        @elseif($setting->type === 'textarea')
                            <textarea 
                                id="setting_{{ $setting->key }}" 
                                name="setting_{{ $setting->key }}" 
                                rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >{{ old('setting_' . $setting->key, $setting->value) }}</textarea>
                        @elseif($setting->type === 'email')
                            <input 
                                type="email" 
                                id="setting_{{ $setting->key }}" 
                                name="setting_{{ $setting->key }}" 
                                value="{{ old('setting_' . $setting->key, $setting->value) }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >
                        @elseif($setting->type === 'url')
                            <input 
                                type="url" 
                                id="setting_{{ $setting->key }}" 
                                name="setting_{{ $setting->key }}" 
                                value="{{ old('setting_' . $setting->key, $setting->value) }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >
                        @elseif($setting->type === 'phone')
                            <input 
                                type="tel" 
                                id="setting_{{ $setting->key }}" 
                                name="setting_{{ $setting->key }}" 
                                value="{{ old('setting_' . $setting->key, $setting->value) }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >
                        @else
                            <input 
                                type="text" 
                                id="setting_{{ $setting->key }}" 
                                name="setting_{{ $setting->key }}" 
                                value="{{ old('setting_' . $setting->key, $setting->value) }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >
                        @endif
                        @error('setting_' . $setting->key)
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.dashboard') }}" 
               class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                Save Banner Settings
            </button>
        </div>
    </form>

    <script>
        function previewUploadedImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                const previewDiv = document.getElementById('upload_preview');
                const previewImg = document.getElementById('upload_preview_img');
                
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewDiv.classList.remove('hidden');
                };
                
                reader.readAsDataURL(input.files[0]);
                
                // Clear URL input when file is selected
                const urlInput = document.getElementById('setting_banner_image_url');
                if (urlInput) {
                    urlInput.value = '';
                }
            }
        }

        // Show validation errors if any
        @if($errors->has('banner_image_upload'))
            document.getElementById('banner_image_upload').scrollIntoView({ behavior: 'smooth', block: 'center' });
        @endif
    </script>
@endsection

