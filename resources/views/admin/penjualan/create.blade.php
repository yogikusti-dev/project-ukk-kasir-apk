@extends('admin.master')
@section('content')
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="row mb-4">
        <div class="col-6 mb-1">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-size-7 font-weight-bold text-primary">Pembelian</h6>
                </div>
                <div class="card-body py-4">
                    <label>Cari ID Produk</label>
                    <form class="d-flex" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control bg-light border-0 small" name="id" value=""
                                placeholder="" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- <form method="get">
                        @csrf
                        <label>ID Produk</label>
                        <div class="d-flex">
                            <select id="inputState" class="form-control" name="id">
                                <option value="" align="center" selected>
                                    ---{{ isset($p_detail) ? $p_detail->nama_produk : 'Nama Produk' }}---</option>
                                @foreach ($produk as $c)
                                    <option value="{{ $c->id }}">{{ $c->id . '-' . $c->nama_produk }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary">Pilih</button>
                        </div>
                    </form> --}}
                    <form action="{{ route('detailpenjualan') }}" method="get">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id_penjualan" value="{{ Request::segment(3) }}">
                            <input type="hidden" name="nama_produk"
                                value="{{ isset($p_detail) ? $p_detail->nama_produk : '' }}">
                            <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                            <input type="hidden" name="id" value="{{ isset($p_detail) ? $p_detail->id : '' }}">
                        </div>
                        <div class="form-group">
                            <label>ID Produk</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputSatuan"
                                name="id" value="{{ isset($p_detail) ? $p_detail->id : '' }}"disabled />
                        </div>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputSatuan"
                                name="nama_produk" value="{{ isset($p_detail) ? $p_detail->nama_produk : '' }}"disabled />
                        </div>
                        <div class="form-group">
                            <label>Harga Satuan</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputHarga"
                                name="harga" value="{{ isset($p_detail) ? rupiah($p_detail->harga) : '' }}"disabled />
                        </div>
                        <div class="form-group">
                            <label>QTY</label>
                            <div class="d-flex">
                                <a href="?id={{ request('id') }}&act=min&qty={{ $qty }}" class="btn btn-primary"><i
                                        class="fas fa-minus"></i></a>
                                <input type="text" name="jumlah_produk" class="form-control"
                                    value="{{ $qty }}">
                                <a href="?id={{ request('id') }}&act=plus&qty={{ $qty }}"
                                    class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>SUBTOTAL</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputHarga"
                                name="subtotal" value="{{ rupiah($subtotal) }}" disabled />
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">Tambah Produk</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
                </div>
                <div class="card-body py-2">
                    <form method="get">
                        @csrf
                        <div class="form-group">
                            <label>Total Belanja</label>
                            <div class="d-flex">
                                <input type="text" class="form-control" id="" name="total_harga"
                                    value="{{ rupiah($penjualan->total_harga) }}" disabled />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bayar</label>
                            <input type="text" class="form-control form-control-user" id="" name="bayar"
                                value="{{ request('bayar') }}" />
                        </div>
                        <button type="submit" class="btn btn-success">Hitung</button>
                        <hr>
                    </form>
                    <div class="form-group">
                        <label>Kembalian</label>
                        <div class="d-flex">
                            <input type="text" class="form-control" value="{{ rupiah($kembali) }}" disabled />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <form action="{{ route('updatebayar') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_detail" value="{{ Request::segment(3) }}">
                                <input type="hidden" name="bayar" value="{{ request('bayar') }}">
                                <input type="hidden" name="kembalian" value="{{ $kembali }}">
                                <button type="submit" class="btn btn-success">Tambah</button>
                                <a href="/admin/penjualan" class="btn btn-info"><i
                                        class="fas fa-check"></i>Selesai</a>
                                <a href="?print=klik" class="btn btn-info"><i class="fas fa-print"></i>Cetak
                                    Struk</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        <div class="row mb-4">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pelanggan/Member</h6>
                </div>
                <div class="card-body py-2">
                    <label>Cari ID Member</label>
                    <form class="d-flex" method="get">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control bg-light border-0 small" name="id_pelanggan"
                                value="" placeholder="" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="{{ route('memberpenjualan') }}">
                        @csrf
                        <input type="hidden" name="id_penjualan" value="{{ Request::segment(3) }}">
                        <input type="hidden" name="id_pelanggan" value="{{ isset($m_detail) ? $m_detail->id : '' }}">
                        <input type="hidden" name="nama_pelanggan"value="{{ isset($m_detail) ? $m_detail->nama_pelanggan : '' }}">

                        <label>Nama Member</label>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control form-control-user" id=""
                                name="nama_pelanggan"
                                value="{{ isset($m_detail) ? $m_detail->nama_pelanggan : '' }}"disabled />
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pembelian</h6>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Produk</th>
                                    <th>Subtotal</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detailpenjualan as $dp)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dp->nama_produk }}</td>
                                        <td>{{ $dp->jumlah_produk }}</td>
                                        <td>{{ rupiah($dp->subtotal) }}</td>
                                        <td>
                                            <center><a
                                                    href="/admin/penjualan/detail/hapus?id={{ $dp->detailid }}">
                                                    <i class="fas fa-times"></i></center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
