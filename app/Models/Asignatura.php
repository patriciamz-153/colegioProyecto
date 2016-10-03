<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignatura';

    public $timestamps = false;

    public function asignaturas_aperturadas()
    {
        return $this->hasMany(AsignaturaAperturada::class, 'asignatura_id');
    }
}
