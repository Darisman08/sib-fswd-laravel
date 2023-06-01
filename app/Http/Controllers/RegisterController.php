<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'grup_id' => $request->grup_id,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/')->with('success','Data Berhasil dibuat!');
    }
}
