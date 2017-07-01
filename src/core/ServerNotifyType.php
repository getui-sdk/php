<?php
namespace GetuiSDK\IGeTui\Core;

use GetuiSDK\IGeTui\Protobuf\Type\PBEnum;

class ServerNotifyType extends PBEnum
{
  const normal  = 0;
  const serverListChanged  = 1;
  const exception  = 2;
}