<?php
/**
 * 
 *
 * @author suning
 * @date   2019-3-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new SspriceCreateRequest();
//赋值……
$req->setActivityChannel("32,36,1");
$req->setActivityCode("操作类型为修改时，必输");
$req->setActivityName("操作类型为新增时，必填");
$req->setAppStoreCode("1111111");
$req->setEndTime("操作类型为新增时，必填");
$req->setOperationType("操作类型");
$req->setPriceType("3=折扣；默认值3");
$productList = new ProductList();
$productList->setProductCode("1111111111");
$productList->setProductDiscount("1~9.99");
$productList->setProductOperateType("1=新增 2=修改 3=删除");
$req->setProductList(array($productList));
$req->setStartTime("操作类型为新增时，必填");
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