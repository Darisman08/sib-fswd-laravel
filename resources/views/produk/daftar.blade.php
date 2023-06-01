@extends('layout')

@section('title')
    Daftar Pengguna
@endsection
@section('content')
    <section id="services" class="services">
        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Daftar Produk
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table align-middle table-striped">
                                <thead>
                                    <tr> 
                                        <th>#</th>
                                        @auth
                                        @if (auth()->user()->grup_id == 1)
                                        <th>Aksi</th>
                                        @endif
                                        @endauth
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th  class="w-50" >Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $p)
                                        <tr>
                                            <th>{{ $loop->iteration }}.</th>
                                            @auth
                                            @if (auth()->user()->grup_id == 1)
                                            <td>
                                                <a href="/pengguna-create" class="btn btn-primary btn-sm bi bi-plus-square" ></a>
                                                <a href="/pengguna-edit-{{ $p->id }}"
                                                    class="btn btn-success btn-sm bi bi-pencil-square"></a>
                                                <form action="/pengguna-del-{{ $p->id }}" class="d-inline">
                                                    <button type="submit" id="deluser" name="deluser" value=""
                                                        class="btn btn-danger btn-sm bi bi-trash"></button>
                                                </form>
                                            </td>
                                            @endif
                                            @endauth
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->harga }}</td>
                                            <td>{{ $p->deskripsi }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
