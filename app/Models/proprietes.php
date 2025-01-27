<?php

// app/Models/Proprietes.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietes extends Model
{
    protected $fillable = [
        'titre', 'type','pieces', 'salon', 'description',
        'prix', 'cycle', 'region', 'departement',
        'ville', 'adresse', 'disponible','images','personne_id'
    ];
    protected $casts = [
        'images' => 'array', // Convertir automatiquement en tableau PHP
    ];
}
