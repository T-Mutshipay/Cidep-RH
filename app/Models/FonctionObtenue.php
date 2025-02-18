<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FonctionObtenue extends Model
{
    use HasFactory;
    protected $fillable = [
        'agent_id',
        'fonction_id',
        'date_obtention',
    ];
    public function agent() {
        return $this->belongsTo(Agent::class);
    }
    public function fonction() {
        return $this->belongsTo(Fonction::class);
    }
}
