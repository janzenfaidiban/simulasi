@extends('layouts.master')
@section('titile',' Edit Data Transaksi ')
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
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard.acceptance') }}"> Acceptance </a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('acceptance.outgoing.index') }}">Outgoing</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('acceptance.outgoing.transaksi') }}">Transaksi</a></li>
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
                                    <h4 class="page-title"> </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 



                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">EDIT  DATA TRANSAKSI OUTGOING</h4>
                                   

                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label"> Tanggal </label>
                                                <input type="date" class="form-control" id="inputEmail4" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">No BTB</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="type.."  readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">PELANGGAN</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="type.." readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">FIT NUMBER</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="type..">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">SMU/AWB</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="type..">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">BANDARA  ASAL</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="type..">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">BANDARA TUJUAN</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="type..">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">COMODITY</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="type..">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">QOLLY</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="type..">
                                            </div>
                                        
                                        </div>


                                        <button type="submit" class="btn btn-success"> Simpan </button>
                                         <a href=" {{route('acceptance.outgoing.transaksi')}} " class="btn btn-dark"> Batal</a>

                                    </form>

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div>

                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@stop