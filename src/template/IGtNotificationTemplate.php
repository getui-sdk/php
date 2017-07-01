<?php 
namespace GetuiSDK\IGeTui\Template;

use GetuiSDK\IGeTui\Core\ActionChain;
use GetuiSDK\IGeTui\Core\ActionChainType;
use GetuiSDK\IGeTui\Core\AppStartUp;
use GetuiSDK\IGeTui\Core\InnerFiled;
use GetuiSDK\IGeTui\Core\InnerFiledType;

class IGtNotificationTemplate extends IGtBaseTemplate
{

	var $text;
	var $title;
	var $logo;
	var $logoURL;
	var $transmissionType;
	var $transmissionContent;
	var $isRing;
	var $isVibrate;
	var $isClearable;
	var $notifyStyle = 0;


	public function  getActionChain() {

		$actionChains = array();

		// 设置actionChain
		$actionChain1 = new ActionChain();
		$actionChain1->setActionId(1);
		$actionChain1->setType(ActionChainType::refer);
		$actionChain1->setNext(10000);

		//通知
		$actionChain2 = new ActionChain();
		$actionChain2->setActionId(10000);
		$actionChain2->setType(ActionChainType::notification);
		$actionChain2->setStype("notification");
		
		$f_text = new InnerFiled();
		$f_text->setKey("text");
		$f_text->setVal($this->text);
		$f_text->setType(InnerFiledType::str);
		$actionChain2->setField(0,$f_text);
		
		$f_title = new InnerFiled();
		$f_title->setKey("title");
		$f_title->setVal($this->title);
		$f_title->setType(InnerFiledType::str);
		$actionChain2->setField(1,$f_title);
		
		$f_logo = new InnerFiled();
		$f_logo->setKey("logo");
		$f_logo->setVal($this->logo);
		$f_logo->setType(InnerFiledType::str);
		$actionChain2->setField(2,$f_logo);
		
		$f_logoURL = new InnerFiled();
		$f_logoURL->setKey("logo_url");
		$f_logoURL->setVal($this->logoURL);
		$f_logoURL->setType(InnerFiledType::str);
		$actionChain2->setField(3,$f_logoURL);
		
		$f_notifyStyle = new InnerFiled();
		$f_notifyStyle->setKey("notifyStyle");
		$f_notifyStyle->setVal(strval($this->notifyStyle));
		$f_notifyStyle->setType(InnerFiledType::str);
		$actionChain2->setField(4,$f_notifyStyle);
		
		$f_isRing = new InnerFiled();
		$f_isRing->setKey("is_noring");
		$f_isRing->setVal(!$this->isRing ? "true" : "false");
		$f_isRing->setType(InnerFiledType::bool);
		$actionChain2->setField(5,$f_isRing);
		
		$f_isVibrate = new InnerFiled();
		$f_isVibrate->setKey("is_novibrate");
		$f_isVibrate->setVal(!$this->isVibrate ? "true" : "false");
		$f_isVibrate->setType(InnerFiledType::bool);
		$actionChain2->setField(6,$f_isVibrate);
		
		$f_isClearable = new InnerFiled();
		$f_isClearable->setKey("is_noclear");
		$f_isClearable->setVal(!$this->isClearable ? "true" : "false");
		$f_isClearable->setType(InnerFiledType::bool);
		$actionChain2->setField(7,$f_isClearable);
		
		$actionChain2->setNext(10010);
		
		//goto
		$actionChain3 = new ActionChain();
		$actionChain3->setActionId(10010);
		$actionChain3->setType(ActionChainType::refer);
		$actionChain3->setNext(10030);
	

		//appStartUp
		$appStartUp = new AppStartUp();
 		$appStartUp->setAndroid("");
		$appStartUp->setSymbia("");
		$appStartUp->setIos("");

		//启动app
		$actionChain4 = new ActionChain();
		$actionChain4->setActionId(10030);
		$actionChain4->setType(ActionChainType::startapp);
		$actionChain4->setAppid("");
		$actionChain4->setAutostart($this->transmissionType == '1'? true : false);
		$actionChain4->setAppstartupid($appStartUp);
		$actionChain4->setFailedAction(100);
		$actionChain4->setNext(100);


		//结束
		$actionChain5 = new ActionChain();
		$actionChain5->setActionId(100);
		$actionChain5->setType(ActionChainType::eoa);
 
		array_push($actionChains, $actionChain1,$actionChain2,$actionChain3,$actionChain4,$actionChain5);

		return $actionChains;
	}

	function  getTransmissionContent() {
		return $this->transmissionContent;
	}
	
	function  getPushType() {
		return 'NotifyMsg';
	}

	function  setText($text) {
		$this->text = $text;
	}

	function  setTitle($title) {
		$this->title = $title;
	}

	function  setLogo($logo) {
		$this->logo = $logo;
	}

	function  setLogoURL($logoURL) {
		$this->logoURL = $logoURL;
	}
	
	function  setTransmissionType($transmissionType) {
		$this->transmissionType = $transmissionType;
	}

	function  setIsRing($isRing) {
		$this->isRing = $isRing;
	}

	function  setIsVibrate($isVibrate) {
		$this->isVibrate = $isVibrate;
	}

	function  setIsClearable($isClearable) {
		$this->isClearable = $isClearable;
	}

	function  setTransmissionContent($transmissionContent) {
		$this->transmissionContent = $transmissionContent;
	}

	function  setNotifyStyle($notifyStyle) {
		if($notifyStyle != 1){
			$this->notifyStyle = 0;
		} else {
			$this->notifyStyle = 1;
		}
	}
}