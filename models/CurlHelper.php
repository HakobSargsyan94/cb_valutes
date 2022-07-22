<?php

namespace app\models;


class CurlHelper
{
    public static function getCurlSimpleData ($url) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __ddg1_=R48TJGKE9BHDqvSk2zN7'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

}