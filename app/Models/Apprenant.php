<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'matriculeApprenenat',
        'nomApprenenat',
        'prenomApprenenat',
        'adresseApprenenat',
        'emailApprenenat',
        'PasswordApprenenat',
        'telephoneApprenenat',  

    ];  
   
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function inscription(){
        return $this->hasMany(inscription::class);
    }
    public function formation(){
        return $this->ManytoMany(formation::class);
    }
}


