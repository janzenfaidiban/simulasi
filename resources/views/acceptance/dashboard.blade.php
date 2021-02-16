
@extends('layouts.master')
@section('titile','Dashboard Acceptance ')
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
                                                <li class="breadcrumb-item"><a href="dashboard.html">Acceptance</a></li>
                                               
                                                <li class="breadcrumb-item active">Dashboard</li>
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
                                    <h4 class="page-title">DASHBOARD ACCEPTANCE </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <div class="dropdown float-center">
                                        
                                         <h1 class="text-center display-1">Acceptance</h1>
                                         <br>
                                           <p class="text-center">Hello, {{auth::user()->nama_depan}}. Anda berhasil login sebagai Acceptance.</p>
                                             <p class="text-center"> Selamat datang di halaman Dashboard Cargo Port System Moses Kilangin Timika</p>
                                       
                                        <br><br>
                                            <div class="button-list text-center">
                                                <a href="{{route('acceptance.outgoing.index')}}" class="btn btn-lg btn-primary waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span> OUTGOING
                                                </a>
                                                <a href="{{route('acceptance.incoming.index')}}" class="btn btn-lg btn-primary waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span> INCOMING
                                                </a>
                                            </div>
                                                                           
                                    </di>

                                    <div class="table-responsive">
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                           
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                Copyright <script>document.write(new Date().getFullYear())</script> &copy; Design by <a href=""> Janzen </a> 
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@stop