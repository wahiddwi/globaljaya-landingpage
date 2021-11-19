<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();

        return view('pages.admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();

        return view('pages.admin.produk.create', compact('produk'));
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
            'title' => 'required',
            'image' => 'required'
        ]);

        $produk = new Produk();
        $produk->title = $request->title;
        $produk['image'] = $request->file('image')->store(
            'assets/images', 'public'
        );

        $produk->save();

        return redirect()->route('produk.index')->with('message', 'Data Berhasil Disimpan');
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
        $produk = Produk::findOrFail($id);

        return view('pages.admin.produk.edit', compact('produk'));
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
            'title' => 'required',
            'image' => 'required'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->title = $request->title;

        if ($request->image) {
            # menghapus gambar lama yang ada di Storage
            Storage::disk('local')->delete('public/'.$produk->image);
        }
        //request gambar untuk upload gambar baru
        $data['image'] = $request->file('image')->store(
            'assets/images', 'public'
        );
        $produk->update($data);

        return redirect()->route('produk.index')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $image = Storage::disk('local')->delete('public/'.$produk->image);
        $produk->delete();

        return redirect()->route('produk.index')->with('message', 'Data Berhasil Dihapus');
    }
}
