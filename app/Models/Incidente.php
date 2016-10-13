<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $table = 'incidente';

    protected $fillable = [
        'direccion_ip',
    ];
}
