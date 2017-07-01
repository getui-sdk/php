<?php
namespace GetuiSDK\IGeTui\Template;

use GetuiSDK\IGeTui\Core\IGtAPNPayload;
use GetuiSDK\IGeTui\Core\Transparent;
use GetuiSDK\IGeTui\Core\PushInfo;
use GetuiSDK\IGeTui\Core\DictionaryAlertMsg;

class IGtBaseTemplate
{
    var $appId;
    var $appkey;
    var $pushInfo;
    var $duration;

    function getTransparent()
    {
        $transparent = new Transparent();
        $transparent->setId('');
        $transparent->setMessageId('');
        $transparent->setTaskId('');
        $transparent->setAction('pushmessage');
        $transparent->setPushInfo($this->getPushInfo());
        $transparent->setAppId($this->appId);
        $transparent->setAppKey($this->appkey);

        $actionChainList = $this->getActionChain();

        foreach ($actionChainList as $index => $actionChain) {
            $transparent->addActionChain();
            $transparent->setActionChain($index, $actionChain);
        }

        $transparent->appendCondition($this->getDurcondition());

        return $transparent->SerializeToString();

        //return $transparent->condition(0);
    }

    function getActionChain()
    {
        return $list = array();
    }

    function getDurcondition()
    {
        if ($this->duration == null || $this->duration == '')
        {
            return "";
        }
        return "duration=" . $this->duration;
    }

    function getDuration()
    {
        return $this->duration;
    }

    function setDuration($begin, $end)

    {
        date_default_timezone_set('asia/shanghai');
        /*  //for test
            var_dump(date("Y-m-d H:i:s",strtotime($begin)));
            var_dump(date("Y-m-d H:i:s",strtotime($end)));
        */
        $ss = (string)strtotime($begin) * 1000;
        $e = (string)strtotime($end) * 1000;
        if ($ss <= 0 || $e <= 0)
            throw new \Exception("DateFormat: yyyy-MM-dd HH:mm:ss");
        if ($ss > $e)
            throw new \Exception("startTime should be smaller than endTime");

        $this->duration = $ss . "-" . $e;

    }

    function getTransmissionContent()
    {
        return null;
    }

    function getPushType()
    {
        return null;
    }
    /*
    function getActionChain()
    {
        return null;
    }*/

    function getPushInfo()
    {
        if ($this->pushInfo == null) {
            $this->pushInfo = new PushInfo();
            $this->pushInfo->set_invalidAPN(true);
            $this->pushInfo->set_invalidMPN(true);
        }

        return $this->pushInfo;
    }

    function setPushInfo($actionLocKey, $badge, $message, $sound, $payload, $locKey, $locArgs, $launchImage, $contentAvailable = 0)
    {
        $this->pushInfo = new PushInfo();
        $this->pushInfo->set_invalidAPN(true);
        $this->pushInfo->set_invalidMPN(true);
        $apn = new IGtAPNPayload();

        $alertMsg = new DictionaryAlertMsg();
        if ($actionLocKey != null && $actionLocKey != '')
        {
            $alertMsg->actionLocKey = $actionLocKey;
        }
        if ($message != null && $message != '')
        {
            $alertMsg->body = $message;
        }
        if ($locKey != null && $locKey != '')
        {
            $alertMsg->locKey = $locKey;
        }
        if ($locArgs != null && $locArgs != '')
        {
            array_push($alertMsg->locArgs, $locArgs);
        }

        if ($launchImage != null && $launchImage != '')
        {
            $alertMsg->launchImage = $launchImage;
        }
        $apn->alertMsg = $alertMsg;

        if ($badge != null )
        {
            $apn->badge = $badge;
        }
        if ($sound != null && $sound != '')
        {
            $apn->sound = $sound;
        }
        if ($contentAvailable != null )
        {
            $apn->contentAvailable = $contentAvailable;
        }
        if ($payload != null && $payload != '')
        {
            $apn->add_customMsg("payload", $payload);
        }
        $this->setApnInfo($apn);
    }

    function setApnInfo($payload)
    {
        if ($payload == null) {
            return;
        }
        $payload = $payload->get_payload();
        if ($payload == null || $payload == "") {
            return;
        }
        $len = strlen($payload);
        if ($len > IGtAPNPayload::$PAYLOAD_MAX_BYTES) {
            throw new \Exception("APN payload length overlength (" . $len . ">" . IGtAPNPayload::$PAYLOAD_MAX_BYTES . ")");
        }
        $this->pushInfo = new PushInfo();
        $this->pushInfo->set_apnJson($payload);
        $this->pushInfo->set_invalidAPN(false);
    }

    function setAppId($appId)
    {
        $this->appId = $appId;
    }

    function setAppkey($appkey)
    {
        $this->appkey = $appkey;
    }

    function abslength($str)
    {
        if (empty($str)) {
            return 0;
        }
        if (function_exists('mb_strlen')) {
            return mb_strlen($str, 'utf-8');
        } else {
            preg_match_all("/./u", $str, $ar);
            return count($ar[0]);
        }
    }


}