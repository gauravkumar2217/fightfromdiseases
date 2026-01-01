@extends('admin.layout')

@section('title', 'View FAQ')
@section('page-title', 'View FAQ')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">FAQ Details</h2>
            <a href="{{ route('admin.faqs.edit', $faq) }}" 
               class="px-4 py-2 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-colors">
                Edit
            </a>
        </div>

        <div class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Question</label>
                <p class="text-lg text-gray-900">{{ $faq->question }}</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Answer</label>
                <p class="text-gray-900 leading-relaxed whitespace-pre-wrap">{{ $faq->answer }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                    @if($faq->is_active)
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                    @endif
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Display Order</label>
                    <p class="text-gray-900">{{ $faq->display_order }}</p>
                </div>
            </div>

            <div class="pt-4 border-t border-gray-200">
                <a href="{{ route('admin.faqs.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Back to List
                </a>
            </div>
        </div>
    </div>
@endsection

