<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'tipo_usuario';

    public $timestamps = false;

    protected $fillable = ['id', 'nombre'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
