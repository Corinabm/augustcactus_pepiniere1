<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Annonce extends Model
{
    protected $table = 'annonce';

    protected $fillable = [
        'titre',
        'message',
        'date_porte_ouverte',
        'heure_debut',
        'heure_fin',
        'est_active',
    ];

    protected $casts = [
        'date_porte_ouverte' => 'date',
        'heure_debut' => 'datetime:H:i',
        'heure_fin' => 'datetime:H:i',
        'est_active' => 'boolean',
    ];

    public static function getProchaineAnnonce()
    {
        return self::where('est_active', true)
            ->where('date_porte_ouverte', '>=', Carbon::today())
            ->orderBy('date_porte_ouverte', 'asc')
            ->first();
    }

    public function getMessageCompletAttribute()
    {
        $date = $this->date_porte_ouverte->locale('fr')->isoFormat('dddd D MMMM YYYY');
        $horaires = '';

        if ($this->heure_debut && $this->heure_fin) {
            $horaires = ' de ' . Carbon::parse($this->heure_debut)->format('H\hi') .
                       ' à ' . Carbon::parse($this->heure_fin)->format('H\hi');
        }

        return $this->message . ' : ' . ucfirst($date) . $horaires;
    }
}
