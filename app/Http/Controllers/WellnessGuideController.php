<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellnessGuideController extends Controller
{
    public function index()
    {
        return view('wellness-guide');
    }
}
