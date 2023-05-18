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

class PaslonController extends Controller
{
    public function __construct()
    {
        $this->paslon = new Paslon;
    }

    public function index()
    {
        $paslon = paslon::all();
    	return view('admin.paslon.index', compact('paslon'));
    }

    public function edit(Request $request, $id_paslon)
    {
        Request()->validate([
            'no_urut' =>  ['required',Rule::unique('paslon')
            ->where('acara_id', request()->acara_id)],
        ],[
            'no_urut.required' => 'Harus Diisi',
            'no_urut.unique' => 'No Urut Sudah Ada!',
        ]);
        $data = [
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
        ];
        $this->paslon->editData($id_paslon,$data);

        $kirim = [
        'title' => 'Mail from admin e-voting,',
        'body' => 'Updated! Data Nomor Urut DiUbah. Paslon Dengan No Urut : '.$request->no_urut.', '.$request->nama_ketua.' & '.$request->nama_wakil.' 
            Mohon Maaf Atas Kesalahan Yang Terjadi',
        ];
        Mail::to($request->email)->send(new NotifPaslon($kirim));
        return redirect('/admin/paslon')->with('pesan', 'Data paslon berhasil diubah');
    }

    public function hapus($id_paslon)
    {
        
        $this->paslon->deleteData($id_paslon);
        return redirect('/admin/paslon')->with('pesan', 'Data paslon berhasil dihapus');
    }
}