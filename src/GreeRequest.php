<?php
namespace xiaokus\aliyunopensdk;
include "AliyunSdk.php";
use Green\Request\V20160308\TextKeywordFilterRequest;
use Green\Request\V20160308\TextWordCorrectRequest;
class GreeRequest {
    private $iClientProfile;
    public function __construct($appkey,$secretkey) {
        $this->iClientProfile =  \DefaultProfile::getProfile("cn-hangzhou", $appkey, $secretkey);
    }
    public function checkKeyword($text){
            $client = new \DefaultAcsClient($this->iClientProfile);
            $request = new TextKeywordFilterRequest(); 
            $request->setText($text);
            $response = $client->getAcsResponse($request);
            return $response;
    }
    public function checkTextWord($text) {
          $client = new \DefaultAcsClient($this->iClientProfile);
            $request = new TextWordCorrectRequest(); 
            $request->setText($text);
            $response = $client->getAcsResponse($request);
            return $response;
  
    }
}
?>