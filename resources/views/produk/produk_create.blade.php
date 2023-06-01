@extends('layout')

@section('title')
    Daftar Produk
@endsection
@section('judul')
    Tambah Data Produk
@endsection
@section('content')
    <div class="card-body">
        <form action="/dfproduk-store" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-12">
                <label>Nama Produk</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Produk" required>
            </div>
            <div class="col-md-6">
                <label>Kategori</label>
                <select id="kategori" name="kategori" class="form-select" aria-label="Pilih Kategori Produk" required>
                    <option selected>Pilih Kategori Produk</option>
                    <option value="1">Kendaraan</option>
                    <option value="2">Elektronik</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Harga</label>
                <input type="text" id="harga" name="harga" class="form-control" required>
            </div>
            <div class="col-12">
                <label>Deskripsi</label>
                <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
@endsection
