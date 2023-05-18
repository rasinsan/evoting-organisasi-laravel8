@extends('admin.layouts.template')
@section('content')
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Edit Acara</h1>
                        </div>

                    <!-- Content Row -->
                    <a href="/admin/acara" class="btn btn-primary">
                    Kembali
                    </a>
                    <br>
                    <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                   
                <form action="/admin/acara/update/{{$acara->id_acara}}" method="POST">
                    @csrf
                    @method('POST')
                  
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Acara</strong>
                                <input type="text" name="nama_acara" class="form-control" placeholder="Nama Acara" value="{{$acara->nama_acara}}"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Waktu Pelaksanaan</strong>
                                <input class="form-control" name="pelaksanaan" placeholder="Waktu Pelaksanaan" type="date" value="{{$acara->pelaksanaan}}"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Informasi Acara</strong>
                                <input class="form-control" style="height: 100px;" name="info_acara" placeholder="Informasi Detail Mengenai Acara" value="{{$acara->info_acara}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
@endsection