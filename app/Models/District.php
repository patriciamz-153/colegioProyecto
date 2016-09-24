<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'distrito';

    protected $fillable = [
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
