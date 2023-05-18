@extends('admin.layouts.template')
@section('content')
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Tambah Panitia</h1>
                        </div>

                    <!-- Content Row -->
                    <a href="/admin/panitia/" class="btn btn-primary">
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
                   
                <form action="/admin/panitia/insert" method="POST">
                    @csrf
                  
                     <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Nama</strong>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Panitia">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Username</strong>
                                <input class="form-control" name="username" placeholder="Username" type="text"></input>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                <strong>Password</strong>
                                <input class="form-control" name="password" placeholder="Password" type="text"></input>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <strong>Pilih Acara</strong>
                            <select
                            class="form-control col-sm-7"
                            name="acara_id"                                                    
                            placeholder=""/>
                            <option value="#" selected>Pilih Acara</option>
                            @foreach ($acara as $data)
                            <option value="{{$data->id_acara}}">{{$data->nama_acara}}</option>
                            @endforeach    
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
               </div>
               <br>
@endsection