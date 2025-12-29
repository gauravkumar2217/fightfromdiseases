<!-- Contact Form Modal -->
<div id="contactModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Background overlay -->
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity modal-backdrop" id="modalBackdrop"></div>

    <!-- Modal panel -->
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl modal-content">
            <!-- Close button -->
            <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors" id="closeModal">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Modal content -->
            <div class="bg-white px-6 py-8 sm:p-10">
                <div class="text-center mb-6">
                    <h3 class="text-3xl font-bold text-gray-900 mb-2" id="modal-title">Get in Touch</h3>
                    <p class="text-gray-600">Fill out the form below and we'll get back to you soon.</p>
                </div>

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

                <form action="{{ route('contacttable2.submit') }}" method="POST" class="space-y-5" id="contactModalForm">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="modal_name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="modal_name" name="name" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                placeholder="John Doe">
                        </div>
                        
                        <div>
                            <label for="modal_email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="modal_email" name="email" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="modal_phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="modal_phone" name="phone" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                    placeholder="{{ $getSetting('contact_phone', '+91 9560847496') }}">
                        </div>
                        
                        <div>
                            <label for="modal_country" class="block text-sm font-semibold text-gray-700 mb-2">Country</label>
                            <input type="text" id="modal_country" name="country" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                placeholder="Your Country">
                        </div>
                    </div>

                    <div>
                        <label for="modal_treatment" class="block text-sm font-semibold text-gray-700 mb-2">Treatment Interest</label>
                        <select id="modal_treatment" name="treatment_interest" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                            <option value="">Select Treatment Interest</option>
                            <option value="Orthopaedics & Joint Replacement">Orthopaedics & Joint Replacement</option>
                            <option value="Cardiology & Cardiac Surgery">Cardiology & Cardiac Surgery</option>
                            <option value="Oncology (Cancer Care)">Oncology (Cancer Care)</option>
                            <option value="Neurology & Spine Surgery">Neurology & Spine Surgery</option>
                            <option value="Organ Transplants">Organ Transplants</option>
                            <option value="Urology & Laparoscopic Surgery">Urology & Laparoscopic Surgery</option>
                            <option value="Robotic & Minimally Invasive Procedures">Robotic & Minimally Invasive Procedures</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="modal_subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject *</label>
                        <select id="modal_subject" name="subject" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                            <option value="">Select a subject</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Treatment Consultation">Treatment Consultation</option>
                            <option value="Hospital Information">Hospital Information</option>
                            <option value="Travel & Accommodation">Travel & Accommodation</option>
                            <option value="Cost Estimation">Cost Estimation</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="modal_message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                        <textarea id="modal_message" name="message" rows="5" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300 resize-none"
                            placeholder="Tell us about your medical needs..."></textarea>
                    </div>
                    
                    <div class="flex gap-4 pt-2">
                        <button type="submit" 
                            class="flex-1 px-8 py-4 bg-[#0a4d78] text-white rounded-lg font-semibold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                            Send Message
                        </button>
                        <button type="button" id="cancelModal" 
                            class="px-8 py-4 bg-gray-200 text-gray-700 rounded-lg font-semibold text-lg hover:bg-gray-300 transition-all duration-300">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

