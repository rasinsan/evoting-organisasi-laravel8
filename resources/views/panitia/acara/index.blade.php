@extends('panitia.layouts.template')
@section('content')
			<div class="container-fluid">
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Acara</h1>
                </div>
                    <div class="row">
                        @foreach ($acara as $acara)
                        @if($acara->id_acara == Auth::guard('panitia')->user()->acara_id)
            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center; margin-left: auto; margin-right: auto;">
                <strong>{{$acara->nama_acara}}</strong>
                <br>
                <small>{{$acara->pelaksanaan}}</small>
            <hr>
            <div class="form-group mb-3" style="text-align: justify;">
            <p>{{$acara->info_acara}}</p>
            </div>
        </div>
        </div>
        <div class="row" style="margin-top: 10%;">
        @foreach($paslon as $data)
        @if ($acara->id_acara == $data->acara_id)
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
        </div>
                        @endif
                        @endforeach
                        @endif
                        @endforeach
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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection