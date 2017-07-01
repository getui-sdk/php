<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class PushResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "\\GetuiSDK\\IGeTui\\Core\\PushResultEPushResult";
    $this->values["1"] = "";
    $this->fields["2"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["2"] = "";
    $this->fields["3"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["3"] = "";
    $this->fields["4"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["4"] = "";
    $this->fields["5"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["5"] = "";
    $this->fields["6"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["6"] = "";
    $this->fields["7"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["7"] = "";
  }
  function result()
  {
    return $this->_get_value("1");
  }
  function set_result($value)
  {
    return $this->_set_value("1", $value);
  }
  function taskId()
  {
    return $this->_get_value("2");
  }
  function set_taskId($value)
  {
    return $this->_set_value("2", $value);
  }
  function messageId()
  {
    return $this->_get_value("3");
  }
  function set_messageId($value)
  {
    return $this->_set_value("3", $value);
  }
  function seqId()
  {
    return $this->_get_value("4");
  }
  function set_seqId($value)
  {
    return $this->_set_value("4", $value);
  }
  function target()
  {
    return $this->_get_value("5");
  }
  function set_target($value)
  {
    return $this->_set_value("5", $value);
  }
  function info()
  {
    return $this->_get_value("6");
  }
  function set_info($value)
  {
    return $this->_set_value("6", $value);
  }
  function traceId()
  {
    return $this->_get_value("7");
  }
  function set_traceId($value)
  {
    return $this->_set_value("7", $value);
  }
}