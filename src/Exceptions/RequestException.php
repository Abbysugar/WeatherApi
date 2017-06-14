<?php

/**
 * This exception package handles empty username.
 *
 * @package Open Source WeatherApi Package
 * @author Bukola Bisuga <bukksbisuga@gmail.com>
 * @license MIT <https://opensource.org/licenses/MIT>
 * @link http://www.github.com/abbysugar
 */

namespace Bukola\WeatherApi\Exceptions;

use Exception;

/*
 * This class returns an exception message for empty location/ Api Key.
*/
class RequestException extends Exception
{
    //class property
    protected $message;

    //constructor for RequestException
    public function __construct($message)
    {
        $this->message = $message;
    }

    //getter for RequestException message
    public function getExceptionMessage()
    {
        return $this->message;
    }
}
