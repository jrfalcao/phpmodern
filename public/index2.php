<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 15/11/2015
 * Time: 23:40
 */
require_once __DIR__."/../vendor/autoload.php";
$curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
$geocoder = new \Geocoder\Provider\GoogleMaps($curl);

$store = $geocoder->geocode('420 9th Avenue, New York, NY 10001 USA')->first();

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();
echo $latitude, ':', $longitude;