<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'sujet',
        'prenom_emetteur',
        'nom_emetteur',
        'email_emetteur',
        'tel_emetteur',
        'contenu_message',
        'bien_conserner',
    ];
    

    /**
     * Relation avec la classe Propriete (clé étrangère bien_conserner).
     */
    public function propriete()
    {
        return $this->belongsTo(Proprietes::class, 'bien_conserner');
    }
}
