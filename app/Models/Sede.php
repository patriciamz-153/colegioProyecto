<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sede';

    protected $fillable = [
        'nombre',
        'direccion',
        'institucion_id',
        'distrito_id',
    ];

    protected $appends = [
        'distrito_nombre',
        'institucion_siglas'
    ];

    protected $hidden = [
        'distrito',
        'institucion'
    ];

    public $timestamps = false;

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'institucion_id');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'distrito_id');
    }

    public function getDistritoNombreAttribute()
    {
        return $this->distrito->nombre;
    }

    public function getDepartamentoIdAttribute()
    {
        return $this->distrito->provincia->departamento_id;
    }

    public function getProvinciaIdAttribute()
    {
        return $this->distrito->provincia_id;
    }

    public function getInstitucionSiglasAttribute()
    {
        return $this->institucion->siglas;
    }

    public function facultades()
    {
        return $this->belongsToMany(Facultad::class, 'facultad_x_sede', 'sede_id', 'facultad_id');
    }

    public function ambientes()
    {
        return $this->hasManyThrough(Ambiente::class, SedeFacultad::class, 'sede_id', 'facultad_x_sede_id');
    }

    public function scopeTodas($query)
    {
        $institucion_id = request()->input('institucion');
        if ($institucion_id)
            return $query->where('institucion_id', $institucion_id);
        return $query;
    }
}
