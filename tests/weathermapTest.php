<?php

namespace Bukola\WeatherApi\Test;

use Bukola\WeatherApi\Weathermap; 
use GuzzleHttp\Client;



class weathermapTest extends \PHPUnit_Framework_TestCase
{
	public $weathermap;

	public $api_key;

	public $location;


	public function setUp()
    {
        $this->weathermap = new Weathermap();
    }


	public function testSetApiKey()
	{
		$api_key = "49bcdc20fd0cf41cb08ec5d31cf9fc33";

		$test = $this->weathermap->setApiKey($api_key);

        $this->assertEquals($test, $this->weathermap->setApiKey($api_key));
	}


	public function testSetLocation()
	{
		$location = 683842;

		$test = $this->weathermap->setLocation($location);

        $this->assertEquals($test, $this->weathermap->setLocation($location));
	}

	public function testException()
	{
		$this->expectException(InvalidArgumentException::class);
    }
	

}