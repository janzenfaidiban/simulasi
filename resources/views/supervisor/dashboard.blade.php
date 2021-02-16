
@extends('layouts.master')
@section('titile','Dashboard Supervior')
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
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">  Supservisor </a></li>
                                               
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
                                    <h4 class="page-title">DASHBOARD SUPERVISOR  </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <div class="dropdown float-center">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">  </a> 
                                        
                                         <h1 class="text-center display-1"> Supervisor </h1>
                                         <br>
                                           <p class="text-center">Hello, {{Auth::user()->nama_depan}}. Anda berhasil login sebagai Supervisor.</p>
                                             <p class="text-center"> Selamat datang di halaman Dashboard Cargo Port System Moses Kilangin Timika</p>
                                       
                                        <br><br>
                                            <div class="button-list text-center">
                                                <a href="{{route('dashboard.outgoing')}}" class="btn btn-primary btn-lg  waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span> OUTGOING
                                                </a>
                                                <a href="{{route('dashboard.incoming')}}" class="btn btn-primary btn-lg  waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span> INCOMING
                                                </a>
                                                <br>
                                                <a href=" {{route('pengguna.index')}} " class="btn btn-primary btn-lg  waves-effect waves-light">
                                                    <span class="btn-label"> <i class=" fas fa-user"></i> </span> PENGGUNA
                                                </a>
                                                <a href="{{route('pelanggan.index')}}" class="btn btn-primary btn-lg  waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span> PELANGGAN
                                                </a>
                                                <a href="{{route('bandarudara.index')}}" class="btn btn-primary btn-lg  waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-airport"></i></span> BANDAR UDARA
                                                </a>
                                                <a href="{{route('comudity.index')}}" class="btn btn-primary btn-lg  waves-effect waves-light">
                                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span> COMUDITY
                                                </a>
                                                <a href="pengaturan.html" class="btn btn-primary btn-lg waves-effect waves-light">
                                                    <span class="btn-label"> <i class="fe-settings noti-icon"></i></span> PENGATURAN
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


@stop