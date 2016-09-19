<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institucion';

    protected $fillable = [
        'id',
        'nombre',
        'siglas',
    ];

    public $timestamps = false;
}
