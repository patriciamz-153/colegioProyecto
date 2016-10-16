<?php

namespace App\Http\Middleware;

use Closure;
use PragmaRX\Firewall\Filters\Whitelist;
use Firewall;
use App\Models\Incidente;
use App\Services\IpLocationClient;

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
            $incidente = IpLocationClient::createIncidente($request->ip());
            if (!is_null($incidente))
                Incidente::create($incidente);
            else {
                $incidente = new Incidente;
                $incidente->direccion_ip = $request->ip();
                $incidente->save();
            }


            return $filterResponse;
        }

        return $next($request);
    }
}
