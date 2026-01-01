@extends('admin.layout')

@section('title', 'Content Management')
@section('page-title', 'Content Management')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Manage Page Content</h2>
        <p class="text-gray-600 mt-2">Select a page to manage its content</p>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($pages as $slug => $name)
        <a href="{{ route('admin.content.show', $slug) }}" 
           class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 border-[#0a4d78]">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-[#0a4d78]/10 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#0a4d78]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-gray-900">{{ $name }}</h3>
                    <p class="text-sm text-gray-500 mt-1">Manage content for {{ $name }}</p>
                </div>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </div>
        </a>
        @endforeach
    </div>
@endsection

