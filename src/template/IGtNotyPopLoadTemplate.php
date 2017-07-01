<?php
namespace GetuiSDK\IGeTui\Template;

use GetuiSDK\IGeTui\Core\ActionChainType;
use GetuiSDK\IGeTui\Core\ActionChain;
use GetuiSDK\IGeTui\Core\Button;
use GetuiSDK\IGeTui\Core\AppStartUp;
use GetuiSDK\IGeTui\Core\InnerFiled;
use GetuiSDK\IGeTui\Core\InnerFiledType;

class IGtNotyPopLoadTemplate extends IGtBaseTemplate
{
	/**
	 * 通知栏图标
	 */
	private $notyIcon;
	/**
	 * 通知栏标题
	 */
    private $logoURL;

    private $notyTitle;
	/**
	 * 通知栏内容
	 */
    private $notyContent;
	/**
	 * 通知是否可清楚
	 */
    private $isCleared = true;
	/**
	 * 是否响铃
	 */
    private $isBelled = true;
	/**
	 * 是否震动
	 */
    private $isVibrationed = true;

	/**
	 * 弹框标题
	 */
    private $popTitle;
	/**
	 * 弹框内容
	 */
    private $popContent;

	/**
	 * 弹框图片
	 */
    private $popImage;
	/**
	 * 左边按钮名称
	 */
    private $popButton1;
	/**
	 * 右边按钮名称
	 */
    private $popButton2;

	/**
	 * 下载图标
	 */
    private $loadIcon;

	/**
	 * 下载标题
	 */
    private $loadTitle;

	/**
	 * 下载地址
	 */
    private $loadUrl;
	/**
	 * 是否自动安装
	 */
    private $isAutoInstall = false;
	/**
	 * 是否激活
	 */
    private $isActived = false;

    private $symbianMark="";
    private $androidMark="";
    private $iosMark="";
    var $notifyStyle = 0;
	
	public function getActionChain() {
		$actionChains = array();
		//设置actionchain
		$actionChain1 = new ActionChain();
		$actionChain1->setActionId(1);
		$actionChain1->setType(ActionChainType::refer);
		$actionChain1->setNext(10000);

		//通知
		$actionChain2 = new ActionChain();
		$actionChain2->setActionId(10000);
		$actionChain2->setType(ActionChainType::mmsinbox2);
		$actionChain2->setStype("notification");
		
		$f_text = new InnerFiled();
		$f_text->setKey("text");
		$f_text->setVal($this->notyContent);
		$f_text->setType(InnerFiledType::str);
		$actionChain2->setField(0, $f_text);
		
		$f_title = new InnerFiled();
		$f_title->setKey("title");
		$f_title->setVal($this->notyTitle);
		$f_title->setType(InnerFiledType::str);
		$actionChain2->setField(1, $f_title);
		
		$f_logo = new InnerFiled();
		$f_logo->setKey("logo");
		$f_logo->setVal($this->notyIcon);
		$f_logo->setType(InnerFiledType::str);
		$actionChain2->setField(2,$f_logo);
		
		$f_logoURL = new InnerFiled();
		$f_logoURL->setKey("logo_url");
		$f_logoURL->setVal($this->logoURL);
		$f_logoURL->setType(InnerFiledType::str);
		$actionChain2->setField(3, $f_logoURL);
		
		$f_notifyStyle = new InnerFiled();
		$f_notifyStyle->setKey("notifyStyle");
		$f_notifyStyle->setVal(strval($this->notifyStyle));
		$f_notifyStyle->setType(InnerFiledType::str);
		$actionChain2->setField(4, $f_notifyStyle);
		
		$f_isRing = new InnerFiled();
		$f_isRing->setKey("is_noring");
		$f_isRing->setVal(!$this->isBelled ? "true" : "false");
		$f_isRing->setType(InnerFiledType::bool);
		$actionChain2->setField(5, $f_isRing);
		
		$f_isVibrate = new InnerFiled();
		$f_isVibrate->setKey("is_novibrate");
		$f_isVibrate->setVal(!$this->isVibrationed ? "true" : "false");
		$f_isVibrate->setType(InnerFiledType::bool);
		$actionChain2->setField(6, $f_isVibrate);
		
		$f_isClearable = new InnerFiled();
		$f_isClearable->setKey("is_noclear");
		$f_isClearable->setVal(!$this->isCleared ? "true" : "false");
		$f_isClearable->setType(InnerFiledType::bool);
		$actionChain2->setField(7, $f_isClearable);
		
		$actionChain2->setNext(10010);
		
		$actionChain3 = new ActionChain();
		$actionChain3->set_actionId(10010);
		$actionChain3->set_type(ActionChainType::refer);
		$actionChain3->setNext(10020);
		
		//弹框按钮
		$button1 = new Button();
		$button1->setText($this->popButton1);
		$button1->setNext(10040);
		$button2 = new Button();
		$button2->setText($this->popButton2);
		$button2->setNext(100);
		
		//弹框
		$actionChain4 = new ActionChain();
		$actionChain4->setActionId(10020);
		$actionChain4->setType(ActionChainType::popup);
		$actionChain4->setTitle($this->popTitle);
		$actionChain4->setText($this->popContent);
		$actionChain4->setImg($this->popImage);
		$actionChain4->setButtons(0,$button1);
		$actionChain4->setButtons(1,$button2);
		$actionChain4->setNext(6);
		
		//下载
		//appstartupid
		$appStartUp = new AppStartUp();
		$appStartUp->setAndroid($this->androidMark);
		$appStartUp->setIos($this->iosMark);
		$appStartUp->setSymbia($this->symbianMark);
		$actionChain5 = new ActionChain();
		$actionChain5->setActionId(10040);
		$actionChain5->setType(ActionChainType::appdownload);
		$actionChain5->setName($this->loadTitle);
		$actionChain5->setUrl($this->loadUrl);
		$actionChain5->setLogo($this->loadIcon);
		$actionChain5->setAutoInstall($this->isAutoInstall);
		$actionChain5->setAutostart($this->isActived);
		$actionChain5->setAppstartupid($appStartUp);
		$actionChain5->setNext(6);
		
		$actionChain6 = new ActionChain();
		$actionChain6->setActionId(100);
		$actionChain6->setType(ActionChainType::eoa);
		
		array_push($actionChains, $actionChain1, $actionChain2, $actionChain3, $actionChain4, $actionChain5, $actionChain6);
		return $actionChains;
	}
	
