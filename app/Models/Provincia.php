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

    public function districts()
    {
        return $this->hasMany(District::class, 'provincia_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'departamento_id');
    }
}
