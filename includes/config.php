<?php

session_start();
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$active_page = $components[1];



$contact_number = '(888) 537-3212';
$contact_email = 'info@getbestinternetspeed.com';

