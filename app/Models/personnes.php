<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personnes extends Model
{
    protected $fillable = [
        'prenom','nom','email','status','matricule','date_naissance',
        'lieu_naissance','nin','telephone',''
    ];
}
