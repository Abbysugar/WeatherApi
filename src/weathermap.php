<?php

namespace Bukola\WeatherApi;

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Weathermap
{

    /*
     *the api key
     *@var string.
     */
    protected $apiKey;

    /*
     *the city name
     *@var string.
     */
    protected $location;
    // protected $url = getenv('API_URL')

    /*
     *the guzzlehttp client
     *@var \GuzzleHttp\Client object.
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /*
     * loadDotenv connects to the .env file in the root directory
     */
    public static function loadDotenv()
    {
        $dotenv = new Dotenv(__DIR__ . '/..');
        $dotenv->load();
    }

    /*
     * Method for setting the city name.
     * @param string
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /*
     * Function for getting the weather report from API url
     *using the generated API key and location ID of choice.
     */
    public function getWeatherReport()
    {
        static::loadDotenv();
        $url = getenv('API_URL');

        try {
            $url = getenv('API_URL') . "?q=$this->location&APPID=" . getenv('API_KEY');
            $res = $this->client->request('GET', $url);

            $result = $res->getBody();

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
