<?php

namespace App\Http\Middleware;

use Closure;
use PragmaRX\Firewall\Filters\Whitelist;
use Firewall;
use App\Models\Incidente;
use App\Models\Pais;
use App\Services\IpCountryClient;

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
            $client= new IpCountryClient;

            $response = $client->getCountry('74.125.45.100');

            $pais = Pais::firstOrCreate([
                'nombre' => $response['countryName'],
                'code' => $response['countryCode'],
            ]);

            Incidente::create([
                'direccion_ip' => $request->ip(),
                'pais_id' => $pais->id,
            ]);

            return $filterResponse;
        }
        return $next($request);
    }
}
