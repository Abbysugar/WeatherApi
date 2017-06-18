<?php

namespace Bukola\WeatherApi\Test;

use Bukola\WeatherApi\Weathermap;

/*
 * weathermapTest is the test for the Weathermap Class.
 */
class weathermapTest extends \PHPUnit_Framework_TestCase
{

    /*
     *instance of the Weathermap class.
     *@var Bukola\WeatherApi\Weathermap object.
     */
    public $weathermap;

    /*
     *the api key.
     *@var string.
     */
    public $apiKey;

    /*
     *the city name.
     */
    public $location;

    /*
     *creating an instance of the Weathermap class.
     */
    public function setUp()
    {

        $this->weathermap = new Weathermap();

    }

    /*
     *test for capi key.
     */
    public function testSetApiKey()
    {

        $apiKey = getenv('API_KEY');

        $test = $this->weathermap->setApiKey($apiKey);

        $this->assertEquals($test, $this->weathermap->setApiKey($apiKey));

    }

    /*
     *test for city name.
     */
    public function testSetLocation()
    {

        $location = "London";

        $test = $this->weathermap->setLocation($location);

        $this->assertEquals($test, $this->weathermap->setLocation($location));

    }

    /*
     * Test for checking the weather report using correct API
     *key and location ID.
     */
    public function testGetWeatherReport()
    {

        $test = $this->weathermap->getWeatherReport();

        $this->assertEquals($test, $this->weathermap->getWeatherReport());

    }

}
