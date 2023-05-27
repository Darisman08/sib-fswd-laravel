<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kategori()
    {
        $kat_produk = ProdukKategori::all();
        return view('produk.kategori', compact('kat_produk'));
    }
    public function daftar()
    {
        $produk = Produk::all();
        /* dd($produk); */
        return view('produk.daftar', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_produk()
    {
        return view('produk.produk_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_produk(Request $request)
    {
        $produk = Produk::create([
            'nama' => $request->name,
            'kategori_id' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
        ]);
        return redirect('/dfproduk');
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
    public function edit_produk($id)
    {
        $produk = Produk::where('id',$id)->first();
        return view('produk.produk_edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_produk(Request $request)
    {
        $produk = Produk::find($request->id)->update([
            'nama' => $request->nama,
            'kategori_id' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
        ]);
        return redirect('/dfproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_produk($id)
    {
        $produk = Produk::find($id)->delete();
        return redirect('/dfproduk');
    }
}
