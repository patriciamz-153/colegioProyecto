<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAmbiente extends Model
{
    protected $table = 'tipo_ambiente';

    public $timestamps = false;

    public function ambientes()
    {
        return $this->hasMany(Ambiente::class, 'tipo_id');
    }
}
