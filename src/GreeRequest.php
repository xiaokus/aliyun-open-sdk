<?php
namespace xiaokus\aliyunopensdk;
include "TopSdk.php";
use Green\Request\V20160308\TextKeywordFilterRequest;
class GreeRequest {

    private $iClientProfile;
    public function __construct($appkey,$secretkey) {
        $this->iClientProfile =  DefaultProfile::getProfile("cn-hangzhou", $appkey, $secretkey);
    }
    public checkTest($text){
            $client = new DefaultAcsClient($this->iClientProfile);
            $request = new TextKeywordFilterRequest(); 
            $request->setText($text);
            $response = $client->getAcsResponse($request);
            return $response;
    }
}
?>