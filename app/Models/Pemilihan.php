<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Pemilihan extends Model
{
    use HasFactory;

    public $table = 'pemilihan';

    protected $fillable = [
        'acara_id', 'voter_id'
    ];

    public function acara(){
        return $this->belongsTo(Acara::class);
    }

    public function deleteData(){
        DB::table('pemilihan')->delete();
    }
}
