<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    // List semua fasilitas
    public function index()
    {
        $facilities = Facility::where('is_active', true)->latest()->get();
        return view('facilities.index', compact('facilities'));
    }

    // Detail fasilitas
    public function show(Facility $facility)
    {
        // Cek aktif
        abort_if(!$facility->is_active, 404);

        return view('facilities.show', compact('facility'));
    }
}
