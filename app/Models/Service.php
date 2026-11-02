<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_service',
        'code_service',
        'detail_service',
    ];
    public function mutation() {
        return $this->hasMany(Mutation::class);
    }
}
