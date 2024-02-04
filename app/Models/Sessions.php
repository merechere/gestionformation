<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'titre',
        'datedebut',
        'datefin',
       
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(Ressource::class);
    }
    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
    
}
