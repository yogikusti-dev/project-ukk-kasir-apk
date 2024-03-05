@extends('kasir.master')
@section('content')
                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Member</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="{{ route('actionpelanggankasir') }}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label>Nama Pelanggan</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputNamaPelanggan" name="nama_pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="jenis_kelamin" class="fa-addres-book">Jenis Kelamin</label>
                                        <select  class="form-control" name="jenis_kelamin">
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputHarga" name="alamat" >
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputText" name="no_telp" >
                                           
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Member</button>
                                    <hr>
                                </form>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{  asset('template/img/fotomember.jpg')  }}" class="rounded float-start w-100" alt="">
                                </div>
                                <a href="{{  route('pelanggankasir')  }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
@endsection