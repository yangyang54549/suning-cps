<?php
/**
 * 
 *
 * @author suning
 * @date   2019-10-15
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new MainpicvideoUpdateRequest();
//赋值……
$req->setPicUrlEight("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlFive("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlFour("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlNine("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlOne("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlSeven("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlSix("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlTen("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlThree("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setPicUrlTwo("https://uimgpre.cnsuning.com/uimg/sop/commodity/380701634471150317364639_x.jpg");
$req->setProductCode("100024868");
$req->setSupplierCode("70076688");
$req->setVideoCode("1630383");

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