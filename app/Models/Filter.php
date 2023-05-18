<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class Filter extends Model
{
    use HasFactory;

    public $table = 'filter';

    public $timestamps = false;

    protected $fillable = [
        'voter_id','nim','nama','prodi','tahun'
    ];    

    public function Voter()
    {
        return $this->belongsTo(Voter::class);
    }

    public function deleteData($id){
        DB::table('filter')->where('id', $id)->delete();
    }

    public function deleteAll(){
        DB::table('filter')->delete();
    }
}
