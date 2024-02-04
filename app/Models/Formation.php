<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titre',
        'description',
          

    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function salle(){
        return $this->hasMany(salle::class);
    }
}


