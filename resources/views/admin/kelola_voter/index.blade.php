@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Voter</h1>
    </div>

    <div class="row container-fluid">
    <div class="form-group">
    <form method="GET" action="/admin/voter">
        <input type="text" name="keyword" value="{{ $keyword }}" />
        <button type="submit" class="btn btn-sm btn-primary">Search</button>
    </form>
    </div>
    <table id="example1" class="table table-bordered table-striped">
          @if (session('pesan'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success</h5>
                {{ session('pesan') }}
              </div>
          @endif
          <thead>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Masuk</th>
            <th style="text-align: center; width: 20%;">Action</th>
          </tr>
          </thead>
          <tbody>
           @foreach ($voter as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$data->nim}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->prodi}}</td>
                  <td>{{$data->tahun}}</td>
                  <td style="text-align: center;">
                    <a href="/admin/voter/hapus/{{$data->id}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>

@endsection