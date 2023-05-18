<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Capaslon extends Model
{
    use HasFactory;
    
    public $table = 'capaslon';
    public $timestamps = false;

    protected $guarded = ['id'];

    public function allData()
    {
        return DB::table('capaslon')->get();
    }

    public function detailData($id)
    {
       return DB::table('capaslon')->where('id', $id)->first();
    }

    public function addData ($data){
       DB::table('capaslon')->insert($data);
    }

    public function Acara()
    {
        return $this->belongsTo(Acara::class);
    }

     public function deleteData($id){
       DB::table('capaslon')->where('id', $id)->delete();
   }
}
