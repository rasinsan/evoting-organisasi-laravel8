<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Acara;
use App\Models\Paslon;
use App\Models\Pemilihan;
use DB;

class PanitiaController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}
	
    public function index()
    {
        $capaslon = DB::table('capaslon')->count();
    	$voter = DB::table('voters')->count();
    	$acara = DB::table('acara')->count();
    	$panitia = DB::table('panitia')->count();
    	$pemilihan = Pemilihan::where('acara_id', auth::guard('panitia')->user()->acara_id)->get();
        $jumlah = count($pemilihan);
        return view('panitia.dashboard',['capaslon'=>$capaslon, 'acara'=>$acara, 'panitia'=>$panitia, 'voter'=>$voter, 'jumlah'=>$jumlah]);
    }

    public function acara()
    {
    	$acara = Acara::all();
    	$paslon = paslon::all();
    	return view('panitia/acara/index', compact('acara','paslon'));
    }
}