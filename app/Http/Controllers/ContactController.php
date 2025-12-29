<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\ContactTable2Mail;
use App\Models\Contact;
use App\Models\ContactTable2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Store contact information in database
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            // Send email to client
            $clientEmail = env('MAIL_CLIENT_ADDRESS');
            
            if ($clientEmail) {
                Mail::to($clientEmail)->send(new ContactFormMail($contact));
            }

            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form submission error: ' . $e->getMessage());
            
            // Still return success to user, but log the error
            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        }
    }

    public function contacttable2Submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:255',
            'treatment_interest' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Store contact information in database
            $contact = ContactTable2::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'treatment_interest' => $request->treatment_interest,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            // Send email to client
            $clientEmail = env('MAIL_CLIENT_ADDRESS', config('mail.from.address'));
            
            if ($clientEmail) {
                Mail::to($clientEmail)->send(new ContactTable2Mail($contact));
            }

            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('ContactTable2 form submission error: ' . $e->getMessage());
            
            // Still return success to user, but log the error
            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        }
    }
}

