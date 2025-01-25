<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauEtude extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom_niveau_etude',
        'code_niveau_etude',
        'detail_niveau_etude'
    ];
    public function agent(){
        return $this->hasMany(Agent::class);
    }
}
