<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $table = [
        'nom_domaine',
        'code_domaine',
        'detail_domaine'
    ];
    public function agent(){
        return $this->hasMany(Agent::class);
    }
}
