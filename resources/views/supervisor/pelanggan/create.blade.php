@extends('layouts.master')
@section('titile',' Tambah Data Pengguna ')
@section('content')



<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                               <!-- start page title -->
                               <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="{{route('dashboard.supervisor')}}">  Supservisor </a></li>
                                                <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
                                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data </a></li>
                                            </ol>
                                        </div>
                                        <!-- <h4 class="page-title"></h4> -->
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control border-0" id="dash-daterange">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-secondary border-secondary text-white">
                                                            <i class="mdi mdi-calendar-range"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </form>
                                    </div>
                                    <h4 class="page-title">Tambah Data Pelanggan  </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


    <div class="card">
                <div class="col-lg-12">
                            <div class="card-body">
                                <div class="basic-form">
                                <form method="POST" action="{{ route('pelanggan.store') }}" enctype="multipart/form-data">
                                  @csrf     

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Nama </label>
                                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="Enter Fist Name">
                                                
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- <div class="form-group col-md-6">
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
                                            </div> -->
                                        </div>
                                    
                                        <br><br><hr>
                                        <button type="submit" class="btn btn-primary">Tambah Data </button>
                                        <a href="{{route('pelanggan.index')}}" class="btn btn-dark"> Batal </a>
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