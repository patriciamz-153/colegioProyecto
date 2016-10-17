<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = 'ambiente';

    protected $fillable = [
        'nombre',
        'tipo_id',
        'facultad_x_sede_id',
    ];

    public $timestamps = false;

    public function tipo_ambiente()
    {
        return $this->belongsTo(TipoAmbiente::class, 'tipo_id');
    }

    public function sede_facultad()
    {
        return $this->belongsTo(SedeFacultad::class, 'facultad_x_sede_id');
    }
}
