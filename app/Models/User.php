<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'usuario_id';

    protected $table = 'usuario';

    protected $attributes = [
        'usuario_id',
        'nombres',
        'apellidos',
        'email',
        'password',
        'tipo_usuario_id',
        'estado_id',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function professor()
    {
        return $this->hasOne(Professor::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function user_type()
    {
        return $this->belongsTo(UserType::class);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->nombres) . " " . ucfirst($this->apellidos);
    }
}
