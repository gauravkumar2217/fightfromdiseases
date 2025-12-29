<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactTable2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function dashboard()
    {
        // Get counts
        $contactCount = Contact::count();
        $contactTable2Count = ContactTable2::count();
        $totalSubmissions = $contactCount + $contactTable2Count;

        // Get recent submissions (last 10 from each)
        $recentContacts = Contact::latest()->take(10)->get();
        $recentContactTable2 = ContactTable2::latest()->take(10)->get();

        // Get submissions by date (last 7 days)
        $contactsByDate = DB::table('contacts')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', now()->startOfWeek())
            ->groupBy('date')
            ->get()
            ->pluck('count', 'date');
            
        $contactTable2ByDate = DB::table('contacttable2')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', now()->startOfWeek())
            ->groupBy('date')
            ->get()
            ->pluck('count', 'date');
        
        $submissionsByDate = collect();
        for ($i = 0; $i < 7; $i++) {
            $date = now()->startOfWeek()->addDays($i)->format('Y-m-d');
            $count = ($contactsByDate->get($date) ?? 0) + ($contactTable2ByDate->get($date) ?? 0);
            $submissionsByDate->put($date, $count);
        }

        // Get today's submissions
        $todayContacts = Contact::whereDate('created_at', today())->count();
        $todayContactTable2 = ContactTable2::whereDate('created_at', today())->count();
        $todayTotal = $todayContacts + $todayContactTable2;

        // Get this week's submissions
        $weekContacts = Contact::where('created_at', '>=', now()->startOfWeek())->count();
        $weekContactTable2 = ContactTable2::where('created_at', '>=', now()->startOfWeek())->count();
        $weekTotal = $weekContacts + $weekContactTable2;

        return view('admin.dashboard', [
            'contactCount' => $contactCount,
            'contactTable2Count' => $contactTable2Count,
            'totalSubmissions' => $totalSubmissions,
            'recentContacts' => $recentContacts,
            'recentContactTable2' => $recentContactTable2,
            'todayTotal' => $todayTotal,
            'weekTotal' => $weekTotal,
            'submissionsByDate' => $submissionsByDate,
        ]);
    }

    /**
     * Show all contact submissions.
     */
    public function contacts(Request $request)
    {
        $type = $request->get('type', 'all');
        
        $contacts = collect();
        $contactTable2 = collect();
        
        if ($type === 'all' || $type === 'contact') {
            $contacts = Contact::latest()->paginate(15, ['*'], 'contact_page');
        }
        
        if ($type === 'all' || $type === 'contacttable2') {
            $contactTable2 = ContactTable2::latest()->paginate(15, ['*'], 'contacttable2_page');
        }

        return view('admin.contacts', [
            'contacts' => $contacts,
            'contactTable2' => $contactTable2,
            'type' => $type,
        ]);
    }

    /**
     * Get contact details via AJAX.
     */
    public function getContactDetails(Request $request, $id)
    {
        $type = $request->get('type');
        
        if ($type === 'contacttable2') {
            $contact = ContactTable2::findOrFail($id);
        } else {
            $contact = Contact::findOrFail($id);
        }

        return response()->json([
            'name' => $contact->name,
            'email' => $contact->email,
            'phone' => $contact->phone ?? null,
            'country' => $contact->country ?? null,
            'treatment_interest' => $contact->treatment_interest ?? null,
            'subject' => $contact->subject,
            'message' => $contact->message,
            'created_at' => $contact->created_at->format('F j, Y \a\t g:i A'),
        ]);
    }
}
