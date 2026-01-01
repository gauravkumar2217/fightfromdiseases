@extends('admin.layout')

@section('title', 'Content - ' . $pageName)
@section('page-title', 'Content - ' . $pageName)

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">{{ $pageName }}</h2>
            <p class="text-gray-600 mt-1">Manage all content for this page</p>
        </div>
        <a href="{{ route('admin.content.index') }}" 
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
            Back to Pages
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.content.update', $pageSlug) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        @forelse($contents as $group => $groupContents)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-[#0a4d78]/10 to-white">
                <h3 class="text-xl font-bold text-gray-900 capitalize">{{ str_replace('_', ' ', $group) }}</h3>
            </div>
            
            <div class="p-6 space-y-6">
                @foreach($groupContents as $content)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="md:col-span-1">
                        <label for="content_{{ $content->key }}" class="block text-sm font-semibold text-gray-700 mb-2">
                            {{ ucwords(str_replace('_', ' ', $content->key)) }}
                        </label>
                        @if($content->description)
                            <p class="text-xs text-gray-500 mt-1">{{ $content->description }}</p>
                        @endif
                        <p class="text-xs text-gray-400 mt-1">Order: {{ $content->display_order }}</p>
                    </div>
                    <div class="md:col-span-2">
                        @if($content->type === 'textarea' || $content->type === 'html')
                            <textarea 
                                id="content_{{ $content->key }}" 
                                name="content_{{ $content->key }}" 
                                rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >{{ old('content_' . $content->key, $content->value) }}</textarea>
                        @else
                            <input 
                                type="text" 
                                id="content_{{ $content->key }}" 
                                name="content_{{ $content->key }}" 
                                value="{{ old('content_' . $content->key, $content->value) }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                            >
                        @endif
                        @error('content_' . $content->key)
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @empty
        <div class="bg-white rounded-xl shadow-lg p-12 text-center">
            <p class="text-gray-500 mb-4">No content found for this page.</p>
            <p class="text-sm text-gray-400">Content will be created automatically when you run the seeder.</p>
        </div>
        @endforelse

        @if($contents->count() > 0)
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.content.index') }}" 
               class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                Save Changes
            </button>
        </div>
        @endif
    </form>
@endsection

