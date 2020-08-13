<?php
/**
 * 
 *
 * @author suning
 * @date   2018-12-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ChanneluserCreateRequest();
//赋值……
$req->setAddress("江苏省南京市xxx区xxx街道");
$req->setChannelCode("10000000");
$req->setContractPhone("1709258****");
$req->setCountyCode("025");
$req->setCustName("张三");
$req->setFee("6800");
$req->setIccid("89860314557310951547");
$req->setIdCardNum("320311********4613");
$req->setIdType("1");
$req->setImsi("460037441204999");
$req->setMainOfferId("55100068");
$req->setOpId("10000");
$req->setOrgId("200000");
$req->setPhoneNumber("1707199****");
$req->setRegionCode("025");
$req->setSystemNo("12");
$req->setTransactionID("10090375102018010100000000");

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