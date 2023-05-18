<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E Voting - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12">
            <br>
            <br>
        <div class="card o-hidden border-0 shadow-lg my-5 ">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                     --><div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pendaftaran Paslon</h1>
                                @if (session('success'))
                              <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Success</h5>
                                {{ session('success') }}
                              </div>
                          @endif
                            </div>
                            <form class="user" action="/proses_daftar" method="post">
                                @csrf
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0"><b>Data Ketua</b>
                                <hr>
                                    <div class="mb-2">
                                        <label class="small mb-1">NIM</label>
                                        <input type="text" class="form-control" id="exampleLastName"
                                            placeholder="Masukan NIM" name="nim_ketua" required>
                                        <div class="text-danger">
                                        @error('nim_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="small mb-1">Nama</label>
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="Masukan Nama" required name="nama_ketua">
                                    <div class="text-danger">
                                        @error('nama_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="small mb-1">Tingkat</label>
                                        <input type="text" pattern="[0-9]" class="form-control col-sm-2"
                                            id="exampleFirstName" placeholder="Isi" required name="tingkat_ketua">
                                    <div class="text-danger">
                                        @error('tingkat_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="small mb-1">Semester</label>
                                        <input type="text" pattern="[0-9]" class="form-control col-sm-2"
                                            id="exampleFirstName" placeholder="Isi"
                                            name="semester_ketua" required>
                                    <div class="text-danger">
                                        @error('semester_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                <div class="form-group mb-2">
                                    <label class="small mb-1">Prodi</label>
                                                <select
                                                    class="form-control col-sm-7"
                                                    name="prodi_ketua"                                                    
                                                    placeholder="Masukkan prodi"/>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Keperawatan">Keperawatan</option>
                                                <option value="Agroindustri">Agroindustri</option>
                                                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                                            </select>
                                <div class="text-danger">
                                        @error('prodi_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="exampleInputEmail1 small mb-1">Foto Ketua</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                        <input type="file" name="foto_ketua" class="custom-file-input" required id="exampleInputFile">
                                        <label class="custom-file-label" for="ExampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="text-danger">
                                        @error('foto_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="exampleInputEmail1 small mb-1">Lampiran Ketua</label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                        <input type="file" name="file_ketua" class="custom-file-input" id="exampleInputFile" required>
                                        <label class="custom-file-label" for="ExampleInputFile">Choose file</label>
                                        </div>
                                        </div>
                                        <div class="text-danger">
                                        @error('file_ketua')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                </div>
                                <div class="col-sm-6"><b>Data Wakil</b>
                                <hr>
                                <div class="mb-2">
                                        <label class="small mb-1">NIM</label>
                                        <input type="text" class="form-control" id="exampleLastName"
                                            placeholder="Masukan NIM" name="nim_wakil" required>
                                    <div class="text-danger">
                                        @error('nim_wakil')
                                        {{ $message}}
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="small mb-1">Nama</label>
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="Masukan Nama" name="nama_wakil" required>
                                    <div class="text-danger">
                                        @error('nama_wakil')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="small mb-1">Tingkat</label>
                                        <input type="text" pattern="[0-9]" class="form-control col-sm-2"
                                            id="exampleFirstName" placeholder="Isi" name="tingkat_wakil" required>
                                    <div class="text-danger">
                                        @error('tingkat_wakil')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="small mb-1">Semester</label>
                                        <input type="text" pattern="[0-9]" class="form-control col-sm-2"
                                            id="exampleFirstName" placeholder="Isi" name="semester_wakil" required>
                                    <div class="text-danger">
                                        @error('semester_wakil')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                    </div>
                                <div class="form-group mb-2">
                                    <label class="small mb-1">Prodi</label>
                                                <select
                                                    class="form-control col-sm-7"
                                                    name="prodi_wakil"                                                    
                                                    placeholder="Masukkan prodi"/>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Keperawatan">Keperawatan</option>
                                                <option value="Agroindustri">Agroindustri</option>
                                                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                                            </select>
                                            <div class="text-danger">
                                        @error('prodi_wakil')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="exampleInputEmail1 small mb-1">Foto Wakil</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                        <input type="file" name="foto_wakil" class="custom-file-input" id="exampleInputFile" required>
                                        <label class="custom-file-label" for="ExampleInputFile">Choose file</label>
                                            </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('foto_wakil')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="exampleInputEmail1 small mb-1">Lampiran Wakil</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                        <input required type="file" name="file_wakil" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="ExampleInputFile">Choose file</label>
                                            </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('file_wakil')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-2">
                            <strong>Email Ketua</strong>
                            <input type="text" class="form-control col-sm-5" id="exampleLastName" placeholder="Masukan Email Ketua" name="email" required>
                            <div class="text-danger">
                                        @error('email')
                                        {{ $message}}
                                        @enderror
                                        </div>
                            </div>
                            <div class="mb-2">
                            <div class="form-group">
                                <strong>Visi</strong>
                                <textarea style="height: 100px" class="form-control" name="visi" placeholder="Masukan Visi" type="text" required></textarea>
                                <div class="text-danger">
                                        @error('visi')
                                        {{ $message}}
                                        @enderror
                                        </div>
                            </div>
                            <div class="mb-2">
                            <div class="form-group">
                                <strong>Misi</strong>
                                <textarea style="height: 100px" class="form-control" name="misi" placeholder="Masukan Misi" type="text" required></textarea>
                                <div class="text-danger">
                                        @error('misi')
                                        {{ $message}}
                                        @enderror
                                        </div>
                            </div>
                            </div>
                            <hr>
                            <div class="form-group mb-2">
                                    <label class="small mb-1">Pilih Acara</label>
                                                <select
                                                    class="form-control col-sm-7"
                                                    name="acara_id"                                                    
                                                    placeholder=""/>
                                                @foreach ($acara as $data)
                                                <option value="{{$data->id_acara}}">{{$data->nama_acara}}</option>
                                                @endforeach    
                                            </select>
                                            <div class="text-danger">
                                        @error('acara_id')
                                        {{ $message}}
                                        @enderror
                                        </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>

</body>

</html>