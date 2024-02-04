<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    
    use HasFactory;
    
    protected $fillable = [
        'numero',
        'capacite',
       
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(Salle::class);
    }
    public function formation(){
        return $this->ManyToMany(formation::class);
    }
    
}

