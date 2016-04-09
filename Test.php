<?php
namespace xiaokus\aliyunopensdk;
require("Autoloader.php");
use Green\Request\V20160308\TextKeywordFilterRequest;
$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "你自己的accessKeyId", "你自己的accessKeySecret"); // TODO
$client = new DefaultAcsClient($iClientProfile);
$request = new TextKeywordFilterRequest(); 
$request->setText('测试测试');
$response = $client->getAcsResponse($request);
print_r($response);
  
?>