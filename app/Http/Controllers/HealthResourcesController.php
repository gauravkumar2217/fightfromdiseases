<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthResourcesController extends Controller
{
    public function index()
    {
        return view('health-resources');
    }
}
