<?php

namespace App\Models;

use PragmaRX\Firewall\Vendor\Laravel\Models\Firewall as BaseFirewall;
use Illuminate\Database\Eloquent\Model;

class Firewall extends BaseFirewall
{
    protected $fillable = [
        'usuario_id',
        'ip_address',
        'whitelisted',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function scopeListaBlanca($query)
    {
        $query->where('whitelisted', true);
    }

    public function getNombreUsuarioAttribute()
    {
        return $this->usuario->nombre_completo;
    }

}
