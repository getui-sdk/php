<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\PBMessage;
use GetuiSDK\IGeTui\Protobuf\Type\PBBool;

class ActionChain extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "\\GetuiSDK\\IGeTui\\Core\\ActionChainType";
        $this->values["2"] = "";
        $this->fields["3"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["3"] = "";
        $this->fields["100"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["100"] = "";
        $this->fields["101"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["101"] = "";
        $this->fields["102"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["102"] = "";
        $this->fields["103"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["103"] = "";
        $this->fields["104"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["104"] = "";
        $this->fields["105"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["105"] = "";
        $this->fields["106"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["106"] = "";
        $this->fields["107"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["107"] = "";
        $this->fields["120"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["120"] = "";
        $this->fields["121"] = "\\GetuiSDK\\IGeTui\\Core\\Button";
        $this->values["121"] = array();
        $this->fields["140"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["140"] = "";
        $this->fields["141"] = "\\GetuiSDK\\IGeTui\\Core\\AppStartUp";
        $this->values["141"] = "";
        $this->fields["142"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["142"] = "";
        $this->fields["143"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["143"] = "";
        $this->fields["160"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["160"] = "";
        $this->fields["161"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["161"] = "";
        $this->fields["162"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["162"] = "";
        $this->values["162"] = new PBBool();
        $this->values["162"]->value = false;
        $this->fields["180"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["180"] = "";
        $this->fields["181"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["181"] = "";
        $this->fields["182"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["182"] = "";
        $this->fields["183"] = "\\GetuiSDK\\IGeTui\\Core\\ActionChainSMSStatus";
        $this->values["183"] = "";
        $this->fields["200"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["200"] = "";
        $this->fields["201"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["201"] = "";
        $this->fields["220"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["220"] = "";
        $this->fields["223"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["223"] = "";
        $this->fields["225"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["225"] = "";
        $this->fields["226"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["226"] = "";
        $this->fields["227"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["227"] = "";
        $this->fields["241"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["241"] = "";
        $this->fields["242"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["242"] = "";
        $this->fields["260"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["260"] = "";
        $this->fields["280"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["280"] = "";
        $this->fields["281"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["281"] = "";
        $this->fields["300"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBBool";
        $this->values["300"] = "";
        $this->fields["320"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["320"] = "";
        $this->fields["340"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBInt";
        $this->values["340"] = "";
        $this->fields["360"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["360"] = "";
        $this->fields["380"] = "\\GetuiSDK\\IGeTui\\Protobuf\\Type\\PBString";
        $this->values["380"] = "";
        $this->fields["381"] = "\\GetuiSDK\\IGeTui\\Core\\InnerFiled";
        $this->values["381"] = array();
    }

    function getActionId()
    {
        return $this->_get_value("1");
    }

    function setActionId($value)
    {
        return $this->_set_value("1", $value);
    }

    function getType()
    {
        return $this->_get_value("2");
    }

    function setType($value)
    {
        return $this->_set_value("2", $value);
    }
    function getNext()
    {
        return $this->_get_value("3");
    }
    function setNext($value)
    {
        return $this->_set_value("3", $value);
    }
    function getLogo()
    {
        return $this->_get_value("100");
    }
    function setLogo($value)
    {
        return $this->_set_value("100", $value);
    }
    function getLogoURL()
    {
        return $this->_get_value("101");
    }
    function setLogoURL($value)
    {
        return $this->_set_value("101", $value);
    }
    function getTitle()
    {
        return $this->_get_value("102");
    }
    function setTitle($value)
    {
        return $this->_set_value("102", $value);
    }
    function getText()
    {
        return $this->_get_value("103");
    }
    function setText($value)
    {
        return $this->_set_value("103", $value);
    }
    function getClearable()
    {
        return $this->_get_value("104");
    }
    function setClearable($value)
    {
        return $this->_set_value("104", $value);
    }
    function getRing()
    {
        return $this->_get_value("105");
    }
    function setRing($value)
    {
        return $this->_set_value("105", $value);
    }
    function getBuzz()
    {
        return $this->_get_value("106");
    }
    function setBuzz($value)
    {
        return $this->_set_value("106", $value);
    }
    function getBannerURL()
    {
        return $this->_get_value("107");
    }
    function setBannerURL($value)
    {
        return $this->_set_value("107", $value);
    }
    function getImg()
    {
        return $this->_get_value("120");
    }
    function setImg($value)
    {
        return $this->_set_value("120", $value);
    }
    function getButtons($offset)
    {
        return $this->_get_arr_value("121", $offset);
    }
    function addButtons()
    {
        return $this->_add_arr_value("121");
    }
    function setButtons($index, $value)
    {
        $this->_set_arr_value("121", $index, $value);
    }
    function remove_last_buttons()
    {
        $this->_remove_last_arr_value("121");
    }
    function buttons_size()
    {
        return $this->_get_arr_size("121");
    }
    function getAppid()
    {
        return $this->_get_value("140");
    }
    function setAppid($value)
    {
        return $this->_set_value("140", $value);
    }
    function getAppstartupid()
    {
        return $this->_get_value("141");
    }
    function setAppstartupid($value)
    {
        return $this->_set_value("141", $value);
    }
    function getAutostart()
    {
        return $this->_get_value("142");
    }
    function setAutostart($value)
    {
        return $this->_set_value("142", $value);
    }
    function getFailedAction()
    {
        return $this->_get_value("143");
    }
    function setFailedAction($value)
    {
        return $this->_set_value("143", $value);
    }
    function getUrl()
    {
        return $this->_get_value("160");
    }
    function setUrl($value)
    {
        return $this->_set_value("160", $value);
    }
    function getWithcid()
    {
        return $this->_get_value("161");
    }
    function setWithcid($value)
    {
        return $this->_set_value("161", $value);
    }
    function getIsWithnettype()
    {
        return $this->_get_value("162");
    }
    function setIswithnettype($value)
    {
        return $this->_set_value("162", $value);
    }
    function getAddress()
    {
        return $this->_get_value("180");
    }
    function setAddress($value)
    {
        return $this->_set_value("180", $value);
    }
    function getContent()
    {
        return $this->_get_value("181");
    }
    function setContent($value)
    {
        return $this->_set_value("181", $value);
    }
    function getCt()
    {
        return $this->_get_value("182");
    }
    function setCt($value)
    {
        return $this->_set_value("182", $value);
    }
    function getFlag()
    {
        return $this->_get_value("183");
    }
    function setFlag($value)
    {
        return $this->_set_value("183", $value);
    }
    function getSuccessedAction()
    {
        return $this->_get_value("200");
    }
    function setSuccessedAction($value)
    {
        return $this->_set_value("200", $value);
    }
    function getUninstalledAction()
    {
        return $this->_get_value("201");
    }
    function setUninstalledAction($value)
    {
        return $this->_set_value("201", $value);
    }
    function getName()
    {
        return $this->_get_value("220");
    }
    function setName($value)
    {
        return $this->_set_value("220", $value);
    }
    function getAutoInstall()
    {
        return $this->_get_value("223");
    }
    function setAutoInstall($value)
    {
        return $this->_set_value("223", $value);
    }
    function getWifiAutodownload()
    {
        return $this->_get_value("225");
    }
    function setWifiAutodownload($value)
    {
        return $this->_set_value("225", $value);
    }
    function getForceDownload()
    {
        return $this->_get_value("226");
    }
    function setForceDownload($value)
    {
        return $this->_set_value("226", $value);
    }
    function getShowProgress()
    {
        return $this->_get_value("227");
    }
    function setShowProgress($value)
    {
        return $this->_set_value("227", $value);
    }
    function getPost()
    {
        return $this->_get_value("241");
    }
    function setPost($value)
    {
        return $this->_set_value("241", $value);
    }
    function getHeaders()
    {
        return $this->_get_value("242");
    }
    function setHeaders($value)
    {
        return $this->_set_value("242", $value);
    }
    function getGroupable()
    {
        return $this->_get_value("260");
    }
    function setGroupable($value)
    {
        return $this->_set_value("260", $value);
    }
    function getMmsTitle()
    {
        return $this->_get_value("280");
    }
    function setMmsTitle($value)
    {
        return $this->_set_value("280", $value);
    }
    function getMmsURL()
    {
        return $this->_get_value("281");
    }
    function setMmsURL($value)
    {
        return $this->_set_value("281", $value);
    }
    function getPreload()
    {
        return $this->_get_value("300");
    }
    function setPreload($value)
    {
        return $this->_set_value("300", $value);
    }
    function getTaskid()
    {
        return $this->_get_value("320");
    }
    function setTaskid($value)
    {
        return $this->_set_value("320", $value);
    }
    function getDuration()
    {
        return $this->_get_value("340");
    }
    function setDuration($value)
    {
        return $this->_set_value("340", $value);
    }
    function getDate()
    {
        return $this->_get_value("360");
    }
    function setDate($value)
    {
        return $this->_set_value("360", $value);
    }
    function getStype()
    {
        return $this->_get_value("380");
    }
    function setStype($value)
    {
        return $this->_set_value("380", $value);
    }
    function getField($offset)
    {
        return $this->_get_arr_value("381", $offset);
    }
    function addField()
    {
        return $this->_add_arr_value("381");
    }
    function setField($index, $value)
    {
        return $this->_set_arr_value("381", $index, $value);
    }
    function removeLastField()
    {
        return $this->_remove_last_arr_value("381");
    }
    function getfieldSize()
    {
        return $this->_get_arr_size("381");
    }
}
