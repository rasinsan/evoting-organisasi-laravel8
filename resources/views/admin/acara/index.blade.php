@extends('admin.layouts.template')
@section('content')
				<div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kelola Acara</h1>
                        </div>

                    <!-- Content Row -->
                    <a href="/admin/acara/tambah" class="btn btn-primary">
                    Tambah Acara
                    </a>
                    <br>
                    <br>
                    <div class="row container-fluid">
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
					        <th>Nama Acara</th>
					        <th>Waktu Pelaksanaan</th>
					        <th width="450">Informasi Acara</th>
					        <th style="text-align: center;">Action</th>
					      </tr>
					      </thead>
					      <tbody>
					        <?php $no=1;?>
					        @foreach ($acara as $data)
					            <tr>
					              <td>{{ $no++ }}</td>
					              <td>{{ $data->nama_acara }}</td>
					              <td>{{ $data->pelaksanaan }}</td>
					              <td style="text-align: justify;">{{ $data->info_acara }}</td>
					              <td>
					                <form action="/admin/acara/hapus/{{$data->id_acara}}" method="GET">
                                        <a href="/admin/acara/detail/{{$data->id_acara}}" class="btn btn-sm btn-success">Detail</a>
					                	<a href="/admin/acara/edit/{{$data->id_acara}}" class="btn btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')" data-toggle="Tooltip">Hapus</button>
                                    </form>
					               </td>
					            </tr>
					          @endforeach
					          </tbody>
					    </table>
                    </div>
                </div>
@endsection