<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomSecretaire',
        'prenomSecretaire',
        'telephoneSecretaire',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(Secretaire::class);
    }
}