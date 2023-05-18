<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hasil;
use App\Models\Acara;
use App\Models\Paslon;
use App\Models\Riwayat;
use DB;
use Carbon\Carbon;

class HasilController extends Controller
{
	public function __construct()
    {
        $this->riwayat = new Riwayat;
    }

    public function index()
    {
    	$data = Hasil::select(DB::raw('count(voter_id) as total, no_urut, foto_ketua, foto_wakil, nama_ketua, nama_wakil'))
		->groupby('no_urut', 'foto_ketua', 'nama_ketua', 'nama_wakil', 'foto_wakil')
		->orderby('no_urut')
		->get();

        $hasil = hasil::all();
        $paslon = Paslon::all();
    	return view('admin.hasil.index',['data'=>$data], compact('hasil'));
    }

    public function panitia()
    {
    	$data = Hasil::select(DB::raw('count(voter_id) as total, no_urut, foto_ketua, foto_wakil, nama_ketua, nama_wakil, acara_id'))
		->groupby('no_urut', 'foto_ketua', 'foto_wakil', 'nama_ketua', 'nama_wakil', 'acara_id')
		->orderby('no_urut')
		->get();

        $paslon = Paslon::all();
        $hasil = hasil::all();
    	return view('panitia.hasil_vote.index',['data'=>$data], compact('hasil','paslon'));
    }

    public function riwayat(){
    	$acara = Acara::OrderBy('id_acara', 'desc')->get();
        return view('admin/hasil/riwayat', compact('acara'));
    }

    public function tampil($acara_id)
    {
        $data = Riwayat::where('acara_id',$acara_id)->select(DB::raw('count(voter_id) as total, no_urut, foto_ketua, foto_wakil, nama_ketua, nama_wakil'))
		->groupby('no_urut', 'foto_ketua', 'nama_ketua', 'nama_wakil', 'foto_wakil')
		->orderby('no_urut')
		->get();

        $hasil = hasil::all();
        $paslon = Paslon::all();
        // $riwayat = Riwayat::where('acara_id', $acara_id, DB::raw('count(voter_id) as total, no_urut'))->groupby('no_urut','id','acara_id','nama_ketua','nama_wakil','foto_ketua','foto_wakil','voter_id')->get();
        return view('admin.hasil.tampil', compact('data'));
    }

    public function riwayat_panitia(){
    	$acara = Acara::all();
        return view('panitia/hasil_vote/riwayat', compact('acara'));
    }

    public function tampil_panitia($acara_id)
    {
        $data = Riwayat::where('acara_id',$acara_id)->select(DB::raw('count(voter_id) as total, no_urut, foto_ketua, foto_wakil, nama_ketua, nama_wakil'))
		->groupby('no_urut', 'foto_ketua', 'nama_ketua', 'nama_wakil', 'foto_wakil')
		->orderby('no_urut')
		->get();
        // $riwayat = Riwayat::where('acara_id', $acara_id, DB::raw('count(voter_id) as total, no_urut'))->groupby('no_urut','id','acara_id','nama_ketua','nama_wakil','foto_ketua','foto_wakil','voter_id')->get();
        return view('panitia.hasil_vote.tampil', compact('data'));
    }

    public function quickcount()
    {
    	$data = Hasil::select(DB::raw('count(voter_id) as total, no_urut, foto_ketua, foto_wakil, nama_ketua, nama_wakil, acara_id'))
		->groupby('no_urut', 'foto_ketua', 'foto_wakil', 'nama_ketua', 'nama_wakil', 'acara_id')
		->orderby('no_urut')
		->get();

        $paslon = Paslon::all();
        $hasil = hasil::all();
    	return view('qc',['data'=>$data], compact('hasil','paslon'));
    }
}
