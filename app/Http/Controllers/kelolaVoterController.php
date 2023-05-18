<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;

class kelolaVoterController extends Controller
{
    public function __construct()
    {
        $this->Voter = new Voter;
    }

    public function index(Request $request){ 
        $keyword = $request->keyword;
        
        $voter = Voter::where('nama', 'LIKE', '%'.$keyword.'%')
        ->orWhere('nim', 'LIKE', '%'.$keyword.'%')
        ->orWhere('tahun', 'LIKE', '%'.$keyword.'%')
        ->get();
        
        return view('admin.kelola_voter.index', compact('voter','keyword'));
    }

    public function hapus($id){
        $this->Voter->deleteData($id);
        return redirect('/admin/voter')->with('pesan', 'Data voter berhasil dihapus');
    }
}
