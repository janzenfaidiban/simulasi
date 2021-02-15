@extends('layouts.master')
@section('titile',' Edit Data Pengguna ')
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
                                                <li class="breadcrumb-item"><a href="{{ route('pengguna.index') }}">Pengguna</a></li>
                                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data </a></li>
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
                                    <h4 class="page-title">Edit Data Pengguna  </h4>
                                </div>
                            </div>
                        </div>     
              <!-- end page title --> 

 <div class="card">
      <div class="col-lg-12">
             <div class="card-body">
                 <div class="basic-form">
                                <form method="POST" action="{{ route('pengguna.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                               @method('patch')
                          @csrf     

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Nama Depan </label>
                                                <input type="text" class="form-control  @error('nama_depan') is-invalid @enderror" name="nama_depan" value="{{$user->nama_depan}}" required autocomplete="nama_depan" autofocus placeholder="Enter Fist Name">
                                                
                                                @error('nama_depan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control  @error('nama_belakang') is-invalid @enderror" name="nama_belakang" value="{{$user->nama_belakang}}" required autocomplete="nama_belakang" autofocus placeholder="Enter Last Nama ">
                                                
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
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" placeholder="Enter E-mail..">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>username</label>
                                                <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{$user->username}}" required autocomplete="username" placeholder="Enter Username">
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
                                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                                <small class="text-muted"><i>Kosongkan jika tidak ingin mengubah password</i></small>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            
                                        </div>

                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Level  </label>
                                                <select id="level" class="form-control" name="level">
                                                    <option selected="selected"> {{$user->level}} </option>
                                                    <option value="supervisor"> Supervisor </option>
                                                    <option value="acceptance">  Acceptance</option>
                                                    <option value="cashier"> Cashier </option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                               
                                                 @if(!@empty($user->foto))
                                                    <img  class="img-thumbnail" src="{{url('gambar/user/'. $user->foto )}}" width="200px" height="200px"  id="upload-img" alt="profile">
                                                    @else
                                                    <img class="img-thumbnail" src=" {{url('assest/img/default.png')}}" width="100px" height="100px" id="upload-img" alt="profile">
                                                    @endif
                                                <input id="foto" type="file" placeholder="foto" class="form-control @error('foto') is-invalid @enderror" name="foto"  autocomplete="on">
                                            </div>
                                        </div>
                                    
                                        <br><br><hr>
                                        <button type="submit" class="btn btn-primary">Simpan Data </button>
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