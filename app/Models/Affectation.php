<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $fillable = [
        'agent_id',
        'service_id',
        'date_affectation',
    ];
    public function agent() {
        return $this->belongsTo(Agent::class);
    }
    public function service() {
        return $this->belongsTo(Service::class);
    }
}
