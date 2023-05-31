@extends('layout')

@section('title')
    Grup Pengguna
@endsection
@section('content')
    <section id="services" class="services">
        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <div class="card" style="width: 500px">
                        <div class="card-header">
                            <h4>Data Grup Pengguna</h4>
                        </div>
                        <div class="card-body">
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
                                                <a href="/pengguna-create" class="btn btn-primary btn-sm bi bi-plus-square" ></a>
                                                <a href="/dfproduk-edit-{{ $g->id }}"
                                                    class="btn btn-success btn-sm bi bi-pencil-square"></a>
                                                <form action="/dfproduk-del-{{ $g->id }}" class="d-inline">
                                                    <button type="submit" id="deluser" name="deluser" value=""
                                                        class="btn btn-danger btn-sm bi bi-trash"></button>
                                                </form>
                                            </td>
                                            <td>{{ $g->nama }}</td>
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
