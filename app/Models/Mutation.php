<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
    use HasFactory;
    protected $fillable = [
        'agent_id',
        'direction_id',
        'date_mutation',
    ];
    public function agent() {
        return $this->belongsTo(Agent::class);
    }
    public function direction() {
        return $this->belongsTo(Direction::class);
    }
}
