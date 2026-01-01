<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Speciality;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('name')
            ->get();
            
        $specialities = Speciality::where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('name')
            ->get();

        return view('home', compact('hospitals', 'specialities'));
    }
}

