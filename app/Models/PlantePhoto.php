<?php

namespace App\Models;

use App\Models\Plante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PlantePhoto extends Model
{
    /**
     * Table associée
     */
    protected $table = 'plante_photos';

    /**
     * Champs mass-assignables
     */
    protected $fillable = [
        'plante_id',
        'photo_url',
        'est_principale',
        'ordre'
    ];

    /**
     * Cast des attributs
     */
    protected $casts = [
        'est_principale' => 'boolean',
        'ordre' => 'integer', // ← Ajouté
    ];

    /**
     * Relation inverse : Une photo appartient à une plante
     */
    public function plante()
    {
        return $this->belongsTo(Plante::class);
    }

    /**
     * Observers
     */
    protected static function booted()
    {
        // S'assurer qu'une seule photo est principale par plante
        static::saving(function ($photo) {
            if ($photo->est_principale) {
                static::where('plante_id', $photo->plante_id)
                     ->where('id', '!=', $photo->id)
                     ->update(['est_principale' => false]);
            }
        });

        // Supprimer le fichier physique lors de la suppression
        static::deleting(function ($photo) {
            if ($photo->photo_url && Storage::disk('public')->exists($photo->photo_url)) {
                Storage::disk('public')->delete($photo->photo_url);
            }
        });
    }

    /**
     * Accessor : URL complète de l'image
     * Gère les anciens chemins (juste le nom du fichier) et les nouveaux (plantes/photos/...)
     */
    public function getUrlAttribute()
    {
        if (!$this->photo_url) {
            return null;
        }

        // Si le chemin contient déjà "plantes/", utiliser tel quel
        if (str_starts_with($this->photo_url, 'plantes/')) {
            return Storage::disk('public')->url($this->photo_url);
        }

        // Sinon, c'est une ancienne image dans plantes/ directement
        return Storage::disk('public')->url('plantes/' . $this->photo_url);
    }
}
