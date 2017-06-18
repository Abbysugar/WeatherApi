<?php

namespace Bukola\WeatherApi;

use Dotenv\Dotenv;
use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException;

class Weathermap
{

	//class properties

	protected $api_key;
	protected $location;
	// protected $url = .getenv('API_URL');


	/*
     * loadDotenv connects to the .env file in the root directory
     */
    public static function loadDotenv()
    {
        $dotenv = new Dotenv(__DIR__ . '/..');
        $dotenv->load();
    }

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



	 /*
    * Function for getting the weather report from API url 
    using the generated API key and location ID of choice.
     */
	public function getWeatherReport()
	{
		static::loadDotenv();
		$url = getenv('API_URL');

		try {
			$url = getenv('API_URL') . "?q=$this->location&APPID=$this->api_key";
			$res = $this->client->request('GET', $url);


			$result =  $res->getBody();

			$resultObj = json_decode($result);

			return $resultObj;
	
		} catch (RequestException $e) {

			return $e->getMessage();

		} catch (RequestException $e) {

            return "Wrong information provided!!";
            throw new RequestException('Wrong information provided!');

        }

	}
		

}