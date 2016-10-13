<?php

namespace App\Http\Middleware;

use Closure;
use PragmaRX\Firewall\Filters\Whitelist;
use Firewall;
use App\Models\Incidente;

class FirewallWhiteListCustom
{
    protected $whitelist;

    public function __construct(Whitelist $whitelist) {
        $this->whitelist = $whitelist;
    }

    /**
     * Filter Request through whitelist.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $filterResponse = $this->whitelist->filter();

        if ($filterResponse != null) {
            Incidente::create([
                'direccion_ip' => $request->ip(),
            ]);
            return $filterResponse;
        }
        return $next($request);
    }
}
