<?php

namespace AppBundle\Helper\Okcoin;

/**
 * Class Exception
 * @package AppBundle\Helper\Okcoin
 */
class Exception extends \Exception
{
    /**
     * Exception constructor.
     * @param string $message
     * @param null $http_code
     * @param null $response
     */
    public function __construct($message, $http_code=null, $response=null)
    {
        parent::__construct($message);
        $this->http_code = $http_code;
        $this->response = $response;
    }


    public function getResponse()
    {
        return $this->response;
    }

    public function getHttpCode()
    {
        return $this->http_code;
    }
}
