@extends('layout')

@section('title')
    Edit Produk
@endsection
@section('judul')
    Edit Data Produk
@endsection
@section('content')
    <div class="card-body">
        <form action="/dfproduk-update" method="post" enctype="multipart/form-data" class="row g-3">
            @method('put')
            @csrf
            <div class="col-12">
                <label>Nama Produk</label>
                <input type="text" id="nama" name="nama" value="{{$produk->nama}}" class="form-control" placeholder="Nama Produk" required>
                <input type="hidden" id="id" name="id" value="{{$produk->id}}" class="form-control">
            </div>
            <div class="col-md-6">
                <label>Kategori</label>
                <select id="kategori" name="kategori" value="{{$produk->kategori_id}}" class="form-select" aria-label="Pilih Kategori Produk" required>
                    <option selected>{{$produk->kategori_id}}</option>
                    <option value="1">Admin</option>
                    <option value="2">Staff</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Harga</label>
                <input type="text" id="harga" value="{{$produk->harga}}" name="harga" class="form-control" required>
            </div>
            <div class="col-12">
                <label>Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" value="{{$produk->deskripsi}}" class="form-control" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
@endsection
