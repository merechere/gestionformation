<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'note',
        'commentaire',
        

    ];  
   
    public function user(){
        return $this->belongsTo(Evaluation::class);
    }
    public function session(){
        return $this->hasMany(Sessions::class);
    }
    
}
