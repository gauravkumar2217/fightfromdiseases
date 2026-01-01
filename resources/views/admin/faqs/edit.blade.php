@extends('admin.layout')

@section('title', 'Edit FAQ')
@section('page-title', 'Edit FAQ')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form action="{{ route('admin.faqs.update', $faq) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Display Order -->
                <div>
                    <label for="display_order" class="block text-sm font-semibold text-gray-700 mb-2">
                        Display Order
                    </label>
                    <input type="number" 
                           id="display_order" 
                           name="display_order" 
                           value="{{ old('display_order', $faq->display_order) }}"
                           min="0"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                    @error('display_order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Question -->
            <div>
                <label for="question" class="block text-sm font-semibold text-gray-700 mb-2">
                    Question <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="question" 
                       name="question" 
                       value="{{ old('question', $faq->question) }}"
                       required
                       maxlength="500"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                @error('question')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Answer -->
            <div>
                <label for="answer" class="block text-sm font-semibold text-gray-700 mb-2">
                    Answer <span class="text-red-500">*</span>
                </label>
                <textarea id="answer" 
                          name="answer" 
                          rows="6"
                          required
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">{{ old('answer', $faq->answer) }}</textarea>
                @error('answer')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Is Active -->
            <div class="flex items-center">
                <input type="checkbox" 
                       id="is_active" 
                       name="is_active" 
                       value="1"
                       {{ old('is_active', $faq->is_active) ? 'checked' : '' }}
                       class="w-4 h-4 text-[#0a4d78] border-gray-300 rounded focus:ring-[#0a4d78]">
                <label for="is_active" class="ml-2 text-sm font-semibold text-gray-700">
                    Active (Show on website)
                </label>
            </div>

            <!-- Actions -->
            <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                <a href="{{ route('admin.faqs.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                    Update FAQ
                </button>
            </div>
        </form>
    </div>
@endsection

