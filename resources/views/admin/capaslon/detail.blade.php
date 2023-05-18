@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
	<br>
	<br>
				<form class="user">
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0"><b>Data Ketua</b>
                                <hr>
                                    <div class="mb-2">
                                    	<img src="{{url('foto/'.$capaslon->foto_ketua)}}" width="200px">    
                                    </div>
	                                <div class="mb-2">
	                                    <label class="">NIM :</label>
	                                   	{{$capaslon->nim_ketua}}	
	                                </div>
                                    <div class="mb-2">
                                        <label class="">Nama :</label>
                                    	{{$capaslon->nama_ketua}}
                                    </div>
                                    <div class="mb-2">
                                        <label class="">Tingkat :</label>
                                    	{{$capaslon->tingkat_ketua}}
                                    </div>
                                    <div class="mb-2">
                                        <label class="">Semester :</label>
                                    	{{$capaslon->semester_ketua}}
                                    </div>
	                                <div class="mb-2">
	                                    <label class="">Prodi :</label>
	                                    {{$capaslon->prodi_ketua}}
	                                </div>
	                                <div class="form-group">
	                                        <label class="exampleInputEmail1 ">Lampiran Ketua</label>
	                                        <br><img src="{{url('foto/'.$capaslon->file_ketua)}}" width="200px">
	                                </div>
                                </div>
                                <div class="col-sm-6"><b>Data Wakil</b>
                                <hr>
                                <div class="mb-2">
                                    	<img src="{{url('foto/'.$capaslon->foto_wakil)}}" width="200px">    
                                    </div>
	                                <div class="mb-2">
	                                    <label class="">NIM :</label>
	                                   	{{$capaslon->nim_wakil}}	
	                                </div>
                                    <div class="mb-2">
                                        <label class="">Nama :</label>
                                    	{{$capaslon->nama_wakil}}
                                    </div>
                                    <div class="mb-2">
                                        <label class="">Tingkat :</label>
                                    	{{$capaslon->tingkat_wakil}}
                                    </div>
                                    <div class="mb-2">
                                        <label class="">Semester :</label>
                                    	{{$capaslon->semester_wakil}}
                                    </div>
	                                <div class="mb-2">
	                                    <label class="">Prodi :</label>
	                                    {{$capaslon->prodi_wakil}}
	                                </div>
	                                <div class="form-group">
	                                        <label class="exampleInputEmail1 ">Lampiran Wakil</label>
	                                        <br><img src="{{url('foto/'.$capaslon->file_wakil)}}" width="200px">
	                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-2">
                            <strong>Email :</strong>
                            {{$capaslon->email}}
                            </div>
                            <div class="mb-2">
                            <div class="form-group">
                                <strong>Visi :</strong>
                                {{$capaslon->visi}}
                            </div>
                        	</div>
                            <div class="mb-2">
                            <div class="form-group">
                                <strong>Misi :</strong>
                            	{{$capaslon->misi}}    
                            </div>
                            </div>
                            </form>
</div>
@endsection