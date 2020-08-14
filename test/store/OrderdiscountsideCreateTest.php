<?php
/**
 * 
 *
 * @author suning
 * @date   2019-3-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new OrderdiscountsideCreateRequest();
//赋值……
$req->setActivityName("中文zimu@#￥");
$req->setAllShopType("0");
$req->setAppStoreCode("S03017113");
$req->setBaseQuantifierType("1");
$req->setChannelInfo("55,56");
$req->setEndTime("2019-03-04 20:25:59");
$productList = new ProductList();
$productList->setProductCode("761134378");
$req->setProductList(array($productList));
$req->setRewardQuantifierType("1");
$ruleList = new RuleList();
$ruleList->setBaseAmount("9999");
$ruleList->setRewardAmount("999");
$req->setRuleList(array($ruleList));
$req->setStartTime("2019-03-04 20:23:00");
$req->setStoreCode("S03017113");

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