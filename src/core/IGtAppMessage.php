<?php 
namespace GetuiSDK\IGeTui\Core;

class IGtAppMessage extends IGtMessage
{
	//array('','',..)
	private $appIdList;
	
	//array('','',..)
    private $phoneTypeList;
	
	//array('','',..)
    private $provinceList;

    private $tagList;
    private $conditions;
    private $speed=0;

	public function __construct()
    {
		parent::__construct();
	}

	public function getAppIdList()
    {
		return $this->appIdList;
	}

	public function setAppIdList($appIdList)
    {
		$this->appIdList = $appIdList;
	}

    public function getPhoneTypeList()
    {
		return $this->phoneTypeList;
	}

    public function setPhoneTypeList($phoneTypeList)
    {
		$this->phoneTypeList = $phoneTypeList;
	}

    public function getProvinceList()
    {
		return $this->provinceList;
	}

    public function setProvinceList($provinceList)
    {
		$this->provinceList = $provinceList;
	}

    public function getTagList()
    {
        return $this->tagList;
    }

    public function setTagList($tagList)
    {
        $this->tagList = $tagList;
    }

    public function getConditions()
	{
		return $this->conditions;
	}

	public function setConditions($conditions)
	{
		$this->conditions = $conditions;
	}

    public function getSpeed()
	{
		return $this->speed;
	}

    public	function setSpeed($speed)
	{
		$this->speed=$speed;
	}
}
