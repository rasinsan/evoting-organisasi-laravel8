<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Panitia;
use App\Models\Acara;

class kelolaPanitiaController extends Controller
{
    public function __construct()
	{
     	$this->Panitia = new Panitia;
	}

	public function index(Request $request)
	{
	    $keyword = $request->keyword;
        $panitia = Panitia::where('nama', 'LIKE', '%'.$keyword.'%')
        ->orWhere('acara_id', 'LIKE', '%'.$keyword.'%')
        ->get();
        
	    return view('admin/kelola_panitia/index',compact('keyword','panitia'));
	}

	public function detail($id)
	{
	        if(!$this->Panitia->detailData($id))
	        {abort(404);
	        }
	        $data = ['panitia' => $this->Panitia->detailData($id)
	    ];
	    return view('admin/kelola_panitia/detail', $data);    
	}

	public function add()
	{
	    $acara = Acara::all();

	    return view('admin/kelola_panitia/tambah', compact('acara'));
	}

	public function insert()
	{
	        Request()->validate([
	            'nama' => 'required',
	            'username' => 'required',
	            'password' => 'required',
	            'acara_id' => 'required',
	        ],[//ini adalah konversi keterangan validasi form NIP dalam bahasa Indonesia]
	            'nama.required' => 'Nama panitia Wajib Diisi',
	            'username.required' => 'Username Wajib Diisi',
	            'password.required' => 'Password Wajib Diisi',
	            'acara_id.required' => 'Acara Wajib Diisi',
	        ]);
	        //jika validasi tidak ada maka lakukan simpan data

	        $data = [
	            'nama' => Request()->nama,
	            'username' => Request()->username,
	            'password' => Hash::make(Request()->password),
	            'acara_id' => Request()->acara_id,
	        ];
	        $this->Panitia->addData($data);
	        return redirect('admin/panitia/')->with('pesan','Data berhasil ditambahkan! ');  
	}

	public function edit($id)
	{
	            if(!$this->Panitia->detailData($id))
	            {abort(404);
	            }
	            $acara = Acara::all();
	            $data = ['panitia' => $this->Panitia->detailData($id)];
	        return view('admin/kelola_panitia/edit',$data, compact('acara'));
	        }

	public function update($id){
	            Request()->validate([
	                'nama' => 'required',
		            'username' => 'required',
		            'acara_id' => 'required',
		        	],[//ini adalah konversi keterangan validasi form NIP dalam bahasa Indonesia]
		            'nama.required' => 'Nama panitia Wajib Diisi',
		            'username.required' => 'Username Wajib Diisi',
		            'acara_id.required' => 'Acara Wajib Diisi',
		        	]);
	                $data = [
	                    'nama' => Request()->nama,
	                    'username' => Request()->username,
	                    'acara_id' => Request()->acara_id,
	                ];
	                $this->Panitia->editData($id,$data);        

	            return redirect('admin/panitia/')->with('pesan','Data berhasil diupdate');
	}
	
	public function delete($id)
	{
	    $this->Panitia->deleteData($id);
	    return redirect('admin/panitia/')->with('pesan', 'Data berhasil Dihapus');
	}    
}