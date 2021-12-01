<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('pages.admin.lokasi.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        return view('pages.admin.lokasi.create', compact('lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'no_telpon' => 'required',
            'email' => 'required|email|unique:lokasi'

        ]);

        $lokasi = new Lokasi();
        $lokasi->nama = $request->nama;
        $lokasi->alamat = $request->alamat;
        $lokasi->latitude = $request->latitude;
        $lokasi->longitude = $request->longitude;
        $lokasi->no_telpon = $request->no_telpon;
        $lokasi->email = $request->email;

        $lokasi->save();

        return redirect()->route('admin.lokasi.index')->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('pages.admin.lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'no_telpon' => 'required',
            'email' => 'required|email|unique:lokasi'
        ]);

        $lokasi = Lokasi::findOrFail($id);
        $lokasi->nama = $request->nama;
        $lokasi->alamat = $request->alamat;
        $lokasi->latitude = $request->latitude;
        $lokasi->longitude = $request->longitude;
        $lokasi->no_telpon = $request->no_telpon;
        $lokasi->email = $request->email;

        $lokasi->update();

        return redirect()->route('admin.lokasi.index')->with('message', 'Data Berhasil DIubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lokasi::where('id', $id)->delete();

        return redirect()->back();
    }
}
