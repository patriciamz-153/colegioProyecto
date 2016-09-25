<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';

    protected $fillable = [
        'nombre',
    ];

    public $timestamps = false;

    public function provinces()
    {
        return $this->hasMany(Province::class, 'departamento_id');
    }
}
