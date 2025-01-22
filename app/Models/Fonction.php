<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    protected $fillable = [
        'nom_fonction',
        'code_fonction',
        'detail_fonction'
    ];
    public function agent(){
        return $this->belongsToMany(Agent::class)->withPivot('date_obtention');
    }
    public function obtention_fonctions(){
        return $this->hasMany(FonctionObtenue::class);
    }
}
