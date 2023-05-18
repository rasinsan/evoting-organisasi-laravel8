<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyVoter extends Model
{
    use HasFactory;

    public $table = "verify_voters";

    protected $fillable = [
    	'voter_id',
    	'token',
    ];

    public function voter(){
    	return $this->belongsTo(Voter::class);
    }
}
