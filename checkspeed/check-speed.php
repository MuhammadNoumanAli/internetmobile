<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require 'vendor/autoload.php';

$speedtest = new NextpostTech\Speedtest\Speedtest();
$speedtest->getServers();
$speedtest->getBestServer();
$speedtest->download();
$speedtest->upload();

$results = $speedtest->results();

print_r($results);