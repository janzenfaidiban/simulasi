@extends('layouts.master')
@section('titile',' Bukti Timbang Barang ')
@section('content')

   <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                               <!-- start page title -->
                               <!-- <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Acceptance</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Outgoing</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Transaksi </a></li>
                                                <li class="breadcrumb-item active">Tambah Data</li>
                                            </ol>
                                        </div> -->
                                        <!-- <h4 class="page-title"> BUKTI TIMBANG BARANG</h4> -->
                                    <!-- </div>
                                </div>
                            </div>      -->
                            <!-- end page title  -->
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
                                           
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <h4 class="m-0 d-print-none">BUKTI TIMBANG BARANG</h4>
                                            </div>
        
                                        </div><!-- end col -->
                                        <div class="col-md-4 offset-md-2">
                                            <div class="mt-3 float-right">
                                                <p class="m-b-10"><strong> Date : </strong> <span class="float-right" id="dash-daterange"> &nbsp;&nbsp;&nbsp;&nbsp; Timika, {{date('d M Y')}} </span></p>
                                                <p class="m-b-10"><strong> No :  </strong> <span class="float-right"> <b>BTB-TIMCO21010001</b> </span></p>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                   
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <h6> Pengirim </h6>
                                            <address>
                                                <input type="text" name="" id="" value="REINHARD" readonly>
                                              
                                                <!-- 795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                                            </address>
                                        </div> <!-- end col -->
        
                                        <div class="col-sm-6">
                                            <h6>Acceptance</h6>
                                            <address>
                                                <input type="text" name="" id="" value="IMAN" readonly>
                                             
                                                <!-- 795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                                            </address>
                                        </div> <!-- end col -->
                                    </div> 
                                    <!-- end row -->
<hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <form>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-small"> Telah Terima Dari </label>
                                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="type.." readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-normal">SMU / AWB</label>
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="type.." readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large">Flight Number</label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly> 
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large">Bandara Asal </label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large">Bandara Tujuan </label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly>
                                                        </div>
            
                                                      
                                                    </form>
            
                                                </div> <!-- end card-body -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->
            
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
            
                                                  
            
                                                    <form>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-small">Comodity </label>
                                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="type.."  readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-normal"> Qolly </label>
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="type.." readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large">Total Kilo</label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly>
                                                        </div>
                                                    
                                                      
                                                    </form>
            
                                                </div> <!-- end card-body -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->
                                    </div>
                                   
                                            <div class="clearfix"></div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
        
                                  
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>



@stop