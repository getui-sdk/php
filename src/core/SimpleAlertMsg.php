<?php
namespace GetuiSDK\IGeTui\Core;

class SimpleAlertMsg implements ApnMsg
{
    var $alertMsg;

    public function get_alertMsg() {
        return $this->alertMsg;
    }
}