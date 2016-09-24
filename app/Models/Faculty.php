<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'facultad';

    protected $fillable = [
        'nombre',
        'codigo',
        'institution_id',
    ];

    public $timestamps = false;

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function schools()
    {
        return $this->hasMany(School::class,'facultad_id');
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function academicPeriods()
    {
        return $this->hasMany(AcademicPeriod::class);
    }
}
