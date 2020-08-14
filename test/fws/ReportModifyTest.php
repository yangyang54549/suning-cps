<?php
/**
 * 
 *
 * @author suning
 * @date   2019-8-14
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new ReportModifyRequest();
//赋值……
$req->setDescribed("123");
$req->setFileName("123");
$req->setIsPass("1");
$req->setItemCode("123456");
$req->setItemDesc("天然、安全、健康");
$req->setItemName("农夫山泉矿泉水");
$req->setMemo("123");
$req->setOrderDetailId("S01234567890");
$req->setProductLink("http://product.suning.com/0000000000/10552780303.html");
$req->setQtCode("QT201501019876543210");
$req->setQtExpiry("2015-01-01");
$req->setQtFile("http://image.suning.cn/uimg/API/KFFW/154019177964148518.jpg");
$req->setQtOrderCode("S01234567890");
$req->setQtOrderStatus("3");
$req->setQtStandard("GB2001");
$req->setQtType("1");

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