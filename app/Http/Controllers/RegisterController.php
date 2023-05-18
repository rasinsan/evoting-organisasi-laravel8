<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\VerifyVoter;

class RegisterController extends Controller
{	
	public function __construct(){
        $this->voter = new Voter();
    }
    public function register()
    {
        $voter = Voter::all();
        return view('voter.register', compact('voter'));
    }

    public function simpan_register(Request $request)
    {   
        Request()->validate([
            'nim' => 'required|unique:voters,nim|min:8|max:8',
            'email' => 'required|unique:voters,email',
        ],[
            'nim.unique' => 'NIM Anda Sudah Terdaftar',
            'nim.min' => 'NIM harus 8 Digit',
            'nim.max' => 'NIM harus 8 Digit',
            'email.unique' => 'Email Anda Sudah Terdaftar',
        ]);

        $voter = Voter::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'prodi' => $request->prodi,
            'tahun' => $request->tahun,
            'email' => $request->email,
        ]);

        
        $token = $voter->id.hash('sha256', \Str::random(120));
        $verifyURL = route('verify',['token'=>$token,'service'=>'Email_Verification']);

        VerifyVoter::create([
            'voter_id' => $voter->id,
            'token' => $token,
        ]);

        $message = 'Dear <b>'.$request->nama.'<b>';
        $message = 'Terima Kasih Telah Daftar Aplikasi E-Voting';

        $mail_data = [
            'recipient' => $request->email,
            'fromEmail' => $request->email,
            'fromName' => $request->nama,
            'subject' => 'Email Verification',
            'body' => $message,
            'actionLink' => $verifyURL,
        ];

        \Mail::send('email-verifikasi', $mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])->from($mail_data['fromEmail'], $mail_data['fromName'])
            ->subject($mail_data['subject']);
        });

        return redirect()->back()->with('pesan','Verifikasi Akun Kamu, Cek Email');
    }

    public function verify(Request $request){
        $token = $request->token;
        $verifyvoter = VerifyVoter::where('token', $token)->first();
        if (isset($verifyvoter)) {
            $voter = $verifyvoter->voter;

            if(!$voter->email_verified){
                $voter->email_verified = 1;
                $voter->save();

                return redirect()->route('masuk')->with('pesan','Email Berhasil Diverifikasi, Silahkan Login')->with('verifyvoter',$voter->email);
            }else{
                return redirect()->route('masuk')->with('pesan','Email Sudah Diverifikasi, Silahkan Login')->with('verifyvoter',$voter->email);
            }
        }
    }
}