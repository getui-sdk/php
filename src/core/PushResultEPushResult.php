<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\Type\PBEnum;

class PushResultEPushResult extends PBEnum
{
  const successed_online  = 0;
  const successed_offline  = 1;
  const successed_ignore  = 2;
  const failed  = 3;
  const busy  = 4;
  const success_startBatch  = 5;
  const success_endBatch  = 6;
}
