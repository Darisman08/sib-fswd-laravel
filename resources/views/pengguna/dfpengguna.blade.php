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
                            <h4>Data Daftar Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        @auth
                                        @if (auth()->user()->grup_id == 1)
                                        <th scope="col">Aksi</th>
                                        @endif
                                        @endauth
                                        <th scope="col">Nama Pengguna</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Grup</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengguna as $p)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}.</th>
                                            @auth
                                            @if (auth()->user()->grup_id == 1)
                                            <td>
                                                <a href="/dfpengguna-create" class="btn btn-primary btn-sm bi bi-plus-square" ></a>
                                                <a href="/dfpengguna-edit-{{ $p->id }}"
                                                    class="btn btn-success btn-sm bi bi-pencil-square"></a>
                                                <form action="/dfpengguna-del-{{ $p->id }}" class="d-inline">
                                                    <button type="submit" id="deluser" name="deluser" value=""
                                                        class="btn btn-danger btn-sm bi bi-trash"></button>
                                                </form>
                                            </td>
                                            @endif
                                            @endauth
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->email }}</td>
                                            <td>{{ $p->gnama }}</td>
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
