<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'nomPrenom', 
        'Tel',
        'Email', 
        'Adresse',
        'GroupeSanguin', 
        'Poids'
    ];
}
