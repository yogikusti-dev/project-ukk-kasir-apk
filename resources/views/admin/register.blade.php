@extends('admin.master')
@section('contents')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="col-lg-3 d-flex d-lg-block bg-register-image2 mb-5">
                    <img src="{{ asset('template/img/fotoregister.jpg') }}" class="rounded float-start w-100 m-3"
                        alt="">
                </div>
                <div class="d-flex">
                    <div class="col-lg-4 d-none d-lg-block "></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftarkan Akun Mu!</h1>
                                @if (session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form action="{{ route('actionregister') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="nama_lengkap"
                                            id="exampleInputNamalengkap" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            id="exampleInputEmail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            id="exampleInputUsername" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="alamat"
                                            id="exampleInputalamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="jenis_kelamin" class="fa-addres-book">Jenis
                                            Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label left " for="role" class="fa-addres-book"> Role</label>
                                        <select class="form-control" name="role">
                                            <option value="1">Admin</option>
                                            <option value="2">Kasir</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar Akun
                                    </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
