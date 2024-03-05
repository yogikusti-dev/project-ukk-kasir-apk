@extends('admin.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
    <a href="{{  route('printpenjualan')  }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i>Cetak Laporan</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        <div class="card-header d-flex justify-content-between align-items-center">
        <a href="/admin/penjualan/create" class="btn btn-primary mt-3">Tambah Transaksi</a>
        <hr>
        <form class="d-flex" action="{{  route('caripenjualan') }}" method="get">
            <div class="input-group">
                <input type="search" class="form-control bg-light border-0 small" name="cari" value="{{  Request::get('cari')  }}" placeholder="Cari Penjualan" aria-label="Search"
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
                        <th>ID Penjualan</th>
                        <th>Nama Member</th>
                        <th>Nama Kasir</th>
                        <th>Tanggal Penjualan</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $penjualans as $p )
                        
                    <tr>
                        <td>{{  $p->id_penjualan }}</td>
                        <td>{{  $p->nama_pelanggan }}</td>
                        <td>{{  $p->nama_kasir }}</td>
                        <td>{{  $p->tanggal_penjualan  }}</td>
                        <td>{{  rupiah($p->total_harga)  }}</td>
                        <td><center>
                            <a class="btn btn-primary" href="/admin/penjualan/{{ $p->id_penjualan }}/edit"><i class="fas fa-pen"></i></a>
                            <a class="btn btn-danger" href="/admin/penjualan/hapus/{{ $p->id_penjualan }}"><i class="fas fa-trash"></i></a>
                    </center>
                    </tr>
                  
                    @endforeach
                </tbody>  
            </table>
        </div>
        <br>
        {{  $penjualans->links()  }}
    </div>
</div>
@endsection