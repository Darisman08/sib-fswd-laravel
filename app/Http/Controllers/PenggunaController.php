<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\PenggunaGrup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grup()
    {
        $grup = PenggunaGrup::all();
        return view('pengguna.grpengguna', compact('grup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daftar()
    {
        $pengguna = DB::table('users')
        ->join('grup','users.grup_id','=','grup.id')
        ->select('users.id','users.nama as nama','users.email','grup.nama as gnama')
        ->get();
        return view('pengguna.dfpengguna', compact('pengguna'));
    }

    public function create_pengguna()
    {        
        return view('/pengguna.pengguna_create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_pengguna(Request $request)
    {
        User::create([
            'nama' => $request->name,
            'grup_id' => $request->grup_id,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/dfpengguna')->with('success','Data Berhasil dibuat!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
