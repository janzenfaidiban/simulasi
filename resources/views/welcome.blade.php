<!DOCTYPE html>
<html>

<head>
    <title> CARGO PORT SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrapCSS/ladingPage.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="{{url('/assest/css/style.css')}}">

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
          
            </button>
          </div>
      </nav>

    <div class="container">
        <div class="row">
            <div id="content">
                <!-- <img src="{{url('/assest/img/logo.png')}}" alt="logo" width="300" height="100"> -->
                <div class="col-lg-12"></div>
                <h1>Welcome !</h1>
                <!-- <h2>CARGO PORT SYSTEM</h2>
                <h3>BANDAR UDARA MOSES KILANGIN TIMIKA</h3> -->
                <hr>
                <p>Hello! Silahkan klik tombol login <br> untuk mengakses sistem.</p>
                <a href=" {{route('login')}} " class="btn btn-default btn-lg"><i class="fas fa-sign-in-alt"></i> LOGIN </a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            Copyright ©2021 . Design by Janzen
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>