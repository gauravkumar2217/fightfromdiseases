@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Submissions -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#0a4d78]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Total Submissions</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalSubmissions }}</p>
                </div>
                <div class="w-12 h-12 bg-[#0a4d78]/10 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#0a4d78]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Contact Form Count -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#9fd7e4]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Contact Form</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $contactCount }}</p>
                </div>
                <div class="w-12 h-12 bg-[#9fd7e4]/10 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#9fd7e4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Contact Table 2 Count -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#0a5a8a]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Medical Tourism Form</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $contactTable2Count }}</p>
                </div>
                <div class="w-12 h-12 bg-[#0a5a8a]/10 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#0a5a8a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Today's Submissions -->
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-medium">Today's Submissions</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">{{ $todayTotal }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Submissions -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Contact Form Submissions -->
        <div class="bg-white rounded-xl shadow-lg">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-gray-900">Recent Contact Form Submissions</h2>
                    <a href="{{ route('admin.contacts', ['type' => 'contact']) }}" class="text-[#0a4d78] hover:text-[#0a5a8a] text-sm font-semibold">
                        View All
                    </a>
                </div>
            </div>
            <div class="p-6">
                @if($recentContacts->count() > 0)
                    <div class="space-y-4">
                        @foreach($recentContacts as $contact)
                        <div class="border-l-4 border-[#9fd7e4] pl-4 py-3 hover:bg-gray-50 rounded transition-colors">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900">{{ $contact->name }}</p>
                                    <p class="text-sm text-gray-600">{{ $contact->email }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $contact->subject }}</p>
                                </div>
                                <span class="text-xs text-gray-400">{{ $contact->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-8">No submissions yet</p>
                @endif
            </div>
        </div>

        <!-- Recent Medical Tourism Form Submissions -->
        <div class="bg-white rounded-xl shadow-lg">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-gray-900">Recent Medical Tourism Submissions</h2>
                    <a href="{{ route('admin.contacts', ['type' => 'contacttable2']) }}" class="text-[#0a4d78] hover:text-[#0a5a8a] text-sm font-semibold">
                        View All
                    </a>
                </div>
            </div>
            <div class="p-6">
                @if($recentContactTable2->count() > 0)
                    <div class="space-y-4">
                        @foreach($recentContactTable2 as $contact)
                        <div class="border-l-4 border-[#0a5a8a] pl-4 py-3 hover:bg-gray-50 rounded transition-colors">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900">{{ $contact->name }}</p>
                                    <p class="text-sm text-gray-600">{{ $contact->email }}</p>
                                    @if($contact->country)
                                        <p class="text-xs text-[#0a4d78] mt-1">{{ $contact->country }}</p>
                                    @endif
                                    @if($contact->treatment_interest)
                                        <p class="text-xs text-gray-500 mt-1">{{ $contact->treatment_interest }}</p>
                                    @endif
                                </div>
                                <span class="text-xs text-gray-400">{{ $contact->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-8">No submissions yet</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Weekly Stats -->
    <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4">This Week's Submissions</h2>
        <div class="flex items-end space-x-2 h-48">
            @php
                $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                $maxCount = $submissionsByDate->max() ?: 1;
            @endphp
            @foreach($days as $index => $day)
                @php
                    $date = now()->startOfWeek()->addDays($index)->format('Y-m-d');
                    $count = $submissionsByDate->get($date, 0);
                    $height = $maxCount > 0 ? ($count / $maxCount) * 100 : 0;
                @endphp
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-gray-200 rounded-t-lg relative" style="height: 150px;">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-[#0a4d78] to-[#9fd7e4] rounded-t-lg transition-all duration-300 hover:opacity-80" 
                             style="height: {{ $height }}%"
                             title="{{ $count }} submissions">
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 mt-2">{{ $day }}</p>
                    <p class="text-xs font-semibold text-[#0a4d78]">{{ $count }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

