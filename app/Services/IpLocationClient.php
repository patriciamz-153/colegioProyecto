<?php

namespace App\Services;

class IpLocationClient {

    public static function createIncidente($ip)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => self::getCountryWS($ip),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($response, true);

        $response = [
            'direccion_ip' => $data['query'],
            'pais_nombre' => $data['country'],
            'pais_code' => $data['countryCode'],
            'region_nombre' => $data['regionName'],
            'region_code' => $data['regionCode'],
            'ciudad' => $data['city'],
            'isp' => $data['isp'],
            'org' => $data['org'],
            'as' => $data['as'],
        ];

        return $response;
    }

    private static function getCountryWS($ip)
    {
        return 'http://ip-api.com/json/' . $ip;
    }
}
