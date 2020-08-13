<?php
/**
 * 
 *
 * @author suning
 * @date   2019-6-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ApplyrepairgoodsCreateRequest();
//赋值……
$req->setAddress("望京东路8号");
$req->setCityId("025");
$req->setCountyId("01");
$req->setMobPhoneNum("13088888888");
$req->setNum("1");
$req->setOrderId("1418628119786");
$req->setOrderItemId("141862811978601");
$req->setOrderMemo("洗衣机滚筒电机损坏");
$req->setPhoneNum("010-88888888");
$req->setProvinceId("12");
$req->setReceiverName("张三");
$req->setServiceTime("20180101180000");
$req->setSkuId("3454343545");
$req->setSrvMemo("带一根1米长水管");
$req->setTownId("90");

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