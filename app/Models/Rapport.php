<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'contenu',
        'dateCreation',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(Rapport::class);
    }
    public function Formateur(){
        return $this->hasMany(Formateur::class);
    }
}
