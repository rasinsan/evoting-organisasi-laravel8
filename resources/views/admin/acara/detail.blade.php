@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Acara</h1>
                        </div>

                    <!-- Content Row -->
                    <a href="/admin/acara" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Acara</strong>
                            <br>
                            {{$acara->nama_acara}}
                        </div>
                        <div class="form-group">
                            <strong>Waktu Pelaksanaan</strong>
                            <br>
                            {{ $acara->pelaksanaan }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Informasi Acara</strong>
                            <br>
                            {{ $acara->info_acara }}
                        </div>
                    </div>
                </div>
@endsection