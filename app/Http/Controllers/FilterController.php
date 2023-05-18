<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Filter;

class FilterController extends Controller
{
    public function voter(Request $request){
        $keyword = $request->keyword;
        $prodi = $request->prodi;

        $voter = Voter::where('nama', 'LIKE', '%'.$keyword.'%')
        ->orWhere('nim', 'LIKE', '%'.$keyword.'%')
        ->orWhere('tahun', 'LIKE', '%'.$keyword.'%')
        ->get();
        
        $voter = Voter::where('prodi', 'LIKE', '%'.$prodi.'%')->get();
        
        return view('admin.pemilihan.filter', compact('voter', 'keyword', 'prodi'));
    }

    public function filter(Request $request){
    	
    	$data = [];
        $error = 1;

        for($i = 0; $i < count($request->get('pilih')); $i++){
            $data[] = [
                'voter_id' => $request->get('pilih')[$i],
            ];
        }

        if(count($data) > 0){
            $error = '';
        }
        Filter::upsert($data, ['voter_id','nim','nama','prodi','tahun']);
        return redirect('/admin/pemilihan')->with('pesan', 'Data filter berhasil ditambahkan');
    }
}
