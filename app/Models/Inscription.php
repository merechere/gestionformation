<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateInscription',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(Inscription::class);
    }
    
}
