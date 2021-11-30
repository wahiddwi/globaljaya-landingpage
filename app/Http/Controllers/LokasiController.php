<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lokasi;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function lokasi()
    {
        $lokasi = Lokasi::all();
        // return view('landingpage.layout', compact('lokasi'));
        View::share('lokasi', $lokasi);
    }
}
