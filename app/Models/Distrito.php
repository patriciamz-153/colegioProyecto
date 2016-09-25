<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distrito';

    protected $fillable = [
        'nombre',
    ];

    protected $visible = [
        'id',
        'nombre',
    ];

    public $timestamps = false;

    public function branches()
    {
        return $this->hasMany(Branch::class, 'distrito_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provincia_id');
    }
}
