<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php
    // require_once 'koneksi.php';
    // $query = "SELECT id,avatar,name,email,phone,role FROM users";
    // $result = mysqli_query($conn, $query);
    ?>
    <div class="container mt-4">
        <?php /* include('message.php'); */ ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengguna
                            <a href="logout.php" class="btn btn-danger btn-sm float-end m-1">Keluar</a>
                            <a href="adduser.php" class="btn btn-primary btn-sm float-end m-1">Tambah User</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Aksi</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $users)
                                <tr>
                                    <td>
                                        {{ $users->id }}
                                    </td>
                                    <td>
                                        <a href="detailuser.php?id=" class="btn btn-info btn-sm">Detail</a>
                                        <a href="edituser.php?id=" class="btn btn-success btn-sm">Edit</a>
                                        <form action="action-user.php" method="post" class="d-inline">
                                            <button type="submit" id="deluser" name="deluser" value="" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                    <td>
                                        <img src="{{ Storage::url('public/users/').$users->avatar }}" width="80" height="80">
                                    </td>
                                    <td>
                                        {{ $users->name }}
                                    </td>
                                    <td>
                                        {{ $users->email }}
                                    </td>
                                    <td>
                                        {{ $users->phone }}
                                    </td>
                                    <td>
                                        {{ $users->role }}
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>