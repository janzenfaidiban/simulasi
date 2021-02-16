


@extends('layouts.master')
@section('titile',' Cashier | Transaksi Edit Data ')
@section('content')

 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

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
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard.cashier') }}"> Cashier </a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('cashier.incoming.index') }}"> Incoming </a></li>
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
                                    <h4 class="page-title"> EDIT DATA  </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


    <div class="card">
    <div class="col-lg-12">
                       
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> Tanggal </label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> No TTB </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter NO BTB">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> PELANGGAN </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter Pelanggan... ">
                                            </div>
                                        </div>
                                    
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success"> Simpan </button>
                                                <a href="{{ route('cashier.incoming.index') }}" class="btn btn-dark"> Batal</a>
                                            </div>
                                        </div>
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