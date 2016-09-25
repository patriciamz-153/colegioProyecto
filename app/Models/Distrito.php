<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distrito';

    protected $fillable = [
        'nombre',
    ];

    protected $visible = [
        'id',
        'nombre',
    ];

    public $timestamps = false;

    public function sedes()
    {
        return $this->hasMany(Sede::class, 'distrito_id');
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id');
    }
}
