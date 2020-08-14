<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new PointlockCreateRequest();
//赋值……
$orderStructList = new OrderStructList();
$orderStructList->setAccountSubAmt("22");
$orderStructList->setAccountType("8012");
$orderStructList->setBranch("11");
$orderStructList->setCmmdtyBrand("11");
$orderStructList->setCmmdtyCatalog("111");
$orderStructList->setCmmdtyCode("1");
$orderStructList->setCmmdtyGroup("11");
$orderStructList->setCmmdtyName("11");
$orderStructList->setOrderAmt("257.60");
$orderStructList->setOrderItemId("00116896028201");
$orderStructList->setOrderType("11");
$orderStructList->setOrderTypeDesc("11");
$orderStructList->setStore("11");
$orderStructList->setSupplierCode("11");
$orderStructList->setSupplierType("1");
$accountStruct = new AccountStruct();
$accountStruct->setOperator("OMS");
$accountStruct->setOrderStructList(array($orderStructList));
$accountStruct->setUniteOrderId("001168960282");
$req->setAccountStruct($accountStruct);
$req->setAppCode("mos");
$req->setBeginRecNum("0");
$req->setCustNum("6187218898");
$req->setEcoType("140000000010");
$req->setGetRecNum("10");
$req->setSourceChannel("11");
$req->setSourceSystemNo("11");
$req->setTranTimestamp("1562862504858");

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