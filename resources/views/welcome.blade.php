<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Voting</title>
    <meta charset="utf-8">
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
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">E-VOTING<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#features-section" class="nav-link">Features</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#our-team-section" class="nav-link">Our Team</a></li>
                    <li class="has-children">
            
                    </li>
                  </ul>
                </li><!-- 
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li> -->
                <li><a href="/register" style="color: black;"><button class="btn btn-sm btn-primary">Register</button></a></li>
                <li><a href="/masuk" style="color: black;"><button class="btn btn-sm btn-primary">Masuk</button></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    

    <div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
            
            <img src="{{asset('img')}}/logo.png" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1>WEBSITE E-VOTING</h1>
                <p class="mb-5">Sistem E-Voting adalah sistem pemungutan suara yang dilakukan secara elektronik dimana pemberian suara tidak harus mendatangi TPS berlangsung. Sistem dapat menghitung jumlah suara yang masuk, membatasi hak akses user, dan memunculkan riwayat pemilihan.</p>
                <div>
                  <a href="/pendaftaran" class="btn btn-primary mr-2 mb-2">Pendaftaran</a>
                  <a href="/quickcount" class="btn btn-primary mr-2 mb-2">Quick Count</a>
                </div>
              </div>
              
              
            </div>

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section" id="features-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Fitur dalam sistem</h2>
            <p class="lead">Sistem E-Voting memiliki banyak fitur yang dapat digunakan oleh user.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
              </div>
              <div>
                <h3>Vote</h3>
                <p>Sistem E-Voting memiliki fitur pemilihan yang digunakan untuk melakukan pemungutan suara voter. Suara yang sudah masuk akan dihitung oleh sistem.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-store_mall_directory"></span></span>
              </div>
              <div>
                <h3>Acara</h3>
                <p>Fitur acara digunakan untuk membuat acara yang ingin dilangsungkan oleh organisasi mahasiswa Politeknik Negeri Subang.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-shopping_basket"></span></span>
              </div>
              <div>
                <h3>Login</h3>
                <p>Login digunakan sebagai hak akses voter untuk masuk ke dalam sistem untuk melakukan pemilihan</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-settings_backup_restore"></span></span>
              </div>
              <div>
                <h3>Registrasi</h3>
                <p>Ketika akan mengakses sistem harus mempunyai akun voter.Akun voter didapat dengan melakukan registrasi terlebih dahulu. Sistem akan meminta data mahasiswa kamu seperti nama,NIM,prodi dan yang lainnya.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
              </div>
              <div>
                <h3>Pendaftaran</h3>
                <p>Pendaftaran hanya dilakukan oleh kandidat yang ingin mencalonkan sebagai pasangan untuk pemilihan, seperti Ketua Himpunan, Ketua MPM, Ketua BEM dan organisasi lainnya.Dalam pendaftaran kandidat harus mengisi form pendaftaran dan mengirimkan lampiran yang sesuai dengan persyaratan dari organisasi yang diambil.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>

            
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-power"></span></span>
              </div>
              <div>
                <h3>Hasil</h3>
                <p>Dalam hasil akan muncul perhitungan akhir dari suara yang masuk, yang ditampilkan adalah paslon dan jumlah yang didapat.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    <div class="feature-big">
      <div class="container">
        <div class="row mb-5 site-section">
          <div class="col-lg-7" data-aos="fade-right">
            <img src="{{asset('landing')}}/images/a.webp" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
            <h2 class="text-black">E-Voting</h2>
            <p class="mb-4">“E-voting refers to the use of computers or computerised voting equipment to cast ballots in an election." </p>
            
            <div class="author-box" data-aos="fade-left">
              <div class="d-flex mb-4">
                <div class="mr-3">
                  
                </div>
                <div class="mr-auto text-black">
                  <strong class="font-weight-bold mb-0">~Smith dan Clark</strong> <br>
                  
                </div>
              </div>
              <blockquote>&ldquo;E-voting enhancement of I-voting is one of the latest and extremely popular methods of casting votes, and is usually performed by using either a PC via a standard web browser; touch-tone telephone or cellular phone, digital TV, or a touch screen in a kiosk at a designated location&rdquo;</blockquote>
            </div>
          </div>
        </div>

        <div class="mt-5 row mb-5 site-section ">
          <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{asset('landing')}}/images/c.webp" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
            <div class="author-box" data-aos="fade-right">
              <div class="d-flex mb-4">
                <div class="mr-3">
                </div>
                <div class="mr-auto text-black">
                  <strong class="font-weight-bold mb-0">~Anonim</strong> <br>
                </div>
              </div>
              <blockquote>&ldquo;Kepemimpinan bukanlah tentang pemilihan berikutnya, ini tentang generasi berikutnya.&rdquo;</blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">About Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{asset('landing')}}/images/undraw_bookmarks_r6up.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4 h3 font-weight-bold">Our Mission</h2>
            <p class="mb-4">Eos cumque optio dolores excepturi rerum temporibus magni recusandae eveniet, totam omnis consectetur maxime quibusdam expedita dolorem dolor nobis dicta labore quaerat esse magnam unde, aperiam delectus! At maiores, itaque.</p>
            <ul class="ul-check mb-5 list-unstyled success">
              <li>Laborum enim quasi at modi</li>
              <li>Ad at tempore</li>
              <li>Labore quaerat esse</li>
            </ul>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>

        
      </div>
    </div>

    <div class="site-section" id="our-team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Our Team</h2>
            <p class="lead">Terajana Teams.</p>
          </div>
        </div>
       
        <div class="row" style="text-align: center; ">
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="{{asset('landing')}}/images/tere.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">Teresia Fransiska Purba</h2>
              <span class="sub-title d-block mb-3">Developer</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="{{asset('landing')}}/images/ras.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">Farrasn Insan Nurhidayat</h2>
              <span class="sub-title d-block mb-3">Developer</span>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="footer py-5 text-center">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
              <a href="#" class="p-3"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-3"><span class="icon-pinterest"></span></a>
            </p>
          </div>
        </div>
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