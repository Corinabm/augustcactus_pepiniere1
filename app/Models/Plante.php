<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plante extends Model
{
    protected $fillable = [
        'categorie_id',
        'nom_commun',
        'nom_scientifique',
        'description',
        'prix',
        'taille',
        'exposition',
        'arrosage',
        'stock',
        'est_actif'
    ];

    protected $casts = [
        'prix' => 'decimal:2',
        'stock' => 'integer',
        'est_actif' => 'boolean',
    ];
    
    /**
     * Relation : Une plante appartient à une catégorie
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class); 
    }

    /**
     * Relation : Une plante a plusieurs demandes
     */
    public function demandes()
    {
        return $this->hasMany(Demande::class); 
    }

    /**
     * Relation : Une plante a plusieurs photos (triées par ordre)
     */
    public function photos()
    {
        return $this->hasMany(PlantePhoto::class)->orderBy('ordre');
    }

    /**
     * Relation : Photo principale uniquement
     */
    public function photoPrincipale()
    {
        return $this->hasOne(PlantePhoto::class)
                    ->where('est_principale', true);
    }

    /**
     * Accessor : URL de la photo principale ou placeholder
     */
    public function getPhotoPrincipaleUrlAttribute()
    {
        return $this->photoPrincipale 
            ? $this->photoPrincipale->url 
            : asset('images/placeholder-plante.jpg');
    }
}
