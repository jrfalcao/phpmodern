<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/2015
 * Time: 23:13
 */
require_once __DIR__."/../vendor/autoload.php";
use PHPModern\Traits\RetailStore;
$curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
$geocoder = new \Geocoder\Provider\GoogleMaps($curl);

$store = new RetailStore();
$store->setAddress('146 rua plutao, rio de janeiro, rj 21240-560 BR');
$store->setGeocoder($geocoder);
var_dump($store);

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();
echo $latitude, ':', $longitude;

$store->setAddress('rio de janeiro');
$store->setGeocoder($geocoder);

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();
echo '<br>Cidade do Rio de Janeiro'.$latitude, ' : ', $longitude;