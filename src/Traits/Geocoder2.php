<?php
namespace PHPModern\Traits;

/**
 * Created by PhpStorm.
 * User: junior
 * Date: 15/11/2015
 * Time: 21:39
 */
trait Geocoder2
{
    /** @var  \Geocoder\Geocoder */
    protected $geocoder;
    /** @var  String */
    protected $address;

    public function setGeocoder(\Geocoder\Geocoder $geocoder)
    {
        $this->geocoder = $geocoder;
    }

    /**
     * @return \Geocoder\Geocoder
     */
    public function getGeocoder()
    {
        return $this->geocoder;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return String
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function getLatitude(){
        $latitude = $this->getGeocoder()->geocode($this->getAddress())->first();
        return $latitude->getLatitude();
    }

    public function getLongitude(){
        $latitude = $this->getGeocoder()->geocode($this->getAddress())->first();
        return $latitude->getLongitude();
    }

}