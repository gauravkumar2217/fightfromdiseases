@extends('admin.layout')

@section('title', 'Settings')
@section('page-title', 'Settings')

@section('content')
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-8">
        @csrf
        @method('POST')

        @foreach($settings as $group => $groupSettings)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-[#0a4d78]/10 to-white">
                <h2 class="text-2xl font-bold text-gray-900 capitalize">{{ $group }} Settings</h2>
            </div>
            
            <div class="p-6 space-y-6">
                @foreach($groupSettings as $setting)
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
                        @if($setting->type === 'textarea')
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
        @endforeach

        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.dashboard') }}" 
               class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                Save Settings
            </button>
        </div>
    </form>
@endsection

