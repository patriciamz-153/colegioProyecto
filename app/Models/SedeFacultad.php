<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SedeFacultad extends Model
{
    protected $table = 'facultad_x_sede';

    public $timestamps = false;

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'facultad_id');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id');
    }

    public function ambientes()
    {
        return $this->hasMany(Ambiente::class, 'facultad_x_sede_id');
    }

    public function scopeFindBySedeFacultad($query, $sede_id, $facultad_id)
    {
        return $query->where('sede_id', $sede_id)->where('facultad_id', $facultad_id)->first();
    }
}
