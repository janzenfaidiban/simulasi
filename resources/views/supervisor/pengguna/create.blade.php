@extends('layouts.master')
@section('titile',' Tambah Data Pengguna ')
@section('content')




<div class="content-body">

  <div class="row page-titles mx-0 mt-2">

    <h3 class="col p-md-0">Pengguna</h3>

    <div class="col p-md-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.supervisor') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('pengguna.index') }}">Pengguna</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data </a></li>
      </ol>
    </div>

  </div>

  <div class="container-fluid">

    <div class="card">

      <div class="card-header pt-4">
        <a href="{{ route('pengguna.index') }}" class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> &nbsp KEMBALI</a>
        <h4>Tambah Data Pengguna </h4>
      </div>

      <div class="col-lg-12">
                       
                            <div class="card-body">
                                <div class="basic-form">

                                <form method="POST" action="{{ route('pengguna.store') }}" enctype="multipart/form-data">
                                  @csrf     

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Nama Depan </label>
                                                <input type="text" class="form-control  @error('nama_depan') is-invalid @enderror" name="nama_depan" value="{{ old('nama_depan') }}" required autocomplete="nama_depan" autofocus placeholder="Enter Fist Name">
                                                
                                                @error('nama_depan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control  @error('nama_belakang') is-invalid @enderror" name="nama_belakang" value="{{ old('nama_belakang') }}" required autocomplete="nama_belakang" autofocus placeholder="Enter Last Nama ">
                                                
                                                @error('nama_belakang')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter E-mail..">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>username</label>
                                                <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Enter Username">
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Password  </label>
                                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Confirmasi Password </label>
                                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirmasi Password" name="password_confirmation"  required autocomplete="new-password">
                                            </div>
                                        </div>

                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Level  </label>
                                                <select id="level" class="form-control" name="level">
                                                    <option selected="selected">Pilih Level</option>
                                                    <option value="supervisor"> Supervisor </option>
                                                    <option value="acceptance">  Acceptance</option>
                                                    <option value="cashier"> Cashier </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Foto</label>
                                                <input id="foto" type="file" placeholder="foto" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" autocomplete="on">
                                            </div>
                                        </div>
                                    
                                        <br><br><hr>
                                        <button type="submit" class="btn btn-primary">Tambah Data </button>
                                        <a href="{{route('pengguna.index')}}" class="btn btn-dark"> Batal </a>
                                    </form>
                                </div>
                            </div>
                        </div>
          
      
      </div>

    </div>

  </div>
  <!-- #/ container -->
</div>


@stop