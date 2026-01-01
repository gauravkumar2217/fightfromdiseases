<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiseasePreventionController extends Controller
{
    public function index()
    {
        return view('disease-prevention');
    }
}
