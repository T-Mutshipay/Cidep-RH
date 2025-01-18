<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
       'nom_grade',
       'code_grade',
       'type_grade_id'
    ];
    public function type_grade()
    {
        return $this->belongsTo(TypeGrade::class);
    }
}

