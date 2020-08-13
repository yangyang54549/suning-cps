<?php
/**
 * 
 *
 * @author suning
 * @date   2020-7-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new IsvitemlistQueryRequest();
//赋值……
$req->setBrandCode("00000000");
$req->setCategoryCode("1");
$req->setCatentryType("01");
$req->setCmTitle("金圭内胆");
$req->setDelFlag("00");
$req->setEditBeginTime("最近编辑时间-开始时间");
$req->setEditEndTime("最近编辑时间-结束时间");
$req->setFcateCode("432556");
$req->setGroupCodes("12");
$req->setKeyWord("关键词");
$req->setMaxPrice("6.7");
$req->setMixPrice("1.2");
$req->setOrderType("1");
$req->setPage("1");
$req->setProductCode("100002496,100004184");
$req->setProductName("*");
$req->setSaleStatus("1,7,8");
$req->setScateCode("342224,5322");
$req->setSupplierCmmdtyCode("100000016,100000017,100000018");
$req->setTcateCode("432556");
$req->setPagenum("1");

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