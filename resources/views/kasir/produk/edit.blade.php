@extends('kasir.master')
@section('content')
                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="{{$produks->id}}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputNamaProdukl" name="nama_produk" value="{{  $produks->nama_produk  }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Satuan Produk</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputSatuan" name="satuan" value="{{  $produks->satuan  }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputHarga"  name="harga" value="{{  $produks->harga  }}">
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputText" name="stok" value="{{  $produks->stok  }}">
                                           
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Edit Produk</button>
                                    <hr>
                                </form>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{  asset('template/img/foto1.jpg')  }}" class="rounded float-start w-100" alt="">
                                </div>
                                <a href="{{  route('produkkasir')  }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
@endsection