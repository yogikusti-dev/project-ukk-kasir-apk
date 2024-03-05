@extends('admin.master')
@section('content')
    <!-- Topbar Search -->
   
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('cetaklaporanproduk') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>
    
    <!-- DataTales Example -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Semua Produk</h1>
    <p class="mb-4"></p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('createproduk') }}" class="btn btn-primary mt-3">Tambah Produk</a>
            <form class="d-flex" action="{{  route('cariproduk') }}" method="get">
                <div class="input-group">
                    <input type="search" class="form-control bg-light border-0 small" 
                    name="cari" value="{{  Request::get('cari')  }}" placeholder="Cari Produk" aria-label="Search"
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
                <table class="table table-bordered" id_produk="dataTable" wid_produkth="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Satuan Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nama_produk }}</td>
                                <td>{{ $p->satuan }}</td>
                                <td>{{ rupiah($p->harga) }}</td>
                                <td>{{ $p->stok }}</td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary" href="/admin/produk/edit/{{ $p->id }}"><i class="fas fa-pen"></i></a>
                                        <a class="btn btn-danger" href="/admin/produk/hapus/{{ $p->id }}"><i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            {{  $produks->links()  }}
        </div>
    </div>
@endsection
