<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lokasi;
use App\Produk;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(12);
        $lokasi = Lokasi::all();
        return view('landingpage.layanan', compact('lokasi', 'produk'));
    }
}
