<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Agent extends Model
{
    use HasFactory, Notifiable;
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
    public function fonctions()
    {
        return $this->belongsToMany(Fonction::class)->withPivot('date_obtention');
    }
    public function mutation()
    {
        return $this->hasMany(Mutation::class);
    }
    public function affectation(){
        return $this->hasOne(Affectation::class);
    }
    public function obtention_grades(){
        return $this->hasMany(ObtentionGrade::class);
    }
    public function obtention_fonctions(){
        return $this->hasMany(FonctionObtenue::class);
    }
}
