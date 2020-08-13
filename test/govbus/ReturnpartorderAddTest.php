<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-2
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ReturnpartorderAddRequest();
//赋值……
$aftersaleAddress = new AftersaleAddress();
$aftersaleAddress->setAddress("广顺北大街21号院108楼208室");
$aftersaleAddress->setCityId("010");
$aftersaleAddress->setCountyId("01001");
$aftersaleAddress->setProvinceId("01");
$aftersaleAddress->setTownId("0100102");
$req->setAftersaleAddress($aftersaleAddress);
$req->setAftersaleName("李*");
$req->setAftersalePhone("13333333333");
$req->setBankName("01");
$req->setCardNumber("1000406047888888");
$req->setCardUsername("张**");
$req->setOrderId("100000100025");
$skus = new Skus();
$skus->setNum("2");
$skus->setReason("0101");
$skus->setReasonDetails("退货");
$skus->setSkuId("121345077");
$req->setSkus(array($skus));

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