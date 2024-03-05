@extends('admin.master')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('cetaklaporanuser') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('register') }}" class="btn btn-primary mt-3">Tambah User</a>
                <form class="d-flex" action="{{ route('cariuser') }}" method="get">
                    <div class="input-group">
                        <input type="search" class="form-control bg-light border-0 small" name="cari"
                            value="{{ Request::get('cari') }}" placeholder="Cari User" aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="110%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->nama_lengkap }}</td>
                                    <td>{{ $u->username }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->role }}</td>
                                    <td>{{ $u->alamat }}</td>
                                    <td>{{ $u->jenis_kelamin }}</td>
                                    <td>
                                        <center>
                                            <a class="btn btn-primary sm"
                                                href="/admin/user/edit/{{ $u->id }}"><i class="fas fa-pen"></i></a>
                                            <a class="btn btn-danger"
                                                href="/admin/user/hapus/{{ $u->id }}"><i class="fas fa-trash"></i></a>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                {{  $users->links()  }}
            </div>
        </div>
    @endsection
