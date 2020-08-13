<?php
/**
 * 
 *
 * @author suning
 * @date   2019-5-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ExpenseorderConfirmRequest();
//赋值……
$detail = new Detail();
$detail->setBlanceAmount("100.10");
$detail->setBlanceQty("2");
$detail->setBlanceSalesAmount("100");
$detail->setItemCode("625173988");
$detail->setRelatedShop("7153");
$detail->setRelatedWareHouse("D025");
$req->setDetail(array($detail));
$head = new Head();
$head->setApplyCode("70891182");
$head->setComments("修改金额。");
$head->setModelType("1");
$head->setOperateType("1");
$head->setSettlementDate("2018-10-01");
$head->setSettlementType("1");
$head->setSupplierCheckAmount("100.01，");
$head->setSupplierCheckQty("1");
$head->setSupplierCode("10000001");
$req->setHead($head);

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