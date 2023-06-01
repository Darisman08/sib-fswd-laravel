@extends('layout')

@section('title')
    Tambah Daftar Pengguna
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
                            <form action="{{ url('/dfpengguna-store') }}" method="post" enctype="multipart/form-data"
                                class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <label>Nama</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="name@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Grup</label>
                                    <select id="grup_id" name="grup_id" class="form-select"
                                        aria-label="Pilih Grup Pengguna" required>
                                        <option selected>Pilih Grup Pengguna</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input type="password" id="password" name="password" class="form-control" required>
                                        <button class="btn btn-primary" type="button"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path
                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg></button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
