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

    public function branches()
    {
        return $this->hasMany(Branch::class, 'institucion_id');
    }

    public function faculties()
    {
        return $this->hasMany(Faculty::class, 'institucion_id');
    }
}
