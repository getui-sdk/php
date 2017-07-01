<?php 
namespace GetuiSDK\IGeTui\Core;

class IGtMessage
{
    private $isOffline;
    /*
     * 过多久该消息离线失效（单位秒） 支持1-72小时*3600秒，默认1小时
     */
    private $offlineExpireTime;

    /**
     * 0:联网方式不限;1:仅wifi;2:仅4G/3G/2G
     */
    private $pushNetWorkType = 0;

    private $data;

    public function __construct()
    {

    }

	public function getIsOffline()
	{
		return $this->isOffline;
	}

    public function setIsOffline($isOffline)
	{
		return $this->isOffline = $isOffline;
	}

    public function getOfflineExpireTime()
	{
		return $this->offlineExpireTime;
	}

    public function setOfflineExpireTime($offlineExpireTime)
	{
		return $this->offlineExpireTime = $offlineExpireTime;
	}

    public function getPushNetWorkType()
    {
        return $this->pushNetWorkType;
    }

    public function setPushNetWorkType($pushNetWorkType)
    {
        return $this->pushNetWorkType = $pushNetWorkType;
    }

    public function getData()
	{
		return $this->data;
	}

    public function setData($data)
	{
		return $this->data = $data;
	}
}