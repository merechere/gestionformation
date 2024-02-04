<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'evaluation_id',
        'note',
        'commentaire',
        

    ];  
   
    public function evaluation(){
        return $this->belongsTo(Evaluation::class);
    }
    
}
