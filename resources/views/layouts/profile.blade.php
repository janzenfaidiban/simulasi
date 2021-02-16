@extends('layouts.master')
@section('titile','Profile')
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
                                        @if(Auth::user()->level == "cashier")
                                        <li class="breadcrumb-item"><a href="{{route('dashboard.cashier')}}">  Cashier </a></li>
                                        @endif
                                        @if(Auth::user()->level == "acceptance")
                                        <li class="breadcrumb-item"><a href="{{route('dashboard.acceptance')}}">  Acceptance</a></li>
                                        @endif

                                        @if(Auth::user()->level == "supervisor")
                                        <li class="breadcrumb-item"><a href="{{route('dashboard.supervisor')}}"> Supervisor </a></li>
                                        @endif
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="{{ asset('gambar/user/'.auth::user()->foto) }}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    <h4 class="mb-0">  {{auth::user()->nama_depan}} {{auth::user()->nama_belakang}} </h4>
                                    <p class="text-muted">{{auth::user()->level}}</p>

                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                                    <div class="text-left mt-3">
                                        <h4 class="font-13 text-uppercase">About Me :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            Hi I'm {{auth::user()->nama_depan}},
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"> {{auth::user()->nama_depan}} {{auth::user()->nama_belakang}}</span></p>

                                        <!-- <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">(123)
                                                123 1234</span></p> -->

                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "> {{auth::user()->email}} </span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">Timika</span></p>
                                    </div>

                                </div> <!-- end card-box -->

                               

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="settings">
                                            <form>
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" value="{{auth::user()->nama_depan}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" value="{{auth::user()->nama_belakang}}">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                               

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="useremail">Email Address</label>
                                                            <input type="email" class="form-control" id="useremail" value="{{auth::user()->email}}">
                                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userpassword">Username</label>
                                                            <input type="text" class="form-control" id="username" name="username" value="{{auth::user()->username}}" >
                                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                              

                                                
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->


@stop