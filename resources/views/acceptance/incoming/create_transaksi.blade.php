@extends('layouts.master')
@section('titile',' Tambah Data Transaksi ')
@section('content')




<div class="content-body">

  <div class="row page-titles mx-0 mt-2">

    <h3 class="col p-md-0">Tambah Data</h3>

    <div class="col p-md-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.acceptance') }}"> Acceptance </a></li>
        <li class="breadcrumb-item"><a href="{{ route('acceptance.incoming.index') }}">Incoming</a></li>
        <li class="breadcrumb-item"><a href="{{ route('acceptance.transaksi') }}">Transaksi</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data </a></li>
      </ol>
    </div>

  </div>

  <div class="container-fluid">

    <div class="card">

      <div class="card-header pt-4">
        <a href="{{ route('acceptance.incoming.transaksi') }}" class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> &nbsp KEMBALI</a>
        <h4>TAMBAH DATA TRANSAKSI INCOMING</h4>
      </div>

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
                                            <label class="col-sm-2 col-form-label"> No BTB </label>
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
                                            <label class="col-sm-2 col-form-label"> FIT NUMBER </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter SMU/AWB ... ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> SMU/AWB </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter Pelanggan... ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> BANDARA ASAL </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter  BANDARA ASAL... ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> BANDARA TUJUAN </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter BANDARA TUJUAN... ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> COMODITY </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter COMODITY... ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> QOLLY </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder=" Enter QOLLY... ">
                                            </div>
                                        </div>
                                    
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success"> Simpan </button>
                                                <a href=" {{route('acceptance.transaksi')}} " class="btn btn-dark"> Batal</a>
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