<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client();
$response = $client->get('https://www.speedtest.net/speedtest-config.php');
$data_body = $response->getBody();
$data_contents = $response->getBody()->getContents();


$xml = simplexml_load_string($data_contents);
echo "<pre>";
print_r($data_body);
echo "<br>";
echo "<pre>";
print_r($data_contents);

echo "<br>";
echo "<pre>";
print_r($xml);
die;


