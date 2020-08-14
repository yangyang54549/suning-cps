<?php
/**
 * 
 *
 * @author suning
 * @date   2019-10-18
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new MvstockReceiveRequest();
//赋值……
$req->setDeliNumber("123456");
$req->setDeliType("ZVIN");
$req->setSoCreatDate("20191010");
$req->setSoCreatTime("110120");
$cmmdtyMvStockInfoList = new CmmdtyMvStockInfoList();
$cmmdtyMvStockInfoList->setTaskNumber("123456");
$cmmdtyMvStockInfoList->setTaskLinage("123456");
$cmmdtyMvStockInfoList->setDeliSort("ELN");
$cmmdtyMvStockInfoList->setProvideAddressa("ZE99");
$cmmdtyMvStockInfoList->setStockAreaa("0001");
$cmmdtyMvStockInfoList->setProvideAddressb("ZE99");
$cmmdtyMvStockInfoList->setStockAreab("0001");
$cmmdtyMvStockInfoList->setCommodityCode("123456");
$cmmdtyMvStockInfoList->setCommodityDes("123456");
$cmmdtyMvStockInfoList->setDeliNum("1");
$req->setCmmdtyMvStockInfoList(array($cmmdtyMvStockInfoList));

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