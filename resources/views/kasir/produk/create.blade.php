@extends('kasir.master')
@section('content')
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('actionprodukkasir') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputNamaProdukl"
                                name="nama_produk">
                        </div>
                        <div class="form-group">
                            <label>Satuan Produk</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputSatuan"
                                name="satuan">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputHarga"
                                name="harga">

                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control form-control-user" id="exampleInputText"
                                name="stok">

                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Produk</button>
                        <hr>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('template/img/foto1.jpg') }}" class="rounded float-start w-100" alt="">
                </div>
            </div>
            <a href="{{ route('produkkasir') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
