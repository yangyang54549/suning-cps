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
$req = new CommodityeditCreateRequest();
//赋值……
$req->setAdvertise("xxx");
$req->setApplyCode("1be9df8f-94fb-43f9-962c-125bfc621a6e");
$req->setAppStoreCode("xx");
$attrChoiceInfo = new AttrChoiceInfo();
$attrChoiceInfo->setAttrChoiceCode("xxx");
$attrChoiceInfo->setAttrChoiceName("加冰");
$attrInfo = new AttrInfo();
$attrInfo->setAttrChoiceInfo(array($attrChoiceInfo));
$attrInfo->setAttrCode("xxx");
$attrInfo->setAttrIsMulti("0(0：否   1：是)");
$attrInfo->setAttrName("温度");
$req->setAttrInfo(array($attrInfo));
$req->setBrandCode("xxx");
$req->setBrgew("xx");
$req->setCategoryCode("xx");
$req->setClassifyCode("xxx");
$req->setCmBarcode("xx");
$req->setDeliveryAttr("01(01－常温 02－恒温 03－冷藏 04－冷冻)");
$req->setImmediateAppoint("01(01：支持  02：不支持)");
$req->setImmediateAppointTime("xxx");
$req->setOperType("00(00：新建 01：审核不通过时修改 02：编辑)");
$req->setPackingPrice("xxx");
$req->setPicUrl("http://xx/xx/xx/xx/x1.jpg(逗号隔开共5张)");
$req->setProductCode("xxx");
$req->setProductName("xxx");
$req->setPurchaseMin("1");
$req->setQty("xxx");
$req->setSecondClassifyCode("xxx");
$req->setSellHoursType("01");
$req->setSellPrice("xxx");
$req->setSellStatus("1(1：上架   2：下架)");
$req->setServiceTime("1-24");
$choiceInfo = new ChoiceInfo();
$choiceInfo->setChoiceCode("xxx");
$choiceInfo->setChoiceName("大杯");
$choiceInfo->setChoicePrice("1");
$standardInfo = new StandardInfo();
$standardInfo->setChoiceInfo(array($choiceInfo));
$standardInfo->setIsMulti("0(0：否   1：是)");
$standardInfo->setStandardCode("xxx");
$standardInfo->setStandardName("尺寸");
$req->setStandardInfo(array($standardInfo));
$req->setStoreCode("xxx");
$req->setSupplierCmCode("xxx");

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