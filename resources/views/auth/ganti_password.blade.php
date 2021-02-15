@extends('layouts.master')
@section('titile','Ganti Password')
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
                                               
                                                <li class="breadcrumb-item active"> Ganti Password </li>
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
                                    <h4 class="page-title"> Ganti Password {{auth::user()->level}} </h4>
                                </div>
                            </div>
                        </div>     
                   <!-- end page title --> 


    <div class="card">
      <div class="card-body">

        <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
          {{ csrf_field() }}


          <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-md-4 control-label">Password Baru</label>

            <div class="col-md-4">
              <input id="new-password" type="password" placeholder="********" class="form-control" name="new-password">

              @if ($errors->has('new-password'))
              <span class="help-block">
                <strong>{{ $errors->first('new-password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <label for="new-password-confirm" class="col-md-4 control-label">Konfirmasi Password Baru</label>

            <div class="col-md-4">
              <input id="new-password-confirm" type="password" placeholder="********" class="form-control" name="new-password_confirmation">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                Ganti Password
              </button>
              <a href="{{route('dashboard.supervisor')}}" class="btn btn-dark">Batal</a>
            </div>
          </div>

        </form>


      </div>

    </div>
    


  </div>
  <!-- #/ container -->
</div>
    

@stop