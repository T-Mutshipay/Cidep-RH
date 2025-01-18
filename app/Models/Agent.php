<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'matricule',
        'nom',
        'postnom',
        'prenom',
        'date_naissance',
        'adresse',
        'telephone',
        'email',
        'date_engagement',
        'domaine_id',
        'niveau_etude_id',
        'type_etat_id',
    ];
    
    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }
    public function niveau()
    {
        return $this->belongsTo(NiveauEtude::class);
    }
    public function etat()
    {
        return $this->belongsTo(TypeEtat::class);
    }
}
