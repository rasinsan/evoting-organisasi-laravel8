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
        <title>Login Form - E Voting</title>
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
                                    <div class="text-center">
                                        <img src="{{asset('img/logo.png')}}" width="200px">
                                        <h1 class="h4 text-gray-900 mb-1">Login E-Voting</h1>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('proses_login')}}" method="POST" id="logForm">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                    {{-- Error Alert --}}
                                                    @if(session('pesan'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session('pesan')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                                    @if(session('error'))
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        {{session('error')}}
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @endif
                                                <label class="small mb-1" for="inputEmailAddress">NIM</label>
                                                <input
                                                    onkeypress="return hanyaAngka(event)"class="form-control py-4"
                                                    class="form-control py-4"
                                                    name="username"
                                                    type="text"
                                                    placeholder="Masukkan NIM"/>
                                                <div class="text-danger">
                                                @if($errors->has('username'))
                                                {{ $errors->first('username') }}
                                                @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Masukkan Password"/>
                                                <div class="text-danger">    
                                                @if($errors->has('password'))
                                                {{ $errors->first('password') }}
                                                @endif
                                                </div>
                                            </div>
                                            
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                            <div class="text-center">
                                            <a class="small" href="{{route('register')}}">Registrasi Akun!</a>
                                            </div>
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
            var username = (event.which) ? event.which : event.keyCode
            if (username != 46 && username > 31 && (username < 48 || username > 57))
                return false;
            return true;
        }
        </script>
    </body>
</html>