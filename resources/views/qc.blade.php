<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Voting</title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="5" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('landing')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('landing')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('landing')}}/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="site-wrap"  id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="/" class="text-black h2 mb-0">E-VOTING<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>      
    </header>
    <div class="form-group row">
   @foreach($data as $data)
    <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center; margin-left: auto; margin-right: auto;">
            <hr>
            <div class="form-group mb-3">
              <img src="{{url('foto/'.$data->foto_ketua)}}" width="200px">
              <img src="{{url('foto/'.$data->foto_wakil)}}" width="100px">
            </div>
      <strong>Paslon No Urut {{$data->no_urut}}</strong>
            <div class="form-group mb-3">
              <strong>{{$data->nama_ketua}} & {{$data->nama_wakil}}</strong>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">
                {{ $data->total }}
              </button>
            </div>
        </div>    
  @endforeach
  </div>
    <div class="footer py-5 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .site-wrap -->

  <script src="{{asset('landing')}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('landing')}}/js/jquery-ui.js"></script>
  <script src="{{asset('landing')}}/js/popper.min.js"></script>
  <script src="{{asset('landing')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('landing')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('landing')}}/js/jquery.countdown.min.js"></script>
  <script src="{{asset('landing')}}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('landing')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('landing')}}/js/aos.js"></script>
  <script src="{{asset('landing')}}/js/jquery.fancybox.min.js"></script>
  <script src="{{asset('landing')}}/js/jquery.sticky.js"></script>
  <script src="{{asset('landing')}}/js/main.js"></script>
  </body>
</html>