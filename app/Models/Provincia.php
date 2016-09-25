<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincia';

    protected $fillable = [
        'nombre',
    ];

    protected $visible = [
        'id',
        'nombre',
    ];

    public $timestamps = false;

    public function distritos()
    {
        return $this->hasMany(Distrito::class, 'provincia_id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }
}
