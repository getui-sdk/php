<?php 
namespace GetuiSDK\IGeTui\Core;

class IGtTarget
{
	private $appId;
 
	private $clientId;

    private $alias;

	public function __construct()
	{
	}

    public function getAppId()
	{
		return $this->appId;
	}

    public function setAppId($appId)
	{
		return $this->appId = $appId;
	}

    public function getClientId()
	{
		return $this->clientId;
	}

    public function setClientId($clientId)
	{
		return $this->clientId = $clientId;
	}

    public function setAlias($alias)
    {
        return $this->alias = $alias;
    }

    public function getAlias()
    {
        return $this->alias;
    }
}