<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Hasil extends Model
{
   public $table = 'hasil';
   protected $guarded = ['id'];

   public function addData($data)
   {
   		DB::table('hasil')->insert($data);
   }

   public function Paslon()
   {
        return $this->belongsTo(Paslon::class);
   }

   public function deleteAll(){
        DB::table('hasil')->delete();
   }
}
