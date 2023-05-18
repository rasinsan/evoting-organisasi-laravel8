@extends('admin.layouts.template')
@section('content')
			<div class="container-fluid">
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Riwayat Pemilihan</h1>
                </div>
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="row">
                        @foreach ($acara as $acara)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="col-auto">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                    <div class="row no-gutters align-items-center">
                                         <div class="col mr-2 text-primary">
                                            {{$acara->nama_acara}}
                                            <br>
                                            <small>{{$acara->pelaksanaan}}</small>
                                         </div>
                                    </div>
                                    <br>
                                        <a href="{{route('tampil',$acara->id_acara)}}" class="btn btn-warning">
                                            Lihat
                                        </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                 	</div>
                 	</div>
@endsection