<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable = [
        'nom_direction',
        'code_direction',
    ];
    public function mutation(){
        return $this->hasMany(Mutation::class);
    }
}

