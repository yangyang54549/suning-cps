<?php
/**
 * 
 *
 * @author suning
 * @date   2018-9-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new StoreAddRequest();
//赋值……
$req->setBranchStoreName("新街口店");
$req->setDayHours("07:00-19:00");
$req->setLatitude("34.82984");
$req->setLongitude("113.683856");
$req->setOwnstoreCode("长度0-50位汉字");
$req->setStoreAdd("南京徐庄软件园苏宁易购总部");
$req->setStoreArea("02501");
$req->setStoreCondues("最大500汉字");
$req->setStoreName("苏宁易购门店");
$req->setStoreInProVince("100");
$req->setStoreInCity("025");
$req->setStoreTel("0731-83521795,18512580194,025-66778899");
$req->setStoreStatus("1");
$req->setStorePict("https://uimgpre.cnsuning.com/uimg/sop/commodity/129309315134056997373040.png");
$req->setStoreEpp("15861804398");
$req->setStoreEppPayFlag("Y");
$req->setStoreEppPay("15861804398");
$req->setStoreSend("Y");

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