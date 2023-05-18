<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Paslon;
use App\Models\Pemilihan;
use App\Models\Acara;
use App\Models\Hasil;
use App\Models\VerifyVoter;
use App\Models\Riwayat;

class VoterController extends Controller
{	
	public function __construct()
	{
		$this->middleware('auth');
		$this->Hasil = new Hasil();
	}

	public function index()
    {
       $pemilihan = pemilihan::all();
       $paslon = paslon::all();
       return view('voter.dashboard', compact('pemilihan','paslon'));
    }

     public function hasil(Request $request){
      // dd(request()->all());
        Request()->validate([
        	'voter_id' => 'required|unique:hasil,voter_id',
        ],[
        	'voter_id.unique' => 'Anda Sudah Memilih Paslon',
        ]);
        // Hasil::create([
        //     'paslon_id' => $request->paslon_id,
        //     'voter_id' => $request->voter_id,
        // ]);
        Hasil::create([
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'foto_ketua' => $request->foto_ketua,
            'foto_wakil' => $request->foto_wakil,
            'voter_id' => $request->voter_id,
            'no_urut' => $request->no_urut,
            'acara_id' => $request->acara_id,
        ]);
        Riwayat::create([
            'no_urut' => $request->no_urut,
            'nama_ketua' => $request->nama_ketua,
            'foto_ketua' => $request->foto_ketua,
            'nama_wakil' => $request->nama_wakil,
            'foto_wakil' => $request->foto_wakil,
            'acara_id' => $request->acara_id,
            'voter_id' => $request->voter_id,
        ]);
        // $data = [
        //     'paslon_id' => $paslon->id_paslon,
        //     'voter_id' => Request()->voter_id,
        //     'no_urut' => Request()->no_urut,
        //     'acara_id' => Request()->acara_id,
        // ];
       	// $this->Hasil->addData($data);
       	return view('voter.vote')->with('pesan','Anda Sudah Memilih Paslon');
     }
}