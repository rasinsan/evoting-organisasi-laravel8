<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use DB;

class AdminController extends Controller
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
        return view('admin.dashboard',['capaslon'=>$capaslon, 'acara'=>$acara, 'panitia'=>$panitia, 'voter'=>$voter]);
    }
}