<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use DB;

class AcaraController extends Controller
{
    public function __construct()
	{
     	$this->Acara = new Acara;
	}

	public function index()
	{
	    $acara = Acara::OrderBy('id_acara', 'desc')->get();
	    return view('admin/acara/index',compact('acara'));
	}

	public function detail($id_acara)
	{
	        if(!$this->Acara->detailData($id_acara))
	        {abort(404);
	        }
	        $data = ['acara' => $this->Acara->detailData($id_acara)
	    ];
	    return view('admin/acara/detail', $data);    
	}

	public function add()
	{
	    return view('admin/acara/tambah');
	}

	public function insert()
	{
	        Request()->validate([
	            'nama_acara' => 'required',
	            'pelaksanaan' => 'required',
	            'info_acara' => 'required',
	        ],[//ini adalah konversi keterangan validasi form NIP dalam bahasa Indonesia]
	            'nama_acara.required' => 'Nama Acara Wajib Diisi',
	            'pelaksanaan.required' => 'Tanggal Pelaksanaan Wajib Diisi',
	            'info_acara.required' => 'Info Acara Wajib Diisi',
	        ]);
	        //jika validasi tidak ada maka lakukan simpan data

	        $data = [
	            'nama_acara' => Request()->nama_acara,
	            'pelaksanaan' => Request()->pelaksanaan,
	            'info_acara' => Request()->info_acara,
	        ];
	        $this->Acara->addData($data);
	        return redirect('admin/acara')->with('pesan','Data berhasil ditambahkan! ');  
	}

	public function edit($id_acara)
	{
	            if(!$this->Acara->detailData($id_acara))
	            {abort(404);
	            }

	            $data = ['acara' => $this->Acara->detailData($id_acara)
	        ];
	        return view('admin/acara/edit',$data);
	        }

	public function update($id_acara){
	            Request()->validate([
	                'nama_acara' => 'required',
		            'pelaksanaan' => 'required',
		            'info_acara' => 'required',
		        	],[//ini adalah konversi keterangan validasi form NIP dalam bahasa Indonesia]
		            'nama_acara.required' => 'Nama Acara Wajib Diisi',
		            'pelaksanaan.required' => 'Tanggal Pelaksanaan Wajib Diisi',
		            'info_acara.required' => 'Info Acara Wajib Diisi',
		        	]);
	                $data = [
	                    'nama_acara' => Request()->nama_acara,
	                    'pelaksanaan' => Request()->pelaksanaan,
	                    'info_acara' => Request()->info_acara,
	                ];
	                $this->Acara->editData($id_acara,$data);        

	            return redirect('admin/acara')->with('pesan','Data berhasil diupdate');
	}
	
	public function delete($id_acara)
	{
	    $this->Acara->deleteData($id_acara);
	    return redirect('admin/acara')->with('pesan', 'Data berhasil Dihapus');
	}    
}