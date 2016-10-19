<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipo_usuario';

    protected $fillable = [
        'id',
        'nombre'
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(Usuario::class);
    }
}
