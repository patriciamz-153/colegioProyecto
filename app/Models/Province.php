<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provincia';

    protected $fillable = [
        'nombre',
    ];

    public $timestamps = false;

    public function districts()
    {
        return $this->hasMany(District::class, 'provincia_id');
    }

    public function departament()
    {
        return $this->belongsTo(Departament::class, 'departamento_id');
    }
}
