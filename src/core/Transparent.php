<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;

class Transparent extends PBMessage {
    
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
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
        $this->fields["7"] = "\\GetuiSDK\\IGeTui\\Core\\PushInfo";
        $this->values["7"] = "";
        $this->fields["8"] = "\\GetuiSDK\\IGeTui\\Core\\ActionChain";
        $this->values["8"] = array();
        $this->fields["9"] = "GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["9"] = array();
    }

    function getId()
    {
        return $this->_get_value("1");
    }

    function setId($value)
    {
        return $this->_set_value("1", $value);
    }

    function getAction()
    {
        return $this->_get_value("2");
    }

    function setAction($value)
    {
        return $this->_set_value("2", $value);
    }

    function getTaskId()
    {
        return $this->_get_value("3");
    }

    function setTaskId($value)
    {
        return $this->_set_value("3", $value);
    }

    function getAppKey()
    {
        return $this->_get_value("4");
    }

    function setAppKey($value)
    {
        return $this->_set_value("4", $value);
    }

    function getAppId()
    {
        return $this->_get_value("5");
    }

    function setAppId($value)
    {
        return $this->_set_value("5", $value);
    }

    function getMessageId()
    {
        return $this->_get_value("6");
    }

    function setMessageId($value)
    {
        return $this->_set_value("6", $value);
    }

    function getPushInfo()
    {
        return $this->_get_value("7");
    }

    function setPushInfo($value)
    {
        return $this->_set_value("7", $value);
    }

    function getActionChain($offset)
    {
        return $this->_get_arr_value("8", $offset);
    }

    function addActionChain()
    {
        return $this->_add_arr_value("8");
    }

    function setActionChain($index, $value)
    {
        $this->_set_arr_value("8", $index, $value);
    }

    function removeLastActionChain()
    {
        $this->_remove_last_arr_value("8");
    }

    function actionChainSize()
    {
        return $this->_get_arr_size("8");
    }

    function getCondition($offset)
    {
        $v = $this->_get_arr_value("9", $offset);
        return $v->get_value();
    }

    function appendCondition($value)
    {
        $v = $this->_add_arr_value("9");
        $v->set_value($value);
    }

    function setCondition($index, $value)
    {
        $v = new $this->fields["9"]();
        $v->set_value($value);
        $this->_set_arr_value("9", $index, $v);
    }

    function removeLastCondition()
    {
        $this->_remove_last_arr_value("9");
    }

    function conditionSize()
    {
        return $this->_get_arr_size("9");
    }
}