<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use App\Models\Paslon;
use App\Models\Voter;
use App\Models\Pemilihan;
use App\Models\Filter;
use App\Models\Hasil;
use App\Models\Riwayat;

class PemilihanController extends Controller
{
    public function __construct()
    {
        $this->Filter = new Filter;
        $this->Pemilihan = new Pemilihan;
        $this->Hasil = new Hasil;
    }

    public function index()
    {
        $acara = Acara::all();
    	$paslon = Paslon::all();
    	$filter = Filter::all();
        return view('admin.pemilihan.index', compact('acara','filter','paslon'));
    }

    public function dataPaslon($id_acara)
    {
    	$paslon = paslon::where('acara_id',$id_acara)->get();
    	return response()->json($paslon);
    } 

    public function inputAcaraID($id){

        $acara = acara::where('acara_id',$id)->get();
    	return response()->json($acara);
    }

    public function mulaiPemilihan(Request $request) {
        $data = [];
        $error = 1;

        for($i = 0; $i < count($request->get('voter_id')); $i++){
            $data[] = [
                'voter_id' => $request->get('voter_id')[$i],
                'acara_id' => $request->get('acara')[$i],
            ];
        }

        if(count($data) > 0){
            $error = '';
        }
        Pemilihan::upsert($data, ['voter_id','acara_id']);
        return back()->with('error', $error);
    }

    public function selesaiPemilihan(){
        $this->Pemilihan->deleteData();
        $this->Filter->deleteAll();
        $this->Hasil->deleteAll();
        return redirect('/admin/pemilihan')->with('pesan', 'Acara Pemilihan Telah Selesai');
    }

    public function hapus($id){
        $this->Filter->deleteData($id);
        return redirect('/admin/pemilihan')->with('pesan', 'Data filter berhasil dihapus');
    }

   
}