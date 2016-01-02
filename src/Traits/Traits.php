<?php
namespace PHPModern\Traits;

/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/2015
 * Time: 22:14
 */
require_once __DIR__."/../../vendor/autoload.php";
$geocoderAdapter = new \Ivory\HttpAdapter\CurlHttpAdapter();
$geocoder = new \Geocoder\Provider\GoogleMaps($geocoderAdapter);

$store = new RetailStore();
$store->setAddress('420 9th Avenue, New York, NY 10001 USA');
$store->setGeocoder($geocoder);

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();
 echo $latitude, ':', $longitude;