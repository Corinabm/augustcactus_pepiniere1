<?php

namespace App\Models;

use App\Models\Plante;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = [
        'plante_id',
        'nom_plante',
        'prix_unitaire',
        'nom',
        'prenom',
        'telephone',
        'email',
        'horaires_indiques',
        'date_recuperation',
        'mode_recuperation',
        'message',
        'date_demande',
        'quantite',
        'statut',
        'montant_total',
        'email_envoye',
        'date_envoi_email',
        'statut_email'
    ];
    
    protected $casts = [
        'prix_unitaire' => 'decimal:2',
        'montant_total' => 'decimal:2',
        'date_recuperation' => 'date',
        'date_demande' => 'date',
        'date_envoi_email' => 'datetime',
        'email_envoye' => 'boolean',
        'quantite' => 'integer'
    ];
    
    public function plante()
    {
        return $this->belongsTo(Plante::class, 'plante_id');
    }
}
