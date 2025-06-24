<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = [
        'NomPrenom', 
        'Tel',
        'Email', 
        'Adresse',
        'Specialite', 
        'NumeroOrdre'
    ];
}
