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
$req = new SupplierplanAddRequest();
//赋值……
$dataList = new DataList();
$dataList->setPlanCreateDate("2019/7/17");
$dataList->setPlantCode("D025");
$dataList->setPlantName("南京仓");
$dataList->setProductCode("102536103");
$dataList->setProductName("海信空调");
$dataList->setPurchaseQty("100");
$dataList->setSnProductCode("124521");
$dataList->setWeekEndDate("2019/7/17");
$dataList->setWeekPlanDate("2018M8W2");
$dataList->setWeekPlanNo("W000000001");
$dataList->setWeekStartDate("2019/7/17");
$req->setDataList(array($dataList));
$req->setSupplierCode("10000197");

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