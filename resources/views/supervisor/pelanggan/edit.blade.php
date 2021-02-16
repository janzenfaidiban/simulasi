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
                                                <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
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
                                    <h4 class="page-title">Edit Data Pelanggan  </h4>
                                </div>
                            </div>
                        </div>     
              <!-- end page title --> 

 <div class="card">
      <div class="col-lg-12">
             <div class="card-body">
                 <div class="basic-form">
                                <form method="POST" action="{{ route('pelanggan.update', ['id' => $pelanggan->id]) }}" enctype="multipart/form-data">
                               @method('patch')
                          @csrf     

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label> Nama  </label>
                                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" value="{{$pelanggan->nama}}" required autocomplete="nama" autofocus placeholder="Enter Fist Name">
                                                
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                         </div>
                                            
                                    
                                        <br><br><hr>
                                        <button type="submit" class="btn btn-primary">Simpan Data </button>
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