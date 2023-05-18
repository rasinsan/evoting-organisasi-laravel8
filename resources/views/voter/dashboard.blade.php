@extends('voter.layouts.template')
@section('content')
<div class="container-fluid">
    @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success</h5>
                {{ session('pesan') }}
            </div>
        @endif
        @error('voter_id')
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert</h5>
                {{$message}}
            </div>
        @enderror
	<div class="form-group row">
        @if ($pemilihan)
        @foreach($pemilihan as $pemilihan)
        @if ($pemilihan->voter_id == Auth::guard('voter')->user()->id)
        @foreach($paslon as $data)
        @if ($pemilihan->acara_id == $data->acara_id)
        <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 10px;"><b>Paslon No Urut {{$data->no_urut}}</b>
            <hr>
            <div class="form-group mb-3">
            	<img src="{{url('foto/'.$data->foto_ketua)}}" width="200px">
            	<img src="{{url('foto/'.$data->foto_wakil)}}" width="100px">
            </div>
            <div class="form-group mb-3">
                <a class="" href="#" data-toggle="modal" data-target="#terimaModal{{$data->id_paslon}}"> 
                Detail
                </a>
                <br>
            	<strong>{{$data->nama_ketua}} & {{$data->nama_wakil}}</strong>
            </div>
            <div>
                <form action="/vote" method="post">
                @method('post')
                @csrf
                <input hidden="true" type="text" name="nama_ketua" value="{{$data->nama_ketua}}">
                <input hidden="true" type="text" name="nama_wakil" value="{{$data->nama_wakil}}">
                <input hidden="true" type="text" name="foto_ketua" value="{{$data->foto_ketua}}">
                <input hidden="true" type="text" name="foto_wakil" value="{{$data->foto_wakil}}">
                <input hidden="true" type="text" name="no_urut" value="{{$data->no_urut}}">
                <input hidden="true" type="text" name="acara_id" value="{{$data->acara_id}}">
                 <input hidden="true" type="text" name="voter_id" value="{{$pemilihan->voter_id}}">
                <button type="submit" class="btn btn-primary">
                    Vote
                </button>
            </form>
            </div>
            <!-- <div class="mb-3">
                <a href="{{ route('vote',$data->no_urut) }}">Pilih</a>
            </div> -->
        </div>
        @endif
        @endforeach
        @endif
        @endforeach
        @else
        <div class="container-fluid">
        <div class="form-group row">
        <strong style="margin-left: auto; margin-right: auto;">TIDAK ADA PEMILIHAN YANG SEDANG BERLANGSUNG</strong>
        </div>
        </div>
        <br>
        @endif
    </div>
</div>
@foreach($paslon as $data)
  <div class="modal fade" id="terimaModal{{$data->id_paslon}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Visi & Misi Paslon No Urut {{$data->no_urut}}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: justify;">
                <div class="row sm-7 form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <strong>Visi</strong>
                <br>
                {{$data->visi}}
                </div>
                <div class="col-sm-6">
                <strong>Misi</strong>
                <br>
                {{$data->misi}}
                </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
 @endsection