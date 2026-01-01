@extends('admin.layout')

@section('title', 'Photo Gallery')
@section('page-title', 'Photo Gallery')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Manage Photo Gallery</h2>
        <a href="{{ route('admin.photo-gallery.create') }}" 
           class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
            + Add New Photo
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @forelse($photos as $photo)
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative">
                    <img src="{{ $photo->image_url }}" 
                         alt="{{ $photo->title }}" 
                         class="w-full h-48 object-cover">
                    @if($photo->is_active)
                        <span class="absolute top-2 right-2 px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    @else
                        <span class="absolute top-2 right-2 px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                    @endif
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">{{ $photo->title }}</h3>
                    @if($photo->description)
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">{{ Str::limit($photo->description, 80) }}</p>
                    @endif
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                        <span>Order: {{ $photo->display_order }}</span>
                        <span>{{ $photo->created_at->format('M d, Y') }}</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.photo-gallery.edit', $photo) }}" 
                           class="flex-1 px-3 py-2 text-center text-sm bg-[#0a4d78] text-white rounded-lg hover:bg-[#0a5a8a] transition-colors">
                            Edit
                        </a>
                        <form action="{{ route('admin.photo-gallery.destroy', $photo) }}" 
                              method="POST" 
                              class="flex-1"
                              onsubmit="return confirm('Are you sure you want to delete this photo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full px-3 py-2 text-sm bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">No photos in gallery. <a href="{{ route('admin.photo-gallery.create') }}" class="text-[#0a4d78] hover:underline">Add one now</a></p>
            </div>
            @endforelse
        </div>

        @if($photos->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $photos->links() }}
        </div>
        @endif
    </div>
@endsection

