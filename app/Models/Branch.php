<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'sede';

    protected $fillable = [
        'nombre',
        'direccion',
        'institucion_id',
        'distrito_id',
    ];

    public $timestamps = false;

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institucion_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'distrito_id');
    }

    public function getDistritoNombreAttribute()
    {
        return $this->district->nombre;
    }
}
