<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>LogIn </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="#">

		<!-- App css -->
		<link href="{{url('assest/template/assets/css/bootstrap-creative.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{url('assest/template/assets/css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{url('assest/template/assets/css/bootstrap-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
        <link href="{{url('assest/template/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

         <!-- toastr -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">
                            <div class="card-body p-4">                              
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="#" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{url('assest/img/logo.PNG')}}" alt="" height="80">
                                            </span>
                                        </a>
                                        <a href="#" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{url('assest/img/logo.PNG')}}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-1">Selamat Datang di Cargo Port System Moses Kilangin Timika. <br> Silahkan masukan username dan password anda untuk mengakses. </p>
                                </div>

                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                    <label for="username"> Username </label>
                                        <input id="username" type="text" class="form-control form-control-user @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Masukan Username Anda...">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>

                                

                                    <div class="form-group  mb-3">
                                    <label for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                          <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password Anda...">
                                          <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                     </div>


                                    <div class="form-group ">
                                      <div class="custom-control custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"{{old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                 {{ __('Remember Me') }}
                                             </label>
                                            </div>
                                        </div>

                                    <button type="submit"  class="btn btn-primary btn-block">
                                        {{ __('Login') }}
                                     </button>

                                </form> 
                                <hr>
                                <div class="text-center">
                                 <a class="small" href="#" data-toggle="modal" data-target="#exampleModal"> Lupa Password </a>
                                </div>
                                
                            </div> <!-- end card-body -->
                    </div>  <!-- end card -->
                      

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color:red;"> INFO </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                      </div>
                                            <div class="modal-body">
                                             <h3>Silakang Hubungi Supervesior !</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                         </div>
                                      </div>
                                </div>

                                <!-- end modal -->



                        <div class="row mt-3">
                            <div class="col-12 text-center"> 
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt text-white-50">
        &copy;<script>document.write(new Date().getFullYear())</script> <a href="" class="text-white-50"></a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{url('assest/template/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assest/template/assets/js/app.min.js')}}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        @if(Session::has('status'))
        <script>
            toastr.error("{!!Session::get('status')!!}")
        </script>
        @endif
    </body>
</html>