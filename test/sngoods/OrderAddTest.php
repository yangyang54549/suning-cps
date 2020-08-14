<?php
/**
 * 
 *
 * @author suning
 * @date   2020-2-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new OrderAddRequest();
//赋值……
$req->setAddress("江苏省南京市雨花区软件大道舜天集团");
$req->setAmount("100.00");
$req->setChannelcode("1");
$req->setCityId("010");
$req->setCountyId("17");
$req->setHopeArrivalTime("2019-11-06-3");
$req->setInvoiceState("是否开发票：1=开；0=不开");
$req->setInvoiceTitle("发票抬头（发票类型为2电子发票时必传）");
$req->setInvoiceType("发票类型：1-增值税专票；；2-电子发票 ，（invoiceState是否开票=1时必填）");
$req->setMobile("15311351111");
$req->setPayment("支付方式：01-在线支付-易付宝； 02-企业汇款支付； 03-代扣支付");
$req->setProvinceId("010");
$req->setReceiverName("张三");
$req->setRemark("备注（不多于80个汉字）");
$req->setServFee("5.00");
$sku = new Sku();
$sku->setNum("10");
$sku->setSkuId("123456789");
$sku->setSupplierCode("0000000000");
$sku->setUnitPrice("10.00");
$req->setSku(array($sku));
$specialVatTicket = new SpecialVatTicket();
$specialVatTicket->setConsigneeAddress("收票件人地址（发票类型为1增值税专票必传）");
$specialVatTicket->setConsigneeMobileNum("收票件人电话（发票类型为1增值税专票必传）");
$specialVatTicket->setConsigneeName("收票件人姓名（发票类型为1增值税专票必传）");
$specialVatTicket->setRegAccount("23235254664336");
$specialVatTicket->setRegAdd("江苏省南京市雨花区软件大道舜天集团");
$specialVatTicket->setRegBank("453453434534354");
$specialVatTicket->setRegTel("18767890345");
$specialVatTicket->setTaxNo("纳税人识别号：数字或字母，字段长度为15、18、20位 ");
$req->setSpecialVatTicket($specialVatTicket);
$req->setTelephone("010-84728989");
$req->setTownId("03");
$req->setTradeNo("123456789");

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