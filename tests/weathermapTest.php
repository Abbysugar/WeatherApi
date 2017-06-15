<?php

namespace Bukola\WeatherApi\Test;

use Bukola\WeatherApi\Weathermap; 
use GuzzleHttp\Client;
use Bukola\WeatherApi\Exceptions\RequestException;



/*
* weathermapTest is the test for the Weathermap Class.
 */
class weathermapTest extends \PHPUnit_Framework_TestCase
{

	//class properties

	public $weathermap;

	public $api_key;

	public $location;

	public $url;



	public function setUp()
    {

        $this->weathermap = new Weathermap();

    }


    // tests the API key

	public function testSetApiKey()
	{

		$api_key = "49bcdc20fd0cf41cb08ec5d31cf9fc33";

		$test = $this->weathermap->setApiKey($api_key);

        $this->assertEquals($test, $this->weathermap->setApiKey($api_key));

	}


	// tests the location ID

	public function testSetLocation()
	{

		$location = 683842;

		$test = $this->weathermap->setLocation($location);

        $this->assertEquals($test, $this->weathermap->setLocation($location));

	}

 /*
    * Test for checking the weather report using correct API
    key and location ID.
     */
	public function testGetWeatherReport()
	{
	
        $test = $this->weathermap->getWeatherReport();

        $this->assertEquals($test, $this->weathermap->getWeatherReport());


    }


}