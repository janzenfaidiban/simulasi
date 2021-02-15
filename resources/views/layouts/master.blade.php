<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('titile') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{url('assest/admin/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{url('assest/admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{url('assest/admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    
    <link href="{{url('assest/admin/css/style.css')}}" rel="stylesheet">

    <link href="{{url('assest/admin/icons/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- toastr -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">

            @if(Auth::user()->level == "supervisor")
                <a href=" {{route('dashboard.supervisor')}}">
                @endif
                @if(Auth::user()->level == "acceptance")
                <a href=" {{route('dashboard.acceptance')}}">
                @endif
                @if(Auth::user()->level == "cashier")
                <a href=" {{route('dashboard.cashier')}}">
                @endif

                    <b class="logo-abbr"><img src="{{url('assest/admin/images/l-dark.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{url('assest/admin/images/l-dark.png')}}" alt=""></span>
                    @if(Auth::user()->level == "supervisor")
                    <span class="brand-title">
                        <h2>Supervisor</h2>
                    </span>
                    @endif

                    @if(Auth::user()->level == "cashier")
                    <span class="brand-title">
                        <h2>Cashier </h2>
                    </span>
                    @endif

                    @if(Auth::user()->level == "acceptance")
                    <span class="brand-title">
                        <h2> Acceptance </h2>
                    </span>
                    @endif

                </a>
            </div>
        </div>



        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                       
                                    
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span> {{auth::user()->nama_depan}} </span>
                            </a>
                            
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ asset('gambar/user/'.auth::user()->foto) }}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                     @if(Auth::user()->level == "acceptance")
                                        <li>
                                            <a href="{{route('profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        @endif

                                     @if(Auth::user()->level == "cashier")
                                        <li>
                                            <a href="{{route('profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        @endif

                                     @if(Auth::user()->level == "supervisor")
                                        <li>
                                            <a href="{{route('profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        @endif

                                        <li>
                                            <a href="#"><i class="icon-lock"></i> <span> Change Password </span></a>
                                        </li>
                                       
                                        
                                        <hr class="my-2">
                                        <li><a href=" {{route('logout.system')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li class="nav-label">Dashboard</li> -->
                    @if(Auth::user()->level == "supervisor")
                    <li>
                        <a class="" href=" {{route('dashboard.supervisor')}} " aria-expanded="false">
                           <span class="nav-text">Dashboard</span>
                        </a>
                        <li class="mega-menu mega-menu-sm">                     
                            <li><a href="{{route('pengguna.index')}}"> Pengguna  </a></li>
                            <li><a href="javascript:void()"> Pelanggan</a></li>                      
                            <li><a href="javascript:void()"> Bandar Udara </a></li>                      
                            <li><a href="javascript:void()"> COMUDITY </a></li>                      
                            <li><a href="javascript:void()"> Pengaturan Harga</a></li>                      
                    </li>
                    </li>
                    @endif

                    @if(Auth::user()->level == "acceptance")
                    <li>
                        <a class="" href=" {{route('dashboard.acceptance')}} " aria-expanded="false">
                           <span class="nav-text">Dashboard</span>
                        </a>
                      
                    </li>

                    <li class="mega-menu mega-menu-sm">                     
                            <li><a href="{{route('acceptance.index')}}"> Outgoing  </a></li>
                            <li><a href=" {{route('acceptance.incoming.index')}} "> Incoming </a></li>                      
                    </li>

                    @endif

                   
                    @if(Auth::user()->level == "cashier")
                    <li>
                        <a class="" href=" {{route('dashboard.cashier')}} " aria-expanded="false">
                           <span class="nav-text">Dashboard</span>
                        </a>    
                    </li>

                    <li class="mega-menu mega-menu-sm">
                            
                            <li><a href="{{route('cashier.outgoing.index')}}"> Outgoing </a></li>
                            <li><a href=" {{route('cashier.incoming.index')}} "> Incoming </a></li>
                    </li>
                @endif
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

     
 @yield('content')       
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p> &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Johan</a> {{date('Y')}} </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{url('assest/admin/plugins/common/common.min.js')}}"></script>
    <script src="{{url('assest/admin/js/custom.min.js')}}"></script>
    <script src="{{url('assest/admin/js/settings.js')}}"></script>
    <script src="{{url('assest/admin/js/gleek.js')}}"></script>
    <script src="{{url('assest/admin/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{url('assest/admin/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{url('assest/admin/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{url('assest/admin/plugins/d3v3/index.js')}}"></script>
    <script src="{{url('assest/admin/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{url('assest/admin/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{url('assest/admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{url('assest/admin/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{url('assest/admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{url('assest/admin/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{url('assest/admin/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{url('assest/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

    <script src="{{url('assest/admin/js/dashboard/dashboard-1.js')}}"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if(Session::has('status'))
    <script>
        toastr.success("{!!Session::get('status')!!}")
    </script>
    @endif

</body>

</html>