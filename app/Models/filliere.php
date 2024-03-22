<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filliere extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'code_numerique',
        'acronyme',
        'niveau',
        'numero_identifiant',
    ];
    
}
