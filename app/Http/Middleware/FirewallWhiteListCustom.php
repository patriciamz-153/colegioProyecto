<?php

namespace App\Http\Middleware;

use Closure;
use PragmaRX\Firewall\Filters\Whitelist;
use Firewall;

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
dd('not allowed');
            return $filterResponse;
        }
        return $next($request);
    }
}
