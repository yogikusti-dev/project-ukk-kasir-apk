@extends('kasir.master')

@section('content')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="card shadow mb-4">
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
                        <th >Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $u )
                    <tr>
                        <td>{{  $u->id  }}</td>
                        <td>{{  $u->nama_lengkap  }}</td>
                        <td>{{  $u->username  }}</td>
                        <td>{{  $u->email  }}</td>
                        <td>{{  $u->role  }}</td>
                        <td>{{  $u->alamat  }}</td>
                        <td>{{  $u->jenis_kelamin  }}</td>
                        <td>
                            <center>
                            <a class="btn btn-primary mb-2" href="/user/edit/{{ $u->id }}">Edit</a><br>
                            <a class="btn btn-danger" href="/user/hapus/{{ $u->id}}">Hapus</a>
                            </center>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection