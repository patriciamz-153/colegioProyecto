<?php

namespace App\Services;

class IpCountryClient {

    protected $key;

    protected $format;

    public function __construct($format = 'json')
    {
        $this->key = env('IP_INFO_DB_API_KEY');
        $this->format = $format;
    }

    public function getCountry($ip)
    {
        $http = new \GuzzleHttp\Client;

        $response = $http->get($this->getCountryWS($ip));

        return json_decode((string) $response->getBody(), true);
    }

    private function getCountryWS($ip)
    {
        return 'http://api.ipinfodb.com/v3/ip-country/?key=' . $this->key.
               '&ip=' . $ip .
               '&format='. $this->format;
    }
}