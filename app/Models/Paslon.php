<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Paslon extends Model
{
    use HasFactory;

    public $table = 'paslon';

    public $timestamps = false;

    protected $guarded = ['id_paslon'];

    protected $primaryKey = 'id_paslon';

    public function editData ($id_paslon, $data){
       DB::table('paslon')->where('id_paslon', $id_paslon)->update($data);
   	}

    public function Capaslon()
    {
        return $this->belongsTo(Capaslon::class);
    }
    
    public function Acara()
    {
        return $this->belongsTo('App\Models\Acara');
    }

    public function deleteData($id_paslon){
        DB::table('paslon')->where('id_paslon', $id_paslon)->delete();
    }
}
