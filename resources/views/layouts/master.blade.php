<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="#">

        <!-- Plugins css -->
        <link href="{{url('assest/template/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assest/template/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{url('assest/template/assets/css/bootstrap-creative.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{url('assest/template/assets/css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{url('assest/template/assets/css/bootstrap-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{url('assest/template/assets/css/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{url('assest/template/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- toastr -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box dropdown">
                                    
                                   
                                </div>
                            </form>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
            
                      
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('gambar/user/'.auth::user()->foto) }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                   {{auth::user()->nama_depan}} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                 @if(Auth::user()->level == "supervisor")
                                <!-- item-->
                                <a href="{{route('profile')}}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
                                @endif
                                 @if(Auth::user()->level == "cashier")
                                <!-- item-->
                                <a href="{{route('profile')}}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
                                @endif
                                 @if(Auth::user()->level == "acceptance")
                                <!-- item-->
                                <a href="{{route('profile')}}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
                                @endif


    
                                @if(Auth::user()->level == "cashier")
                                <!-- item-->
                                <a href="{{route('password.settings')}}" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span> Changes Password </span>
                                </a>
                                @endif

                                @if(Auth::user()->level == "supervisor")
                                <!-- item-->
                                <a href="{{route('password.settings')}}" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span> Changes Password </span>
                                </a>
                                @endif

                                @if(Auth::user()->level == "acceptance")
                                <!-- item-->
                                <a href="{{route('password.settings')}}" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span> Changes Password </span>
                                </a>
                                @endif


                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="{{route('logout.system')}}" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                   
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="#" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{url('assest/img/logo.PNG')}}" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="{{url('assest/img/logo.PNG')}}" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>
    
                        <a href="#" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{url('assest/img/logo.PNG')}}" alt="" height="52">
                            </span>
                            <span class="logo-lg">
                                <img src="{{url('assest/img/logo.PNG')}}" alt="" height="50">
                            </span>
                        </a>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
            
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" href="#">
                                CARGO PORT SYSTEM  BANDAR UDARA MOSES KILANGIN TIMIKA
                               
                            </a>
                            
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
         @if(Auth::user()->level == "supervisor")
            <div class="topnav shadow-lg">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('dashboard.outgoing')}}" id="topnav-dashboard" role="button"
                                         aria-haspopup="true" aria-expanded="true">
                                        <i class="fe-airplay mr-1"></i> OUTGOING 
                                    </a>
                                  
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('dashboard.incoming')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i>  INCOMING 
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('pengguna.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i>  PENGGUNA
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('pelanggan.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i>  PELANGGAN
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('bandarudara.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i>  BANDAR UDARA
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('comudity.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i> COMUDITY
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('pengaturan.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i> PENGATURAN
                                    </a>
                                </li>

                               
                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->
        @endif

         @if(Auth::user()->level == "cashier")
            <div class="topnav shadow-lg">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('cashier.outgoing.index')}}" id="topnav-dashboard" role="button"
                                         aria-haspopup="true" aria-expanded="true">
                                        <i class="fe-airplay mr-1"></i> OUTGOING 
                                    </a>
                                  
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('cashier.incoming.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i>  INCOMING 
                                    </a>
                                </li>
                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->
        @endif

         @if(Auth::user()->level == "acceptance")
            <div class="topnav shadow-lg">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('acceptance.outgoing.index')}}" id="topnav-dashboard" role="button"
                                         aria-haspopup="true" aria-expanded="true">
                                        <i class="fe-airplay mr-1"></i> OUTGOING 
                                    </a>
                                  
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{route('acceptance.incoming.index')}}" id="topnav-apps" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i>  INCOMING 
                                    </a>
                                </li>
                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->
        @endif

     @yield('content')
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


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{url('assest/template/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{url('assest/template/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{url('assest/template/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{url('assest/template/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{url('assest/template/assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{url('assest/template/assets/js/app.min.js')}}"></script>


        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if(Session::has('status'))
<script>
    toastr.success("{!!Session::get('status')!!}")
</script>
@endif
        
    </body>
</html>