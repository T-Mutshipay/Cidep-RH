<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObtentionGrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'agent_id',
        'grade_id',
        'date_obtention',
    ];
    public function agent() {
        return $this->belongsTo(Agent::class);
    }
    public function grade() {
        return $this->belongsTo(Grade::class);
    }
    
}
