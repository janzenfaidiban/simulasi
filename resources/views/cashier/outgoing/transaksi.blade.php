
@extends('layouts.master')
@section('titile','Cashier | Transaksi ')
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
                                            <li class="breadcrumb-item"><a href=" {{route('dashboard.cashier')}} ">Cashier</a></li>
                                            <li class="breadcrumb-item active"><a href="{{route('cashier.outgoing.index')}} ">Outgoing</a></li>
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
                                              
                                                <div class="form-group mr-2">
                                                    <a href="{{route('cashier.outgoing.btb')}}" id="demo-btn-addrow" class="btn btn-secondary"><i class="mdi mdi-cloud-print mr-2"></i> CETAK KWINTANSI BTB </a>
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
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="10%"> SMU/AWB <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="10%"> BANDARA ASAL <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="10%"> BANDARA TUJUAN <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="10%"> COMODITY <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="10%"> QOLLY <span class="footable-sort-indicator"></span></th>
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="10%"> TOTAL KILO <span class="footable-sort-indicator"></span></th>
                                                                         
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $no = 1; @endphp
                                        
                                        <tr class="footable-even" >
                                            <td class="text-center footable-visible footable-first-column"> {{$no++}} </td>
                                            <td class="footable-visible text-center"> 990-550-001</td>
                                            <td class="footable-visible footable-last-column text-center">TIMIKA</td>
                                            <td class="footable-visible footable-last-column text-center">JAYAPURA</td>
                                            <td class="footable-visible footable-last-column text-center">GENCO</td>
                                            <td class="footable-visible footable-last-column text-center">25</td>
                                            <td class="footable-visible footable-last-column text-center">1500</td>
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

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

</div>
<!-- #/ container -->
</div>


@stop