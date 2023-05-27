@extends('layout')

@section('title')
    Daftar Pengguna
@endsection
@section('judul')
    Data Daftar Penggguna
    <a href="/dfproduk-create" class="btn btn-primary btn-sm float-end m-1">Tambah Pengguna</a>
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $p)
                <tr>
                    <th scope="row">{{ $loop->iteration }}.</th>
                    <td>
                        <a href="/dfproduk-edit-{{$p->id}}" class="btn btn-success btn-sm bi bi-pencil-square"></a>
                        <form action="/dfproduk-del-{{$p->id}}" class="d-inline">
                            <button type="submit" id="deluser" name="deluser" value=""
                                class="btn btn-danger btn-sm bi bi-trash"></button>
                        </form>
                    </td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
