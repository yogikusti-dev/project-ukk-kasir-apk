@extends('kasir.master')
@section('content')
                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="{{$users->id}}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputIdProduk" name="id" value="{{  $users->id  }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputNamaProdukl" name="nama_lengkap" value="{{  $users->nama_lengkap }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputHarga"  name="username" value="{{  $users->username }}">
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputText" name="email" value="{{  $users->email  }}">
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputText" name="role" value="{{   $users->role  }}">
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputText" name="alamat" value="{{  $users->alamat  }}">
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputText" name="jenis_kelamin" value="{{  $users->jenis_kelamin }}">
                                           
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Edit User</button>
                                    <hr>
                                </form>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{  asset('template/img/foto1.jpg')  }}" class="rounded float-start w-100" alt="">
                                </div>
                                <a href="{{  route('userkasir')  }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
@endsection