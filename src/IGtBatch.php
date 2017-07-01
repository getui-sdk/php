<?php
namespace GetuiSDK;

class IGtBatch
{
    var $batchId;
    var $innerMsgList = array();
    var $seqId = 0;
    var $APPKEY;
    var $push;
    var $lastPostData;

    public function __construct($appkey, $push)
    {
        $this->APPKEY = $appkey;
        $this->push = $push;
        $this->batchId = uniqid();

    }

    public function getBatchId()
    {
        return $this->batchId;
    }

    public function add($message, $target)
    {
        if ($this->seqId >= 5000) {
            throw new Exception("Can not add over 5000 message once! Please call submit() first.");
        } else {
            $this->seqId += 1;
            $innerMsg = new SingleBatchItem();
            $innerMsg->set_seqId($this->seqId);
            $innerMsg->set_data($this->createSingleJson($message, $target));
            array_push($this->innerMsgList, $innerMsg);
        }
        return $this->seqId . "";
    }

    public function createSingleJson($message, $target)
    {
        $params = array();
        $params["action"] = "pushMessageToSingleAction";
        $params["appkey"] = $this->APPKEY;
        $params["clientData"] = base64_encode($message->get_data()->get_transparent());
        $params["transmissionContent"] = $message->get_data()->get_transmissionContent();
        $params["isOffline"] = $message->get_isOffline();
        $params["offlineExpireTime"] = $message->get_offlineExpireTime();
        // 增加pushNetWorkType参数(0:不限;1:wifi;2:4G/3G/2G)
        $params["pushNetWorkType"] = $message->get_pushNetWorkType();
        $params["appId"] = $target->get_appId();
        $params["clientId"] = $target->get_clientId();
        $params["alias"] = $target->get_alias();
        // 默认都为消息
        $params["type"] = 2;
        $params["pushType"] = $message->get_data()->get_pushType();
        return json_encode($params);
    }

    public function submit()
    {
        $requestId = uniqid();
        $data = array();
        $data["appkey"]=$this->APPKEY;
        $data["serialize"] = "pb";
        $data["async"] = GTConfig::isPushSingleBatchAsync();
        $data["action"] = "pushMessageToSingleBatchAction";
        $singleBatchRequest = new SingleBatchRequest();
        $singleBatchRequest->set_batchId($this->batchId);
        foreach ($this->innerMsgList as $index => $innerMsg) {
            $singleBatchRequest->add_batchItem();
            $singleBatchRequest->set_batchItem($index, $innerMsg);
        }
        $data["singleDatas"] = base64_encode($singleBatchRequest->SerializeToString());
        $this->seqId = 0;
        $this->innerMsgList = array();
        $this->lastPostData = $data;
        $result = $this->push->httpPostJSON(null, $data, true);
        return $result;
    }

    public function retry()
    {
        $result = $this->push->httpPostJSON(null, $this->lastPostData, true);
        return $result;
    }

    public function setApiUrl($apiUrl) {
    }
}