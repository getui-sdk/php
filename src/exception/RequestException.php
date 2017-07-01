<?php
namespace GetuiSDK\IGeTui\Exception;

class RequestException extends \Exception
{
    var $requestId;

    public function __construct($requestId, $message, $e)
    {
        parent::__construct($message, $e);
        $this->requestId = $requestId;
    }
    public function getRequestId()
    {
        return $this->requestId;
    }
}