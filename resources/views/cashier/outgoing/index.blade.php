
@extends('layouts.master')
@section('titile','Cashier | Outgoing ')
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
                                                <li class="breadcrumb-item"><a href="{{route('dashboard.cashier')}}">  Cashier </a></li>
                                                <li class="breadcrumb-item active"> Outgoing </li>
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
                                    <h4 class="page-title"> OUTGOING  </h4>
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
                                            <div class="col-12 text-sm-center form-inline">
                                            
                                                <div class="form-group mr-2">
                                                    <a href="" id="demo-btn-addrow" class="btn btn-dark"><i class="mdi mdi-cloud-download mr-2"></i> DOWNLOAD PDF </a>
                                                </div>
                                                <div class="form-group mr-2">
                                                    <a href="" id="demo-btn-addrow" class="btn btn-dark"><i class="mdi mdi-cloud-print mr-2"></i> CETAK REKAPAN </a>
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
                                            <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted text-center"  width="15%"> NOMOR BTB <span class="footable-sort-indicator"></span></th>
                                            <th class="footable-visible footable-sortable text-center">PELANGAN<span class="footable-sort-indicator"></span></th>                                          
                                            <th data-hide="phone, tablet" class="footable-sortable text-center" width="40%" > AKSI <span class="footable-sort-indicator"></span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $no = 1; @endphp
                                        
                                        <tr class="footable-even" >
                                            <td class="text-center footable-visible footable-first-column">{{ $no++ }}</td>
                                            <td class="footable-visible"> </td>
                                            <td class="footable-visible footable-last-column">SURYAGITA NUSA RAYA</td>

                                            <td class="text-center">
                                                <a href="{{route('cashier.outgoing.transaksi')}}" class="btn btn-primary btn-sm waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-arrow-collapse"></i></span> Tampilkan Transaksi </a>

                                                <a href="{{route('cashier.outgoing.btb')}}" class="btn btn-secondary btn-sm waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi  mdi-cloud-print"></i></span> Cetak Kwintansi BTB</a>
                                               
                                            </td>
                                        </tr> 
                                        
                
                                       </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="6" class="footable-visible">
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
<!-- #/ container -->
</div>


@stop