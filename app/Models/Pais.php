<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';

    protected $fillable = [
        'nombre',
        'code',
    ];

    public $timestamps = false;

    public function incidentes()
    {
        return $this->hasMany(Incidente::class, 'pais_id');
    }
}
