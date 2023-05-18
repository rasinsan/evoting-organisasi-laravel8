<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Register Form - E Voting</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
        <link href="{{asset('template')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
          $(function() {
        $( "#datepicker" ).datepicker({
           format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
        });
      </script>
        <!-- Custom styles for this template-->
        <link href="{{asset('template')}}/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body class="bg-gradient-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-12 col-md-9">
                                <br>
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    {{-- Error Alert --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="text-center">
                                        <br>
                                        <br>
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Voter</h1>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('simpan_register')}}" method="POST" id="logForm">
                                            {{ csrf_field() }}
                                    @if(session('pesan'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session('pesan')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                            @error('nim')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            @enderror
                                            @error('email')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            @enderror
                                            <div class="form-group">
                                                <!-- @error('login_gagal')
                                                    {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span> --}}
                                                 -->    
                                                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- @enderror -->
                                                <div class="form-group"> 
                                                <label class="small mb-1" for="inputEmailAddress">Nim</label>
                                                <input
                                                    onkeypress="return hanyaAngka(event)"class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    name="nim"
                                                    type="text"
                                                    required
                                                    placeholder="Masukkan NIM"/>
                                                </div>
                                                <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nama</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    name="nama"
                                                    type="text"
                                                    required
                                                    placeholder="Masukkan Nama"/>
                                                </div>
                                                <!-- <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    name="username"
                                                    type="text"
                                                    placeholder="Masukkan Username"/>
                                                <!-- @if($errors->has('username'))
                                                <span class="error">{{ $errors->first('username') }}</span>
                                                @endif -->
                                            <!-- </div> -->
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    required
                                                    placeholder="Masukkan Password"/>
                                            </div>
                                            <div class="form-group create-data">
                                                <label class="small mb-1">Prodi</label>
                                                <select
                                                    class="form-control"
                                                    name="prodi"                                                    
                                                    placeholder="Masukkan prodi"/>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Keperawatan">Keperawatan</option>
                                                <option value="Agroindustri">Agroindustri</option>
                                                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Tahun Masuk</label>
                                                <input
                                                    class="form-control py-4"
                                                    type="number"
                                                    name="tahun"
                                                    id="datepicker"
                                                    required
                                                    placeholder="Masukkan tahun"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    type="email"
                                                    name="email"
                                                    required
                                                    placeholder="Masukkan email"/>
                                            </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                            <div class="text-center">
                                            <a class="small" href="/masuk">Sudah Punya Akun</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
        <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
        <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>
        <script>
        function hanyaAngka(event) {
            var nim = (event.which) ? event.which : event.keyCode
            if (nim != 46 && nim > 31 && (nim < 48 || nim > 57))
                return false;
            return true;
        }
        </script>
    </body>
</html>