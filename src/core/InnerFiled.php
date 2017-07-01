<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class InnerFiled extends PBMessage
{
	var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  	public function __construct($reader=null)
	{
		parent::__construct($reader);
		$this->fields["1"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
		$this->values["1"] = "";
		$this->fields["2"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
		$this->values["2"] = "";
		$this->fields["3"] = "\\GetuiSDK\\IGeTui\\Core\\InnerFiledType";
		$this->values["3"] = "";
	}

	function getKey()
	{
		return $this->_get_value("1");
	}

	function setKey($value)
	{
		return $this->_set_value("1", $value);
	}

	function getVal()
	{
		return $this->_get_value("2");
	}

	function setVal($value)
	{
		return $this->_set_value("2", $value);
	}

	function getType()
	{
		return $this->_get_value("3");
	}
	
	function setType($value)
	{
		return $this->_set_value("3", $value);
	}
}