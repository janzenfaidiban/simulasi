
@extends('layouts.master')
@section('titile','Cashier | Transaksi ')
@section('content')


   

<div class="content-body">

<div class="row page-titles mx-0 mt-2">

  <h3 class="col p-md-0"> TRANSAKSI OUTGOING </h3>

  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=" {{route('dashboard.cashier')}} ">Cashier</a></li>
      <li class="breadcrumb-item active"><a href="{{route('cashier.outgoing.index')}} ">Outgoing</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Transaksi</a></li>
    </ol>
  </div>

</div>

<div class="container-fluid">

  <div class="card">
            <div class="row">
               <div class="col-6 text-sm form-inline">
                   <div class="form-group mr-2">
                          <a href="" id="demo-btn-addrow" class="btn btn-success"> BTB-TIMCO21010001  </a>
                    </div>
                    <div class="form-group mr-2">
                         <a href="" id="demo-btn-addrow" class="btn btn-success"> SURYAGITA NUSA RAYA  </a>
                    </div>
                </div>
                   <div class="col-6 text-sm-right form-inline ">
                       <div class="form-group mr-2 text-right">
                           <a href=" {{route('cashier.outgoing.btb')}} " id="demo-btn-addrow" class="btn btn-dark"><i class="mdi mdi-cloud-print mr-2"></i> CETAK KWITANSI BTB </a>
                       </div>
                    </div>
                 </div>

<br><hr>
    <div class="card-body pt-0">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-datatable">
          <thead>
            <tr>
              <th width="1%">NO</th>
              <th  class="text-center"> SMU/AWB  </th>
              <th  class="text-center">BANDARA ASAL </th>
              <th  class="text-center">BANDARA TUJUAN </th>
              <th  class="text-center"> COMODITY </th>
              <th  class="text-center">QOLLY </th>
              <th  class="text-center"> TOTAL KILO </th>
            
            </tr>
          </thead>
          <tbody>
            @php $no = 1; @endphp
          
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td class="text-center">  </td>
              <td class="text-center"></td>
              <td class="text-center"></td>
              <td class="text-center"></td>
              <td class="text-center"></td>
              <td class="text-center"></td>
             
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