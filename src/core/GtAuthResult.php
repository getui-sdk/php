<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class GtAuthResult extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["4"] = "";
    }

    function getCode()
    {
        return $this->_get_value("1");
    }

    function setCode($value)
    {
        return $this->_set_value("1", $value);
    }

    function getRedirectAddress()
    {
        return $this->_get_value("2");
    }

    function setRedirectAddress($value)
    {
        return $this->_set_value("2", $value);
    }

    function getSeqId()
    {
        return $this->_get_value("3");
    }

    function setSeqId($value)
    {
        return $this->_set_value("3", $value);
    }

    function getInfo()
    {
        return $this->_get_value("4");
    }

    function setInfo($value)
    {
        return $this->_set_value("4", $value);
    }
}
