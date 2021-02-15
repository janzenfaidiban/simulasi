
@extends('layouts.master')
@section('titile','Cashier | Outgoing ')
@section('content')


   

<div class="content-body">

<div class="row page-titles mx-0 mt-2">

  <h3 class="col p-md-0">OUTGOING </h3>

  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=" {{route('dashboard.cashier')}} ">Cashier</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Outgoing</a></li>
    </ol>
  </div>

</div>

<div class="container-fluid">

  <div class="card">

    <div class="card-header pt-4">
      <a href="" class="btn btn-dark float-right"> <i class="fa fa-print"></i>  Cetak Rekapan </a>
      <a href="" class="btn btn-secondary float-right"><i class="fa fa-download"></i> Download PDF </a>
     
    </div>
<hr>
    <div class="card-body pt-0">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-datatable">
          <thead>
            <tr>
              <th width="1%">NO</th>
              <th  class="text-center"> No BTB </th>
              <th  class="text-center"> Pelanggan </th>
              <th class="text-center" width="30%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 1; @endphp
          
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td>  </td>
              <td class="text-center"></td>
              <td>    

                <div class="text-center">
                <a href=" {{route('cashier.outgoing.transaksi')}} " class="btn btn-primary btn-sm">
                  <i class="fa fa-compress"> TAMPILKAN TRANSAKSI </i> 
                  </a>

                <a href="{{route('cashier.outgoing.btb')}}" class="btn btn-secondary btn-sm">
                  <i class="fa fa-print"> CETAK KWITANSI BTB </i> 
                </a>  
              
                </div>

              


              </td>
            </tr>
           
          </tbody>
        </table>
      </div>
    </div>

  </div>





</div>
<!-- #/ container -->
</div>


@stop