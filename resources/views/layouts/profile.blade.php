@extends('layouts.master')
@section('titile','Profile')
@section('content')


  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"> Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{ asset('gambar/user/'.auth::user()->foto) }}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0"> {{auth::user()->nama_depan}} {{auth::user()->nama_belakang}} </h3> 
                                        <p class="text-muted mb-0"> {{auth::user()->level}}  </p>
                                    </div>
                                </div>
                                
                                <div class="row mb-5">
                                   
                                    <div class="col-12 text-center">
                                        <button class="btn btn-danger px-5">Follow Now</button>
                                    </div>
                                </div>

                                <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm {{auth::user()->level}}, </p>
                                <ul class="card-profile__info">
                                    <!-- <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li> -->
                                    <li><strong class="text-dark mr-4">Email</strong> <span> {{auth::user()->email}} </span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" class="form-profile">
                                    <div class="form-group">
                                        <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="2" placeholder="Post a new message"></textarea>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <ul class="mb-0 form-profile__icons">
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-user"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-paper-plane"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-camera"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-smile"></i></button>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary px-3 ml-4">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@stop