<?php
/**
 * 
 *
 * @author suning
 * @date   2020-3-30
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new CmmdtysearchbycategoryQueryRequest();
//赋值……
$req->setAppId("111111");
$highScreenItems = new HighScreenItems();
$highScreenItems->setHighScreenCode("00101");
$filters = new Filters();
$filters->setHighScreenGroupCode("001");
$filters->setHighScreenItems(array($highScreenItems));
$req->setFilters(array($filters));
$req->setPnumber("1");
$req->setPsize("10");
$req->setPurchaseType("1");
$req->setShowCategoryCode("01");
$req->setSort("1");
$req->setStoreCode("59021");

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