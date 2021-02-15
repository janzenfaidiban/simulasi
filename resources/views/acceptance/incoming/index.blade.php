
@extends('layouts.master')
@section('titile','Acceptance | Incoming ')
@section('content')


   

<div class="content-body">

<div class="row page-titles mx-0 mt-2">

  <h3 class="col p-md-0"> INCOMING </h3>

  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=" {{route('dashboard.acceptance')}} ">Acceptance</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Incoming</a></li>
    </ol>
  </div>

</div>

<div class="container-fluid">

  <div class="card">

    <div class="card-header pt-4">
      <a href="#" class="btn btn-dark float-right"> <i class="fa fa-print"></i>  Cetak Rekapan </a>
      <a href="#" class="btn btn-secondary float-right"><i class="fa fa-download"></i> Download Data</a>
      <a href="{{ route('acceptance.incoming.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> &nbsp Tambah Data</a>
    </div>
<hr>
    <div class="card-body pt-0">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-datatable">
          <thead>
            <tr>
              <th width="1%">NO</th>
              <th  class="text-center"> No TTB </th>
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
                <a href=" {{route('acceptance.incoming.transaksi')}} " class="btn btn-primary btn-sm">
                  <i class="fa fa-compress"> TAMPILKAN TRANSAKSI </i> 
                  </a>

                <a href="{{route('acceptance.incoming.ttb')}}" class="btn btn-secondary btn-sm">
                  <i class="fa fa-print"> CETAK TTB </i> 
                  </a>

                  <a href="{{route('acceptance.incoming.edit')}} " class="btn btn-success btn-sm">
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