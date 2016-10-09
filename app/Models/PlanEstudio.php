<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    protected $table = 'plan_de_estudio';

    protected $fillable = ['escuela_id', 'nombre', 'anio_de_publicacion', 'esta_vigente'];

    public $timestamps = false;

    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'escuela_id');
    }

    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class,'plan_id');
    }
}
