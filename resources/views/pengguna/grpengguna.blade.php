@extends('layout')

@section('title')
    Grup Pengguna
@endsection
@section('judul')
    Data Grup Pengguna
    <a href="/dfproduk-create" class="btn btn-primary btn-sm float-end m-1">Tambah Grup</a>
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama Grup</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grup as $g)
                <tr>
                    <th scope="row">{{ $loop->iteration }}.</th>
                    <td>
                        <a href="/dfproduk-edit-{{$g->id}}" class="btn btn-success btn-sm bi bi-pencil-square"></a>
                        <form action="/dfproduk-del-{{$g->id}}" class="d-inline">
                            <button type="submit" id="deluser" name="deluser" value=""
                                class="btn btn-danger btn-sm bi bi-trash"></button>
                        </form>
                    </td>
                    <td>{{ $g->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
