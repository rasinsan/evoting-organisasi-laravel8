@extends('admin.layouts.template')
@section('content')
					<div class="container-fluid">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
                    	<h1 class="h3 mb-0 text-gray-800">List Capaslon</h1>
                	</div>
                	<a href="/admin/capaslon" class="btn btn-primary">Kembali</a>
					<br>
					<br>
          @error('no_urut')
                            <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                      <h5>{{$message}}</h5>
                    </div>
          @enderror
					<table id="example1" class="table table-bordered table-striped">
					      @if (session('pesan'))
					          <div class="alert alert-success alert-dismissible">
					            <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
					            <h5><i class="icon fas fa-check"></i> Success</h5>
					            {{ session('pesan') }}
					          </div>
					      @endif
					      <p>Pendaftar : {{$jumlah}}</p>
					      <thead>
					      <tr>
					        <th>No</th>
					        <th>Nama Ketua</th>
					        <th>Nama Wakil</th>
					        <th>Visi</th>
					        <th>Misi</th>
					        <th style="text-align: center; width: 20%;">Action</th>
					      </tr>
					      </thead>
					      <tbody>
					        <?php $no=1;?>
					        @foreach ($capaslon as $data)
					            <tr>
					              <td>{{ $no++ }}</td>
					              <td>{{ $data->nama_ketua }}</td>
					              <td>{{ $data->nama_wakil }}</td>
					              <td>{{ $data->visi }}</td>
					              <td>{{ $data->misi }}</td>
					              <td style="text-align: center;">
					                  <a href="/admin/capaslon/detail/{{$data->id}}" class="btn btn-sm btn-success">
                                        Detail<a>
                                      <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#terimaModal{{$data->id}}"> Terima</a>
                                      <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#tolakModal{{$data->id}}"> Tolak</a>
                                  </td>
					            </tr>
					          @endforeach
					          </tbody>
					    </table>
					</div>


  <!-- modal terima capaslon -->
  @foreach($capaslon as $data)
  <div class="modal fade" id="terimaModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terima Pasangan Calon</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
          <form action="/admin/capaslon/seleksi/terima/{{$data->id}}" method="post">
                  @csrf
                   <div class="row" style="text-align: center;">
                      <div class="col-md-6">
                        <div class="form-group">
                              <input type="text" value="{{$data->id}}" name="capaslon_id" hidden>
                              <input type="text" value="{{$data->acara_id}}" name="acara_id" hidden>
                              <input type="text" value="{{$data->nama_ketua}}" name="nama_ketua" hidden>
                              <input type="text" value="{{$data->nama_wakil}}" name="nama_wakil" hidden>
                              <input type="text" value="{{$data->nim_ketua}}" name="nim_ketua" hidden>
                              <input type="text" value="{{$data->nim_wakil}}" name="nim_wakil" hidden>
                              <input type="text" value="{{$data->tingkat_ketua}}" name="tingkat_ketua" hidden>
                              <input type="text" value="{{$data->tingkat_wakil}}" name="tingkat_wakil" hidden>
                              <input type="text" value="{{$data->semester_ketua}}" name="semester_ketua" hidden>
                              <input type="text" value="{{$data->semester_wakil}}" name="semester_wakil" hidden>
                              <input type="text" value="{{$data->prodi_ketua}}" name="prodi_ketua" hidden>
                              <input type="text" value="{{$data->prodi_wakil}}" name="prodi_wakil" hidden>
                              <input type="text" value="{{$data->foto_ketua}}" name="foto_ketua" hidden>
                              <input type="text" value="{{$data->foto_wakil}}" name="foto_wakil" hidden>
                              <input type="text" value="{{$data->file_ketua}}" name="file_ketua" hidden>
                              <input type="text" value="{{$data->file_wakil}}" name="file_wakil" hidden>
                              <input type="text" value="{{$data->email}}" name="email" hidden>
                              <input type="text" value="{{$data->visi}}" name="visi" hidden>
                              <input type="text" value="{{$data->misi}}" name="misi" hidden>
                        </div>
                      </div>
                      <div class="col-md-12">
                          <label>Nama Ketua <strong>{{$data->nama_ketua}}</strong> & Wakil Ketua <strong>{{$data->nama_wakil}}</strong></label>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nomor Urut </strong>
                              <input class="form-control" type="text" name="no_urut" style="width: 50px; margin-left: 44%; text-align: center;" required autofocus autocomplete autosave>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Terima</button>
                </div>
        </form>
            </div>
        </div>
    </div>
    @endforeach  

  <!-- modal tolak capaslon -->
	@foreach($capaslon as $data)
	<div class="modal fade" id="tolakModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tolak Pasangan Calon</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
 					<form action="/admin/capaslon/seleksi/tolak/{{$data->id}}" method="get">
          			  @csrf
           				 <div class="row" style="text-align: center;">
              				<div class="col-md-12">
                					<label>Nama Ketua <strong>{{$data->nama_ketua}}</strong> & Wakil Ketua <strong>{{$data->nama_wakil}}</strong></label>
                			</div>
                		</div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Tolak</button>
                </div>
				</form>
            </div>
        </div>
    </div>
    @endforeach
@endsection