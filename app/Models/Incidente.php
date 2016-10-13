<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $table = 'indicente';

    protected $fillable = [
        'ip',
    ];
}
