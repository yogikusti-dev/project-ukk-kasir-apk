@extends('admin.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
    <a href="{{  route('printpelanggan')  }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i>Cetak Laporan</a>
</div>
<h1 class="h3 mb-2 text-gray-800">Tabel Member</h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
        <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{  route('createpelanggan')  }}" class="btn btn-primary mt-3">Tambah Member</a>
            <form class="d-flex" action="{{  route('caripelanggan') }}" method="get">
                <div class="input-group">
                    <input type="search" class="form-control bg-light border-0 small" name="cari" value="{{  Request::get('cari')  }}" placeholder="Cari Member" aria-label="Search"
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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th width="10%">Nama Pelanggan</th>
                        <th width="10%">Jenis Kelamin</th>
                        <th width="40%">Alamat</th>
                        <th width="10%">No Telepon</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $pelanggan as $p )
                    <tr>
                        <td>{{  $p->id_pelanggan  }}</td>
                        <td>{{  $p->nama_pelanggan  }}</td>
                        <td>{{  $p->jenis_kelamin  }}</td>
                        <td>{{  $p->alamat }}</td>
                        <td>{{  $p->no_telp }}</td>
                        <td><center>
                              <a class="btn btn-success btn sm" href="/admin/pelanggan/edit/{{ $p->id_pelanggan }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-danger btn sm" href="/admin/pelanggan/hapus/{{ $p->id_pelanggan }}"><i class="fas fa-trash"></i></a>
                        </center>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>  
            </table>
        </div>
        <br>
        {{  $pelanggan->links()  }}
    </div>
</div>  
@endsection
