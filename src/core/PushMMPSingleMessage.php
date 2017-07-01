<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class PushMMPSingleMessage extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\GetuiSDK\\IGeTui\\Core\\MMPMessage";
        $this->values["2"] = "";
        $this->fields["3"] = "\\GetuiSDK\\IGeTui\\Core\\Target";
        $this->values["3"] = "";
    }

    public function getSeqId()
    {
        return $this->_get_value("1");
    }

    public function setSeqId($value)
    {
        return $this->_set_value("1", $value);
    }

    public function getMessage()
    {
        return $this->_get_value("2");
    }

    public function setMessage($value)
    {
        return $this->_set_value("2", $value);
    }

    public function getTarget()
    {
        return $this->_get_value("3");
    }

    public function setTarget($value)
    {
        return $this->_set_value("3", $value);
    }
}
