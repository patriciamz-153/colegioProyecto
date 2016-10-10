<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAsignatura extends Model
{
    protected $table = 'tipo_asignatura';

    public $timestamps = false;

    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class, 'tipo_id');
    }
}
