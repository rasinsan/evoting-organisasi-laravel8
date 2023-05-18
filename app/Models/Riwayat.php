<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Riwayat extends Model
{
   public $table = 'riwayat';
   protected $guarded = ['id'];

  public $timestamps = false;

   public function addData($data)
   {
   		DB::table('riwayat')->insert($data);
   }

   public function Hasil()
   {
        return $this->belongsTo(Hasil::class);
   }

   public function deleteAll(){
        DB::table('riwayat')->delete();
   }

   public function Acara()
    {
        return $this->belongsTo(Acara::class);
    }

  public function detailData($acara_id)
    {
       return DB::table('riwayat')->where('acara_id', $acara_id)->first();
    }
}
