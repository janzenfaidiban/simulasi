
@extends('layouts.master')
@section('titile','Acceptance ')
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
                                            <li class="breadcrumb-item"><a href=" {{route('dashboard.acceptance')}} ">Acceptance</a></li>
                                            <li class="breadcrumb-item active"><a href=" {{route('acceptance.outgoing.index')}}  ">Outgoing</a></li>
                                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Transaksi</a></li>
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
                                    <h4 class="page-title"> TRANSAKSI OUTGOING  </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                   
                                    <p class="sub-header">
                                       
                                    </p>

                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-6 text-sm-center form-inline">
                                                <div class="form-group mr-2">
                                                    <a href="" id="demo-btn-addrow" class="btn btn-success"> BTB-TIMCO21010001  </a>
                                                </div>
                                                <div class="form-group mr-2">
                                                    <a href="" id="demo-btn-addrow" class="btn btn-success"> SURYAGITA NUSA RAYA  </a>
                                                </div>

                                            </div>

                                            <div class="col-6 text-sm-right form-inline">
                                                <div class="form-group mr-2 text-right">
                                                    <a href="{{route('acceptance.create.outgoing.transaksi')}}" id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i>TAMBAH DATA </a>
                                                </div>
                                                <div class="form-group mr-2">
                                                    <a href=" {{route('acceptance.outgoing.btb')}} " id="demo-btn-addrow" class="btn btn-dark"><i class="mdi mdi-cloud-print mr-2"></i> CETAK BTB </a>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle footable-loaded footable tablet breakpoint" data-page-size="7">
                                        <thead>
                                        <tr>
                                            <th data-sort-ignore="true" class="min-width footable-visible footable-first-column text-center"  width="1%">No</th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted"  width="10%"> SMU/AWB <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted"  width="10%"> BANDARA ASAL <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted"  width="10%"> BANDARA TUJUAN <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted"  width="10%"> COMODITY <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted"  width="10%"> QOLLY <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted"  width="10%"> TOTAL KILO <span class="footable-sort-indicator"></span></th>
                                                                        
                                            <th data-hide="phone, tablet" class="footable-sortable text-center" width="20%" > AKSI <span class="footable-sort-indicator"></span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $no = 1; @endphp
                                        
                                        <tr class="footable-even" >
                                            <td class="text-center footable-visible footable-first-column"> {{$no++}} </td>
                                            <td class="footable-visible text-center">990-550-001</td>
                                            <td class="footable-visible footable-last-column text-center">TIMIKA</td>
                                            <td class="footable-visible footable-last-column text-center">JAYAPURA</td>
                                            <td class="footable-visible footable-last-column text-center">GENCO</td>
                                            <td class="footable-visible footable-last-column text-center">25</td>
                                            <td class="footable-visible footable-last-column text-center">1500</td>
                                         

                                            <td class="text-center">
                                                <a href=" {{route('acceptance.outgoing.edit.transaksi')}} " class="btn btn-success btn-sm waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi   mdi-square-edit-outline"></i></span> Edit </a>
                                                <a href="" class="btn btn-danger btn-sm waves-effect waves-light" data-toggle="modal" data-target="#standard-modal"> 
                                                    <span class="btn-label"><i class="mdi mdi-trash-can"></i></span> Delete
                                                </a>
                                            </td>
                                        </tr> 
                                      
                                       </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="8" class="footable-visible">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10">
                                                        <li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li>
                                                        <li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li>
                                                        <li class="footable-page active"><a data-page="0" href="#">1</a></li>
                                                        <li class="footable-page"><a data-page="1" href="#">2</a></li>
                                                        <li class="footable-page-arrow"><a data-page="next" href="#next">›</a>
                                                        </li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>

                        
                    </div> <!-- container -->

                </div> <!-- content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


    <!-- Standard modal content -->
    <form method="POST" action="#">
    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel"> Konfirmasi Penghapusan </h4>
                    <hr>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <p>Yakin ingin menghapus data ini ?</p>

                  @csrf
                  {{ method_field('DELETE') }} 
                </div>
                <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Batal</button>
                 <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane m-r-5"></i> Ya, Hapus</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </form>
   </div>



@stop