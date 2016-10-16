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
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->getCountryWS($ip),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response, true);
    }

    private function getCountryWS($ip)
    {
        return 'http://api.ipinfodb.com/v3/ip-country/?key=' . $this->key.
               '&ip=' . $ip .
               '&format='. $this->format;
    }
}