<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class OSMessage extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["2"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
    $this->values["2"] = "";
    $this->fields["3"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "\\GetuiSDK\\IGeTui\\Core\\Transparent";
    $this->values["4"] = "";
    $this->fields["5"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
    $this->values["5"] = "";
    $this->fields["6"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
    $this->values["7"] = "";
    $this->fields["8"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
    $this->values["8"] = "";
  }
  function isOffline()
  {
    return $this->_get_value("2");
  }
  function set_isOffline($value)
  {
    return $this->_set_value("2", $value);
  }
  function offlineExpireTime()
  {
    return $this->_get_value("3");
  }
  function set_offlineExpireTime($value)
  {
    return $this->_set_value("3", $value);
  }
  function transparent()
  {
    return $this->_get_value("4");
  }
  function set_transparent($value)
  {
    return $this->_set_value("4", $value);
  }
  function extraData()
  {
    return $this->_get_value("5");
  }
  function set_extraData($value)
  {
    return $this->_set_value("5", $value);
  }
  function msgType()
  {
    return $this->_get_value("6");
  }
  function set_msgType($value)
  {
    return $this->_set_value("6", $value);
  }
  function msgTraceFlag()
  {
    return $this->_get_value("7");
  }
  function set_msgTraceFlag($value)
  {
    return $this->_set_value("7", $value);
  }
  function priority()
  {
    return $this->_get_value("8");
  }
  function set_priority($value)
  {
    return $this->_set_value("8", $value);
  }
}