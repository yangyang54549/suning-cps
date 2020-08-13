<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-13
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new SignatureAddRequest();
//赋值……
$req->setAccessKeyId("1234736185885548544");
$req->setAccessSign("e6a73a692e8235cf23c576d4dc4db6db");
$req->setBusinessLincenseFileContent("212h97qwg");
$req->setBusinessLincenseFileSuffix("jpg");
$req->setCertificateType("0");
$req->setName("苏宁");
$req->setOrgCodeFileContent("2huhd2q1123wsa");
$req->setOrgCodeFileSuffix("jpg");
$req->setRemark("签名自用");
$req->setScreenshotFileContent("26389306gs5");
$req->setScreenshotFileSuffix("jpg");
$req->setSourceName("0");
$req->setSubject("0");
$req->setTaxationFileContent("2323rds25rsd");
$req->setTaxationFileSuffix("jpg");
$req->setThreeInOneFileContent("121ee4df4f436");
$req->setThreeInOneFileSuffix("jpg");
$req->setTimeStamp("1584414239000");
$req->setUserId("701248376");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
$reqJson = getReqJson($req);
print_r("请求报文:\n".$reqJson);
print_r("\n返回响应报文:\n".$resp);

function getReqJson($req){
	$paramsArray = $req -> getApiParams();
	if(empty($paramsArray)){
		$paramsArray = '';
	}
	$paramsArray = array('sn_request' => array('sn_body' => array(
		"{$req -> getBizName()}" => $paramsArray
	)));
	return json_encode($paramsArray);
}
?>