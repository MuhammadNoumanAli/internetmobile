<?php

$endpoint = 'https://www.speedtest.net/speedtest-config.php';
$curl = curl_init();
$params = [
    "verify"  => true,
    "timeout" => 10,
    "curl"    => [
        CURLOPT_USERAGENT       => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36",
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_2_0, // Make http client work with HTTP 2/0
        CURLOPT_SSLVERSION      => 1,
        CURLOPT_SSL_VERIFYPEER  => false
    ], 
    "headers" => [
        "accept-language" => "en-US"
    ],
    "debug" => true
];
$url = $endpoint . '?' . http_build_query($params);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);
$data = curl_exec($curl);
curl_close($curl);

$data_contents = $data->getBody()->getContents();


$xml = simplexml_load_string($data_contents);
echo "<pre>";
print_r($xml);