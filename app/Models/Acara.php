<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Acara extends Model

{
	use HasFactory;
    
   public $table = 'acara';

   protected $fillable = [
    	'nama_acara', 'pelaksanaan', 'info_acara'
   ];
   protected $primaryKey = 'id_acara';

   public function allData(){
       return DB::table('acara')->get();
   }

   public function detailData($id_acara)
   {
       return DB::table('acara')->where('id_acara', $id_acara)->first();
   }

   public function addData ($data){
       DB::table('acara')->insert($data);
   }

   public function editData ($id_acara, $data){
       DB::table('acara')->where('id_acara', $id_acara)->update($data);
   }

   public function deleteData($id_acara){
       DB::table('acara')->where('id_acara', $id_acara)->delete();
   }

   public function capaslon(){
        return $this->hasMany(Capaslon::class);
    }

   public function Paslon(){
        return $this->hasMany('App\Models\Paslon');
   }
}
