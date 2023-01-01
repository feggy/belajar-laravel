<?php

namespace App\Models;

use App\Models\ClassRoom;
use App\Models\Extracuricular;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'nis',
        'class_id'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracuricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
