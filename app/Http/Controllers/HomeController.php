<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Speciality;
use App\Models\PhotoGallery;
use App\Models\ServiceCount;
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

        $galleryPhotos = PhotoGallery::where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('created_at', 'desc')
            ->get();

        $serviceCounts = ServiceCount::where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('label')
            ->get();

        return view('home', compact('hospitals', 'specialities', 'galleryPhotos', 'serviceCounts'));
    }
}

