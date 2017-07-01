<?php
namespace GetuiSDK\IGeTui\Utils;

class LogUtils
{
    static $debug = false;
    public static function debug($log)
    {
        if (LogUtils::$debug)
            echo ($log) . "\r\n";
    }
}