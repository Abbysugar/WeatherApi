<?php

namespace Bukola\WeatherApi;

use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException;

class Weathermap
{
	protected $api_key;
	protected $location;
	protected $url = "http://api.openweathermap.org/data/2.5/forecast";


	public function __construct()
	{
		$this->client = new Client();
		
	}


	public function setApiKey($api_key)
	{
		$this->api_key = $api_key;
	}

	public function setLocation($location)
	{
		$this->location = $location; 
	}

	public function getWeatherReport()
	{
		try {
			$url = $this->url."?id=$this->location&APPID=$this->api_key";
			$res = $this->client->request('GET', $url);


			$result =  $res->getBody();

			$resultObj = json_decode($result);

			return $resultObj;
	
		} catch (RequestException $e) {
			return $e->getMessage();
		}
	}
		

}