<?php
namespace PHPModern\Traits;

/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/2015
 * Time: 20:55
 */
trait Geocodable
{
    /** @var  String */
    protected $address;
    /** @var  \Geocoder\Geocoder */
    protected $geocoder;
    protected $geocoderResult;

    public function setGeocoder(\Geocoder\Geocoder $geocoder)
    {
        $this->geocoder = $geocoder;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getLatitude(){
        if(isset($this->geocoderResult)=== false){
            $this->geocodeAddress();
        }

        return $this->geocoderResult->getLatitude();
    }
    public function getLongitude()
    {
        if (isset($this->geocoderResult) === false) {
            $this->geocodeAddress();
        }
        return $this->geocoderResult->getLongitude();
    }

    protected function geocodeAddress()
    {
        $this->geocoderResult = $this->geocoder->geocode($this->address)->first();
        return true;
    }
}