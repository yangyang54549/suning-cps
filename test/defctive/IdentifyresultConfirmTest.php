<?php
/**
 * 
 *
 * @author suning
 * @date   2019-12-13
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new IdentifyresultConfirmRequest();
//赋值……
$req->setIsAll("1");
$imperfectProjectList = new ImperfectProjectList();
$imperfectProjectList->setImperfectProjectNo("1");
$imperfectProjectList->setImperfectProjectValue("01");
$basicProjecList = new BasicProjecList();
$basicProjecList->setBasicProjecNo("1");
$basicProjecList->setBasicProjecValue("01");
$blpList = new BlpList();
$blpList->setAbnormalReport("00");
$blpList->setBasicProjecList(array($basicProjecList));
$blpList->setImperfectGrade("S");
$blpList->setImperfectProjectList(array($imperfectProjectList));
$blpList->setUpdateTime("2019-11-26 00:00:00");
$blpList->setViewNum("0010");
$serialList = new SerialList();
$serialList->setBlpList(array($blpList));
$serialList->setItemNo("1");
$serialList->setSerialNum("B000001");
$req->setSerialList(array($serialList));
$req->setTripCode("SFJD0000000515");

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