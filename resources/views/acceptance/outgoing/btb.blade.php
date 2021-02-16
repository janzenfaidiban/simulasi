@extends('layouts.master')
@section('titile',' Bukti Timbang Barang ')
@section('content')




<div class="content-page">
     <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <!-- Logo & title -->
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <div class="auth-logo">
                                                <div class="logo logo-dark">
                                                    <span class="logo-lg">
                                                        <img src="{{url('assest/img/logo.PNG')}}" alt="" height="52">
                                                    </span>
                                                </div>
                            
                                                <div class="logo logo-light">
                                                    <span class="logo-lg">
                                                        <img src="{{url('assest/img/logo.PNG')}}" alt="" height="52">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <h4 class="m-0 d-print-none"> BUKTI TIMBANG BARANG</h4>
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                
                                            </div>
        
                                        </div><!-- end col -->
                                        <div class="col-md-4 offset-md-2">
                                            <div class="mt-3 float-right">
                                                <p class="m-b-10"><strong> Date : </strong> <span class="float-right"> &nbsp;&nbsp;&nbsp;&nbsp; Timika, {{date('d M Y')}} </span></p>
                                                <!-- <p class="m-b-10"><strong>Order Status : </strong> <span class="float-right"><span class="badge badge-danger">Unpaid</span></span></p> -->
                                                <p class="m-b-10"><strong> No. : </strong> <span class="float-right"> BTB-TIMCO21010001 </span></p>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->
        
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <h6> Pengirim </h6>
                                            <address>
                                            REINHARD<br>
                                                <!-- 795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                                            </address>
                                        </div> <!-- end col -->
        
                                        <div class="col-sm-6">
                                            <h6> Acceptance </h6>
                                            <address>
                                            IMAM<br>
                                                <!-- 795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                                            </address>
                                        </div> <!-- end col -->
                                    </div> 
                                    <!-- end row -->
        
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table mt-4 table-centered">
                                                    <thead>
                                                    <tr><th style="width: 1%">#</th>
                                                        <th style="width: 10%"> Telah Terima Dari</th>
                                                        <th style="width: 10%"> SMU / AWB</th>
                                                        <th style="width: 10%">Flight Number</th>
                                                        <th style="width: 10%">Bandara Asal</th>
                                                        <th style="width: 10%"> Bandara Tujuan</th>
                                                      
                                                        <!-- <th style="width: 10%" class="text-right">Total</th> -->
                                                    </tr></thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>  PT. SURYA GITA NUSANTARA    </td>
                                                        <td> 195-20111</td>
                                                        <td>TMG-01</td>
                                                        <td>WMX</td>
                                                        <td>TIM</td>
                                                      
                                                       
                                                    </tr>
                                                   
        
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive -->
                                        </div> <!-- end col -->
                                    </div>

                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table mt-4 table-centered">
                                                    <thead>
                                                    <tr><th  style="width: 1%">#</th>
                                                        <th style="width: 10%"> Comodity </th>
                                                        <th style="width: 10%"> Qolly</th>
                                                        <th style="width: 10%">Total Kilo</th>
                                                        <!-- <th style="width: 10%" class="text-right">Total</th> -->
                                                    </tr></thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td> GENCO </td>
                                                        <td>20</td>  
                                                        <td> 1.500 </td>
                                                    </tr>
                                                   
        
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive -->
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                   
        
                                    <div class="mt-4 mb-1">
                                        <div class="text-right d-print-none">
                                            <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a>
                                            <!-- <a href="#" class="btn btn-info waves-effect waves-light">Submit</a> -->
                                        </div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

@stop