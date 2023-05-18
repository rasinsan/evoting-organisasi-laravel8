@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Panitia</h1>
    </div>

    <div class="row container-fluid">
    <div class="form-group">
    <div class="form-group">
    <a href="/admin/panitia/tambah" class="btn btn-primary">
    Tambah Panitia
    </a>
    </div>
    <div class="form-group">  
    <form method="GET" action="/admin/panitia">
        <input type="text" name="keyword" value="{{ $keyword }}" />
        <button type="submit" class="btn btn-sm btn-primary">Search</button>
    </form>
    </div>
    <div class="form-group">
    @if (session('pesan'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success</h5>
                {{ session('pesan') }}
              </div>
    @endif
    </div>
    </div>
    <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Acara</th>
            <th style="text-align: center; width: 20%;">Action</th>
          </tr>
          </thead>
          <tbody>
           @foreach ($panitia as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->username}}</td>
                  <td>{{$data->acara_id}}</td>
                  <td style="text-align: center;">
                    <a href="/admin/panitia/edit/{{$data->id}}" class="btn btn-warning">Edit</a>
                    <a href="/admin/panitia/hapus/{{$data->id}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>

@endsection