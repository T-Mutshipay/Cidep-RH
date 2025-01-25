<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEtat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_etat',
        'code_etat',
        'detail_etat'
    ];
    public function agent(){
        return $this->hasMany(Agent::class);
    }
}
