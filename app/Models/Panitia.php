<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Panitia extends Authenticatable
{
    use HasFactory;
    public $table = 'panitia';

   protected $fillable = [
    	'nama', 'username', 'password', 'acara_id'
   ];
   public function allData(){
       return DB::table('panitia')->get();
   }

   public function detailData($id)
   {
       return DB::table('panitia')->where('id', $id)->first();
   }

   public function addData ($data){
       DB::table('panitia')->insert($data);
   }

   public function editData ($id, $data){
       DB::table('panitia')->where('id', $id)->update($data);
   }

   public function deleteData($id){
       DB::table('panitia')->where('id', $id)->delete();
   }

   public function capaslon(){
        return $this->hasMany(Capaslon::class);
    }

   public function paslon(){
        return $this->hasMany(Paslon::class);
   }
}
