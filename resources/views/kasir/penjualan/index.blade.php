@extends('kasir.master')
@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        <a href="/kasir/penjualan/create" class="btn btn-primary mt-3">Tambah Transaksi</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Penjualan</th>
                        <th>Nama Pelanggan</th>
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
                            <a class="btn btn-primary" href="/kasir/penjualan/{{ $p->id_penjualan }}/edit">Edit</a>
                            <a class="btn btn-danger" href="/kasir/penjualan/hapus/{{ $p->id_penjualan }}">Hapus</a>
                    </center>
                    </tr>
                  
                    @endforeach
                </tbody>  
            </table>
        </div>
    </div>
</div>
@endsection