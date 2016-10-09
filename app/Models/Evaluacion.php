<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';

    protected $fillable = [
        'fecha',
        'hora_inicio',
        'hora_fin',
        'peso',
        'grupo_id',
        'tipo_id',
    ];

    protected $dates = [
        'fecha',
    ];

    public $timestamps = false;

    public function tipo_evaluacion()
    {
        return $this->belongsTo(TipoEvaluacion::class, 'tipo_id');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    public function getHoraInicioAttribute()
    {
        return date('H:i', strtotime($this->attributes['hora_inicio']));
    }

    public function getHoraFinAttribute()
    {
        return date('H:i', strtotime($this->attributes['hora_fin']));
    }

    public function getTipoEvaluacionNombreAttribute()
    {
        return $this->tipo_evaluacion->nombre;
    }

    public function setFechaAttribute($value)
    {
        $this->attributes['fecha'] = Carbon::createFromFormat('d/m/Y', $value);
    }

}
