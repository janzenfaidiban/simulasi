
@extends('layouts.master')
@section('titile','Acceptance ')
@section('content')


   

<div class="content-body">

<div class="row page-titles mx-0 mt-2">

  <h3 class="col p-md-0"> TRANSAKSI OUTGOING </h3>

  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=" {{route('dashboard.acceptance')}} ">Acceptance</a></li>
      <li class="breadcrumb-item active"><a href=" {{route('acceptance.index')}}  ">Outgoing</a></li>
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
                            <a href=" {{route('acceptance.create.transaksi')}} " id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i>TAMBAH DATA </a>
                     </div>
                       <div class="form-group mr-2 text-right">
                           <a href="btb.html" id="demo-btn-addrow" class="btn btn-dark"><i class="mdi mdi-cloud-print mr-2"></i> CETAK BTB </a>
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
              <th class="text-center" width="20%">Aksi</th>
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
              <td>    

                <div class="text-center">       
                  <a href="" class="btn btn-success btn-sm">
                    <i class="fa fa-cog"> EDIT </i> 
                  </a>
                 
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">
                    <i class="fa fa-trash">  DELETE </i> 
                  </button>
              
                </div>

                <!-- modal hapus -->
                <form method="POST" action="#">
                  <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <p>Yakin ingin menghapus data ini ?</p>

                          @csrf
                          {{ method_field('DELETE') }}


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Batal</button>
                          <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane m-r-5"></i> Ya, Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>


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