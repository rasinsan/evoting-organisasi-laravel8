<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Capaslon;
use App\Models\Acara;
use App\Models\Paslon;
use App\Mail\NotifPaslon;
use App\Mail\TolakPaslon;
use Illuminate\Support\Facades\Mail;
use DB;

class CapaslonController extends Controller
{
    public $capaslon;
    public function __construct()
    {
        $this->capaslon = new Capaslon;
    }

    public function index()
    {
    	$acara = Acara::all();
    	$capaslon = Capaslon::all();

    	return view('pendaftaran', compact('acara','capaslon'));
    }

    public function store()
    {
        
        // Request()->validate([
        //     'nim_ketua' => 'required',
        //     'nama_ketua' => 'required',
        //     'tingkat_ketua' => 'required',
        //     'semester_ketua' => 'required',
        //     'prodi_ketua' => 'required',
        //     'foto_ketua' => 'required',
        //     'file_ketua' => 'required',
        //     'nim_wakil' => 'required',
        //     'nama_wakil' => 'required',
        //     'tingkat_wakil' => 'required',
        //     'semester_wakil' => 'required',
        //     'prodi_wakil' => 'required',
        //     'foto_wakil' => 'required',
        //     'file_wakil' => 'required',
        //     'email' => 'required',
        //     'visi' => 'required',
        //     'misi' => 'required',
        //     'acara_id' => 'required',
        // ],[
        //     'nim_ketua.required' => 'NIM Wajib Diisi',
        //     'nama_ketua.required' => 'Nama Wajib Diisi',
        //     'tingkat_ketua.required' => 'Tingkat Wajib Diisi',
        //     'semester_ketua.required' => 'Semester Wajib Diisi',
        //     'prodi_ketua.required' => 'Prodi Wajib Diisi',
        //     'foto_ketua.required' => 'Foto Wajib Diisi',
        //     'file_ketua.required' => 'File Wajib Diisi',
        //     'nim_wakil.required' => 'NIM Wajib Diisi',
        //     'nama_wakil.required' => 'Nama Wajib Diisi',
        //     'tingkat_wakil.required' => 'Tingkat Wajib Diisi',
        //     'semester_wakil.required' => 'Semester Wajib Diisi',
        //     'prodi_wakil.required' => 'Prodi Wajib Diisi',
        //     'foto_wakil.required' => 'Foto Wajib Diisi',
        //     'file_wakil.required' => 'File Wajib Diisi',
        //     'email.required' => 'Email Wajib Diisi',
        //     'visi.required' => 'Visi Wajib Diisi',
        //     'misi.required' => 'Misi Wajib Diisi',
        //     'acara_id.required' => 'Acara Wajib Diisi',
        // ]);

        // $file_ketua = Request()->foto_ketua;
        // $fileName_ketua = Request()->nim_ketua .'.'. $file_ketua->extension();
        // $file_ketua->move(public_path('foto_ketua'),$fileName_ketua);

        // $file_wakil = Request()->foto_wakil;
        // $fileName_wakil = Request()->nim_wakil .'.'. $file_wakil->extension();
        // $file_wakil->move(public_path('foto_wakil'),$fileName_wakil);
      
		Capaslon::create([
            'nim_ketua' => Request()->nim_ketua,
            'nama_ketua' => Request()->nama_ketua,
            'tingkat_ketua' => Request()->tingkat_ketua,
            'semester_ketua' => Request()->semester_ketua,
            'prodi_ketua' => Request()->prodi_ketua,
            'foto_ketua' => Request()->foto_ketua,
            'file_ketua' => Request()->file_ketua,
            'nim_wakil' => Request()->nim_wakil,
            'nama_wakil' => Request()->nama_wakil,
            'tingkat_wakil' => Request()->tingkat_wakil,
            'semester_wakil' => Request()->semester_wakil,
            'prodi_wakil' => Request()->prodi_wakil,
            'foto_wakil' => Request()->foto_wakil,
            'file_wakil' => Request()->file_wakil,
            'email' => Request()->email,
            'visi' => Request()->visi,
            'misi' => Request()->misi,
            'acara_id' => Request()->acara_id,
        ]);
        return redirect('/pendaftaran')
                        ->with('success','Pendaftaran berhasil! Silahkan cek Email secara berkala untuk mendapatkan informasi lebih lanjut');
    }

    public function acara(Request $request){
        $acara = Acara::OrderBy('id_acara', 'desc')->get();
        return view('admin/capaslon/index', compact('acara'));
    }

    public function capaslon($id_acara)
    {
        $capaslon = Capaslon::where('acara_id', $id_acara)->OrderBy('nama_ketua', 'asc')->get();
        $jumlah = count($capaslon);
        return view('admin/capaslon/seleksi', compact('capaslon', 'jumlah'));
    }

    public function terimaPaslon(Request $request, $id)
    {
        Request()->validate([
            'no_urut' =>  ['required',Rule::unique('paslon')
            ->where('acara_id', request()->acara_id)],
        ],[
            'no_urut.required' => 'Harus Diisi',
            'no_urut.unique' => 'No Urut Sudah Ada!',
        ]);
       $data = Paslon::create([
            'no_urut' => Request()->no_urut,
            'acara_id' => Request()->acara_id,
            'capaslon_id' => Request()->capaslon_id,
            'nim_ketua' => Request()->nim_ketua,
            'nama_ketua' => Request()->nama_ketua,
            'tingkat_ketua' => Request()->tingkat_ketua,
            'semester_ketua' => Request()->semester_ketua,
            'prodi_ketua' => Request()->prodi_ketua,
            'foto_ketua' => Request()->foto_ketua,
            'file_ketua' => Request()->file_ketua,
            'nim_wakil' => Request()->nim_wakil,
            'nama_wakil' => Request()->nama_wakil,
            'tingkat_wakil' => Request()->tingkat_wakil,
            'semester_wakil' => Request()->semester_wakil,
            'prodi_wakil' => Request()->prodi_wakil,
            'foto_wakil' => Request()->foto_wakil,
            'file_wakil' => Request()->file_wakil,
            'email' => Request()->email,
            'visi' => Request()->visi,
            'misi' => Request()->misi,
        ]);

       $no_urut = $data->no_urut;
        $kirim = [
        'title' => 'Mail from admin e-voting,',
        'body' => 'Selamat! Paslon No Urut '.$no_urut,
        ];
        Mail::to($request->email)->send(new NotifPaslon($kirim));

        $this->capaslon->deleteData($id);
        return back()->with('pesan', 'Paslon diterima');
    }

    public function detail($id)
    {
            if(!$this->capaslon->detailData($id))
            {abort(404);
            }
        $data = ['capaslon' => $this->capaslon->detailData($id)
        ];
        return view('admin/capaslon/detail', $data);    
    }

    public function tolakPaslon(Request $request, $id)
    {
        $email = Capaslon::where('id',$id)->select("email")->first();
        $kirim = [
        'title' => 'Mail from admin e-voting',
        'body' => 'Maaf!'
        ];

        Mail::to($email->email)->send(new TolakPaslon($kirim));

        $this->capaslon->deleteData($id);
        return back()->with('pesan', 'Paslon ditolak');
    }
}
