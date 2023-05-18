@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pemilihan</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row mb-5">
                        <div class="form-group col-sm-4 mb-3 mb-sm-0">
                            <label class="small mb-1"><strong>Pilih Acara</strong></label>
                                    <select
                                        class="form-control col-sm-7"
                                        name="acara_id"  id = "acara_id"                                                   
                                        placeholder=""> <option value="">Pilih Acara</option>
                                        @foreach ($acara as $acara)
                                        <option value="{{$acara->id_acara}}">{{$acara->nama_acara}}</option>  
                                        @endforeach  
                                    </select>
                            <div class="text-danger">
                            @error('')
                            {{ $message}}
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <label class="small mb-2"><strong>Daftar Paslon</strong></label>
                            <div class="grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <table class="table" id="paslon">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>No Urut</th>
                                                <th>Nama Ketua</th>
                                                <th>Nama Wakil</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (session('error') === '')
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Success</h5>
                            <i class="link-icon" data-feather="check-circle"></i> Pemilihan berhasil dimulai!
                        </div>
                      @elseif(session('error') == 1)
                        <div class="alert alert-danger alert-dismissible">
                            <i class="link-icon" data-feather="alert-circle">
                                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Gagal</h5>    
                            </i> Gagal memulai pemilihan, silahkan coba kembali!
                        </div>
                      @endif

                    <label class="small mb-2"><strong>Filter Voter</strong></label>
                    <div class="form-group">   
                        <a href="/admin/pemilihan/filter" class="btn btn-primary">Filter Voter</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                          @if (session('pesan'))
                              <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Success</h5>
                                {{ session('pesan') }}
                              </div>
                          @endif
                          <form action="/admin/pemilihan/mulaipemilihan" method="POST">
                            {{ csrf_field() }}
                          <thead>
                          <tr>
                            <th style="display: none">ID</th>
                            <th style="display: none">id acara</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Tahun Masuk</th>
                            <th style="text-align: center; width: 20%;">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                           @foreach ($filter as $data)
                                <tr>
                                  <td style="display: none"><input type="text" name="voter_id[]" value="{{ $data->voter_id }}"></th>
                                  <td style="display: none"><input type="text" name="acara[]" class="acara"></td>
                                  <td>{{$data->voter->nim}}</td>
                                  <td>{{$data->voter->nama}}</td>
                                  <td>{{$data->voter->prodi}}</td>
                                  <td style="text-align: center;">{{$data->voter->tahun}}</td>
                                  <td>
                                   <a href="/admin/filter/hapus/{{$data->id}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>      
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div class="form-group" style="margin-left: 37%;">   
                        <button type="submit" class="btn btn-success" id="button" onclick="return confirm('Apakah anda ingin memulai acara?')">
                            <i class="btn-icon-prepend" data-feather="link"></i>
                           Mulai
                        </button>
                         <a href="/admin/pemilihan/selesaipemilihan" class="btn btn-danger" onclick="return confirm('Apakah anda ingin selesai acara?')">Selesai</a>      
                        </div>
                    <br>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
        $('#acara_id').on('change', function() {
           var acaraID = $(this).val();
           if(acaraID) {
               $.ajax({
                   url: '/getpaslon/'+acaraID,
                   type: "GET",
                   data : {"_token":"{{ csrf_token() }}"},
                   dataType: "json",
                   success:function(data)
                   {
                     if(data){
                        $('#paslon tbody').empty();
                        $.each(data, function(key, paslon){
                            $('#paslon tbody').append('<tr><td>' + paslon.no_urut+ '</td><td>' + paslon.nama_ketua + '</td><td>' + paslon.nama_wakil + '</td></tr>');
                        })
                    }
                 }
               });
           }else{
            $('#paslon tbody').empty(); 
           }
        });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#acara_id').on('change', function() {
                const id = $(this).val();
                $(".acara").val(id);
        })
        })

        $("#checkedAll").change(function() {
        $(".pilih").prop("checked", $(this).prop("checked"))
      })

      $(".pilih").change(function() {
        if($(this).prop("checked")==false){
          $("#checkedAll").prop("checked", false)
        }

        if($(".pilih:checked").length == $(".pilih").length){
          $("#checkedAll").prop("checked", true)
        }
      })
    </script>

@endsection