	function  setNotyIcon($notyIcon) {
		$this->notyIcon = $notyIcon;
	}

	function  setNotyTitle($notyTitle) {
		$this->notyTitle = $notyTitle;
	}

	function  setLogoURL($logoURL) {
		$this->logoURL = $logoURL;
	}

	function  setNotyContent($notyContent) {
		$this->notyContent = $notyContent;
	}

	function  setIsCleared($isCleared) {
		$this->isCleared = $isCleared;
	}

	function  setIsBelled($isBelled) {
		$this->isBelled = $isBelled;
	}

	function  setIsVibrationed($isVibrationed) {
		$this->isVibrationed = $isVibrationed;
	}

	function  setPopTitle($popTitle) {
		$this->popTitle = $popTitle;
	}

	function  setPopContent($popContent) {
		$this->popContent = $popContent;
	}

	function  setPopImage($popImage) {
		$this->popImage = $popImage;
	}

	function  setPopButton1($popButton1) {
		$this->popButton1 = $popButton1;
	}

	function  setPopButton2($popButton2) {
		$this->popButton2 = $popButton2;
	}

	function  setLoadIcon($loadIcon) {
		$this->loadIcon = $loadIcon;
	}

	function  setLoadTitle($loadTitle) {
		$this->loadTitle = $loadTitle;
	}

	function  setLoadUrl($loadUrl) {
		$this->loadUrl = $loadUrl;
	}

	function  setIsAutoInstall($isAutoInstall) {
		$this->isAutoInstall = $isAutoInstall;
	}

	function  setIsActived($isActived) {
		$this->isActived = $isActived;
	}

    function setSymbianMark($symbianMark){
        $this->symbianMark = $symbianMark;
    }

    function setAndroidMark($androidMark){
        $this->androidMark = $androidMark;
    }

    function setIosMark($iosMark){
        $this->iosMark = $iosMark;
    }

	function getPushType(){
		return "NotyPopLoadTemplate";
	}
	
	function  setNotifyStyle($notifyStyle) {
		if($notifyStyle != 1) {
			$this->notifyStyle = 0;
		} else {
			$this->notifyStyle = 1;
		}
	}
}