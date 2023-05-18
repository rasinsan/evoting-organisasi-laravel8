@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Filter Voter</h1>
	</div>

	<div class="form-group">
	<a href="/admin/pemilihan" class="btn btn-primary">Kembali</a>
	</div>
  	<!-- <form method="GET" action="/admin/pemilihan/filter">
        <input type="text" name="keyword" value="{{ $keyword }}" />
        <button type="submit" class="btn btn-sm btn-primary">Search</button>
    </form>
     --><form method="GET" action="/admin/pemilihan/filter">
            <select name="prodi" class="form-control col-sm-3">
				<option value="Sistem Informasi" selected="{{ $prodi }}">Sistem Informasi</option>
				<option value="Keperawatan" selected="{{ $prodi }}">Keperawatan</option>
				<option value="Agroindustri" selected="{{ $prodi }}">Agroindustri</option>
				<option value="Teknik Pemesinan" selected="{{ $prodi }}">Teknik Pemesinan</option>
				<option value="" selected="selected">Semua</option>
			</select>
        <button type="submit" class="btn btn-sm btn-primary col-sm-3">Search</button>
    </form>
    <br>
  	<table style="text-align: center;" id="example1" class="table table-bordered table-striped">
		@if (session('pesan'))
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-check"></i> Success</h5>
                {{ session('pesan') }}
            </div>
        @endif
        <form action="/admin/pemilihan/filter/pilih" method="POST">
        	{{ csrf_field() }}
        	<thead>
        		<tr>
        			<th style="display: none">ID</th>
        			<th style="text-align: center;"><input type="checkbox" name="" id="checkedAll"></th>
        			<th>NIM</th>
        			<th>Nama</th>
        			<th>Prodi</th>
        			<th>Tahun Masuk</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach ($voter as $data)
        		<tr>
        			<td style="display: none"><input type="text" name="voter_id[]" value="{{ $data->id }}"></th>
        			<td style="text-align: center;">
        				<input type="checkbox" name="pilih[]" value="{{$data->id}}" class="pilih">
        			</td>
        			<td> <input type="text" name="nim" value="{{$data->nim}}" hidden="true">
        				{{$data->nim}}
        			</td>
        			<td> <input type="text" name="nama" value="{{$data->nama}}" hidden="true">
        				{{$data->nama}}
        			</td>
        			<td> <input type="text" name="prodi" value="{{$data->prodi}}" hidden="true">
        				{{$data->prodi}}
        			</td>
        			<td style="text-align: center;" ><input type="text" name="tahun[]" value="{{$data->tahun}}" hidden="true">{{$data->tahun}}</td>
        			</tr>
        		@endforeach
        	</tbody>
    </table>
    <div class="form-group" style="margin-left: 85%;">
    	<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda ingin menambah voter?')">
    		<i class="btn-icon-prepend" data-feather="link"></i>
    		Pilih
    	</button>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
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