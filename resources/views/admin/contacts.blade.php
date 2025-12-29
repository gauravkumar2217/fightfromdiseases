@extends('admin.layout')

@section('title', 'Contact Submissions')
@section('page-title', 'Contact Submissions')

@section('content')
    <!-- Filter Section -->
    <div class="mb-6 bg-white rounded-xl shadow-lg p-6">
        <!-- Filter Tabs -->
        <div class="mb-6">
            <div class="flex space-x-2 border-b border-gray-200">
                <a href="{{ route('admin.contacts', array_merge(request()->except('type'), ['type' => 'all'])) }}" 
                   class="px-4 py-2 {{ $type === 'all' ? 'border-b-2 border-[#0a4d78] text-[#0a4d78] font-semibold' : 'text-gray-600 hover:text-[#0a4d78]' }} transition-colors">
                    All Submissions
                </a>
                <a href="{{ route('admin.contacts', array_merge(request()->except('type'), ['type' => 'contact'])) }}" 
                   class="px-4 py-2 {{ $type === 'contact' ? 'border-b-2 border-[#0a4d78] text-[#0a4d78] font-semibold' : 'text-gray-600 hover:text-[#0a4d78]' }} transition-colors">
                    Contact Form
                </a>
                <a href="{{ route('admin.contacts', array_merge(request()->except('type'), ['type' => 'contacttable2'])) }}" 
                   class="px-4 py-2 {{ $type === 'contacttable2' ? 'border-b-2 border-[#0a4d78] text-[#0a4d78] font-semibold' : 'text-gray-600 hover:text-[#0a4d78]' }} transition-colors">
                    Medical Tourism Form
                </a>
            </div>
        </div>

        <!-- Date Filter Form -->
        <form method="GET" action="{{ route('admin.contacts') }}" class="flex flex-wrap items-end gap-4">
            <input type="hidden" name="type" value="{{ $type }}">
            
            <div class="flex-1 min-w-[200px]">
                <label for="date_from" class="block text-sm font-semibold text-gray-700 mb-2">From Date</label>
                <input type="date" 
                       id="date_from" 
                       name="date_from" 
                       value="{{ $dateFrom }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
            </div>
            
            <div class="flex-1 min-w-[200px]">
                <label for="date_to" class="block text-sm font-semibold text-gray-700 mb-2">To Date</label>
                <input type="date" 
                       id="date_to" 
                       name="date_to" 
                       value="{{ $dateTo }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
            </div>
            
            <div class="flex gap-2">
                <button type="submit" 
                        class="px-6 py-2 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl">
                    Filter
                </button>
                @if($dateFrom || $dateTo)
                <a href="{{ route('admin.contacts', ['type' => $type]) }}" 
                   class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                    Clear
                </a>
                @endif
            </div>
        </form>
        
        @if($dateFrom || $dateTo)
        <div class="mt-4 p-3 bg-[#9fd7e4]/20 rounded-lg">
            <p class="text-sm text-gray-700">
                <span class="font-semibold">Filtered by:</span>
                @if($dateFrom && $dateTo)
                    {{ \Carbon\Carbon::parse($dateFrom)->format('M d, Y') }} to {{ \Carbon\Carbon::parse($dateTo)->format('M d, Y') }}
                @elseif($dateFrom)
                    From {{ \Carbon\Carbon::parse($dateFrom)->format('M d, Y') }}
                @elseif($dateTo)
                    Until {{ \Carbon\Carbon::parse($dateTo)->format('M d, Y') }}
                @endif
            </p>
        </div>
        @endif
    </div>

    <!-- Contact Form Submissions -->
    @if($type === 'all' || $type === 'contact')
    <div class="mb-8 bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-[#9fd7e4]/10 to-white">
            <h2 class="text-xl font-bold text-gray-900">Contact Form Submissions ({{ $contacts->total() }})</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Subject</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($contacts as $contact)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $contact->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{ $contact->email }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{ $contact->phone ?? 'N/A' }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">{{ \Illuminate\Support\Str::limit($contact->subject, 30) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $contact->created_at->format('M d, Y') }}</div>
                            <div class="text-xs text-gray-400">{{ $contact->created_at->format('h:i A') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button onclick="showContactDetails({{ $contact->id }}, 'contact')" 
                                    class="text-[#0a4d78] hover:text-[#0a5a8a] font-semibold">
                                View
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                            No contact form submissions found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($contacts->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $contacts->links() }}
        </div>
        @endif
    </div>
    @endif

    <!-- Medical Tourism Form Submissions -->
    @if($type === 'all' || $type === 'contacttable2')
    <div class="mb-8 bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-[#0a5a8a]/10 to-white">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-900">Medical Tourism Form Submissions ({{ $contactTable2->total() }})</h2>
                @if($contactTable2->total() > 0)
                <a href="{{ route('admin.contacts.export', array_merge(request()->except('page'), ['type' => 'contacttable2'])) }}" 
                   class="px-4 py-2 bg-green-600 text-white rounded-lg text-sm font-semibold hover:bg-green-700 transition-colors flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Export</span>
                </a>
                @endif
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Country</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Treatment</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Subject</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($contactTable2 as $contact)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $contact->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{ $contact->email }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{ $contact->country ?? 'N/A' }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">{{ $contact->treatment_interest ? \Illuminate\Support\Str::limit($contact->treatment_interest, 25) : 'N/A' }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">{{ \Illuminate\Support\Str::limit($contact->subject, 30) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $contact->created_at->format('M d, Y') }}</div>
                            <div class="text-xs text-gray-400">{{ $contact->created_at->format('h:i A') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button onclick="showContactDetails({{ $contact->id }}, 'contacttable2')" 
                                    class="text-[#0a4d78] hover:text-[#0a5a8a] font-semibold">
                                View
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-8 text-center text-gray-500">
                            No medical tourism form submissions found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($contactTable2->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $contactTable2->links() }}
        </div>
        @endif
    </div>
    @endif

    <!-- Contact Details Modal -->
    <div id="contactDetailsModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity" onclick="closeContactDetails()"></div>
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                <button onclick="closeContactDetails()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                <div id="contactDetailsContent" class="p-6">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function showContactDetails(id, type) {
            fetch(`/admin/contacts/${id}?type=${type}`)
                .then(response => response.json())
                .then(data => {
                    const modal = document.getElementById('contactDetailsModal');
                    const content = document.getElementById('contactDetailsContent');
                    
                    let html = `
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Details</h2>
                        <div class="space-y-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Name</label>
                                <p class="text-gray-900 mt-1">${data.name}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Email</label>
                                <p class="text-gray-900 mt-1"><a href="mailto:${data.email}" class="text-[#0a4d78] hover:underline">${data.email}</a></p>
                            </div>
                            ${data.phone ? `
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Phone</label>
                                <p class="text-gray-900 mt-1"><a href="tel:${data.phone}" class="text-[#0a4d78] hover:underline">${data.phone}</a></p>
                            </div>
                            ` : ''}
                            ${data.country ? `
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Country</label>
                                <p class="text-gray-900 mt-1">${data.country}</p>
                            </div>
                            ` : ''}
                            ${data.treatment_interest ? `
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Treatment Interest</label>
                                <p class="text-gray-900 mt-1">${data.treatment_interest}</p>
                            </div>
                            ` : ''}
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Subject</label>
                                <p class="text-gray-900 mt-1">${data.subject}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Message</label>
                                <p class="text-gray-900 mt-1 whitespace-pre-wrap">${data.message}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <label class="text-sm font-semibold text-gray-600">Submitted At</label>
                                <p class="text-gray-900 mt-1">${data.created_at}</p>
                            </div>
                        </div>
                    `;
                    
                    content.innerHTML = html;
                    modal.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error loading contact details');
                });
        }

        function closeContactDetails() {
            document.getElementById('contactDetailsModal').classList.add('hidden');
        }
    </script>
@endsection

