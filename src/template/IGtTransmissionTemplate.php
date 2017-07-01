<?php 
namespace GetuiSDK\IGeTui\Template;

use GetuiSDK\IGeTui\Core\ActionChain;
use GetuiSDK\IGeTui\Core\ActionChainType;
use GetuiSDK\IGeTui\Core\AppStartUp;

class IGtTransmissionTemplate extends IGtBaseTemplate
{

	var $transmissionType;
	var $transmissionContent;

	public function  getActionChain() {

		$actionChains = array();

	
		// 设置actionChain
		$actionChain1 = new ActionChain();
		$actionChain1->setActionId(1);
		$actionChain1->setType(ActionChainType::refer);
		$actionChain1->setNext(10030);
	
		//appStartUp
		$appStartUp = new AppStartUp();
 		$appStartUp->setAndroid("");
		$appStartUp->setSymbia("");
		$appStartUp->setIos("");

		//启动app
		$actionChain2 = new ActionChain();
		$actionChain2->setActionId(10030);
		$actionChain2->setType(ActionChainType::startapp);
		$actionChain2->setAppid("");
		$actionChain2->setAutostart($this->transmissionType == '1'? true : false);
		$actionChain2->setAppstartupid($appStartUp);
		$actionChain2->setFailedAction(100);
		$actionChain2->setNext(100);

		//结束
		$actionChain3 = new ActionChain();
		$actionChain3->setActionId(100);
		$actionChain3->setType(ActionChainType::eoa);

 
		array_push($actionChains, $actionChain1, $actionChain2, $actionChain3);

		return $actionChains;
	}

	function  getTransmissionContent() {
		return $this->transmissionContent;
	}
	
	function  getPushType() {
		return 'TransmissionMsg';
	}


	function  setTransmissionType($transmissionType) {
		$this->transmissionType = $transmissionType;
	}

	function  setTransmissionContent($transmissionContent) {
		$this->transmissionContent = $transmissionContent;
	}
}