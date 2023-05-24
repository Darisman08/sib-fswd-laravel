<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $produk =[
            [
                'nama' => 'Laptop',
                'kategori' => 'Elektronik',
                'harga' => '5.000.000',
                'stok' => '12'
            ],
            [
                'nama' => 'Kamera',
                'kategori' => 'Elektronik',
                'harga' => '7.000.000',
                'stok' => '9'
            ],
            [
                'nama' => 'Kopi',
                'kategori' => 'Minuman',
                'harga' => '4.000',
                'stok' => '100'
            ],
            [
                'nama' => 'Semangka',
                'kategori' => 'Buah-buahan',
                'harga' => '5.000',
                'stok' => '20'
            ],
            [
                'nama' => 'Bayam',
                'kategori' => 'Sayuran',
                'harga' => '6.000',
                'stok' => '10'
            ]
        ];
        return view('landing', compact('produk')
        );
    }
}
