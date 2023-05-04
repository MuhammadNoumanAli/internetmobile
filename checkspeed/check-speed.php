<?php
require 'vendor/autoload.php';

$speedtest = new NextpostTech\Speedtest\Speedtest();
$speedtest->getServers();
$speedtest->getBestServer();
$speedtest->download();
$speedtest->upload();

$results = $speedtest->results();

print_r($results);