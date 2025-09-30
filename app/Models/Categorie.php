<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom'
    ];
    
    public function plantes()
    {
        return $this->hasMany(Plante::class, 'categorie_id');
    }
}
