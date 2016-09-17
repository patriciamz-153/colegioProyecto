<?php

namespace FisiLog\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['name', 'lastname', 'email', 'password', 'phone', 'photo_url', 'user_type_id'];

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
}
