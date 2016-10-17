<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';

    protected $fillable = [
        'codigo',
        'escuela_id',
    ];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'alumno_id');
    }

}
