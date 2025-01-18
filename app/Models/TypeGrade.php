<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeGrade extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom_type_grade', 
        'code_type_grade'
    ];
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
