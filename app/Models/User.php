<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'usuario';

    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'email',
        'password',
        'tipo_usuario_id',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $dates = ['deleted_at'];

    public $timestamps = false;

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
