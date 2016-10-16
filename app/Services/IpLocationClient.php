<?php

namespace App\Services;

class IpLocationClient {

    public static function createIncidente($ip)
    {
        $url = self::getUrl($ip);

        $data = self::getData($url);

        if ($data['status'] != 'success')
            return null;

        $response = [
            'direccion_ip' => $data['query'],
            'pais_nombre' => $data['country'],
            'pais_code' => $data['countryCode'],
            'region_nombre' => $data['regionName'],
            'region_code' => $data['region'],
            'ciudad' => $data['city'],
            'isp' => $data['isp'],
            'org' => $data['org'],
            'as' => $data['as'],
        ];

        return $response;
    }

    private static function getData($url)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => self::getUrl($url),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response, true);
    }

    private static function getUrl($ip)
    {
        return 'http://ip-api.com/json/' . $ip;
    }
}
