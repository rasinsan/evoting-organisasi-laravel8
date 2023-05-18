<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\CapaslonController;
use App\Http\Controllers\kelolaVoterController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\kelolaPanitiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Landing Page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/quickcount', [HasilController::class, 'quickcount']);

//email
Route::get('kirim-email','App\Http\Controllers\MailController@index');

//Pendaftaran Paslon
Route::get('/pendaftaran', [CapaslonController::class, 'index']);
Route::post('/proses_daftar', [CapaslonController::class, 'store']);

//Register
Route::get('register', 'App\Http\Controllers\RegisterController@register')->name('register');
Route::post('simpan_register', 'App\Http\Controllers\RegisterController@simpan_register')->name('simpan_register');
Route::get('verify', 'App\Http\Controllers\RegisterController@verify')->name('verify');

//Login
Route::get('login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::get('masuk', 'App\Http\Controllers\LoginController@voter')->name('masuk');
Route::post('proses_login', 'App\Http\Controllers\LoginController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
Route::get('keluar', 'App\Http\Controllers\LoginController@keluar')->name('keluar');

//admin
Route::group(['middleware' => ['auth:user','revalidate']], function () {
    //dashboard
    Route::get('/admin', [AdminController::class, 'index']);
    //kelola acara
	Route::get('/admin/acara', [AcaraController::class, 'index']);
	Route::get('/admin/acara/detail/{id_acara}', [AcaraController::class, 'detail'])->name('detail_acara');
	Route::get('/admin/acara/tambah', [AcaraController::class, 'add']);
	Route::get('/admin/acara/edit/{id_acara}', [AcaraController::class, 'edit']);
	Route::get('/admin/acara/hapus/{id_acara}', [AcaraController::class, 'delete']);
	Route::post('/admin/acara/update/{id_acara}', [AcaraController::class, 'update']);
	Route::post('/admin/acara/insert', [AcaraController::class, 'insert']);
	//pemilihan
	Route::get('/admin/pemilihan', [PemilihanController::class, 'index']);
	Route::post('/admin/pemilihan/mulaipemilihan', [PemilihanController::class, 'mulaiPemilihan']);
	Route::get('/admin/pemilihan/selesaipemilihan', [PemilihanController::class, 'selesaiPemilihan']);
	Route::get('/getpaslon/{id_paslon}', [PemilihanController::class, 'dataPaslon'])->name('getPaslon');
	Route::get('/getAcara/{id_acara}', [PemilihanController::class, 'inputAcaraID']);
	Route::get('/admin/pemilihan/filter', [FilterController::class, 'voter']);
	Route::post('/admin/pemilihan/filter/pilih', [FilterController::class, 'filter']);
	Route::get('/admin/filter/hapus/{id}', [PemilihanController::class, 'hapus']);
	//kelola paslon
	Route::get('/admin/paslon', [PaslonController::class,'index']);
	Route::post('/admin/paslon/edit/{id_paslon}', [PaslonController::class, 'edit']);	
	Route::get('/admin/paslon/hapus/{id_paslon}', [PaslonController::class, 'hapus']);	
	//seleksi paslon
	Route::get('/admin/capaslon', [CapaslonController::class, 'acara']);
	Route::get('/admin/capaslon/seleksi/{id_acara}', [CapaslonController::class, 'capaslon'])->name('seleksi');
	Route::get('/admin/capaslon/detail/{id}', [CapaslonController::class, 'detail']);
	Route::post('/admin/capaslon/seleksi/terima/{id}', [CapaslonController::class, 'terimaPaslon']);
	Route::get('/admin/capaslon/seleksi/tolak/{id}', [CapaslonController::class, 'tolakPaslon']);
	//kelola voter
	Route::get('/admin/voter', [kelolaVoterController::class, 'index']);
	Route::get('/admin/voter/hapus/{id}', [kelolaVoterController::class, 'hapus']);
	//hasil vote
	Route::get('/admin/hasil', [HasilController::class, 'index']);
	Route::get('/admin/hasil/riwayat', [HasilController::class, 'riwayat']);
	Route::get('/admin/hasil/tampil/{acara_id}', [HasilController::class, 'tampil'])->name('tampil');
	//kelola panitia
	Route::get('/admin/panitia', [kelolaPanitiaController::class, 'index']);
	Route::get('/admin/panitia/detail/{id}', [kelolaPanitiaController::class, 'detail']);
	Route::get('/admin/panitia/tambah', [kelolaPanitiaController::class, 'add']);
	Route::get('/admin/panitia/edit/{id}', [kelolaPanitiaController::class, 'edit']);
	Route::get('/admin/panitia/hapus/{id}', [kelolaPanitiaController::class, 'delete']);
	Route::post('/admin/panitia/update/{id}', [kelolaPanitiaController::class, 'update']);
	Route::post('/admin/panitia/insert', [kelolaPanitiaController::class, 'insert']);
});

//panitia
Route::group(['middleware' => ['auth:panitia','revalidate']], function () {
	//dashboard
    Route::get('/panitia', [PanitiaController::class, 'index']);
    //acara
    Route::get('/panitia/acara', [PanitiaController::class, 'acara']);
    Route::get('/panitia/hasil', [HasilController::class, 'panitia']);
    //riwayat
    Route::get('/panitia/hasil/riwayat', [HasilController::class, 'riwayat_panitia'])->name('riwayat');
	Route::get('/panitia/hasil/tampil/{acara_id}', [HasilController::class, 'tampil_panitia'])->name('tampil_panitia');
});

//voter
Route::group(['middleware' => ['auth:voter','revalidate','is_voter_verify_email']], function () {
	//dashboard
	Route::get('/voter', [VoterController::class, 'index']); 
	Route::post('/vote', [VoterController::class, 'hasil'])->name('vote');      
});





