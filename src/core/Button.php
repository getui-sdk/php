<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class Button extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["2"] = "";
    }
    function getText()
    {
        return $this->_get_value("1");
    }
    function setText($value)
    {
        return $this->_set_value("1", $value);
    }
    function getNext()
    {
        return $this->_get_value("2");
    }
    function setNext($value)
    {
        return $this->_set_value("2", $value);
    }
}