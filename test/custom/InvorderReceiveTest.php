<?php
/**
 * 
 *
 * @author suning
 * @date   2020-5-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new InvorderReceiveRequest();
//赋值……
$req->setBuySign("1");
$req->setClientAddress("xx市xx区");
$req->setClientBank("中国银行");
$req->setClientBankNum("622848039260099");
$req->setClientEmail("xxx@163.com");
$req->setClientName("个人");
$req->setClientPhone("18551620000");
$req->setClientTaxNum("622848039260099");
$req->setClientTel("025-8888");
$req->setClientType("01");
$cmmdtys = new Cmmdtys();
$cmmdtys->setGoodContainTaxSign("1");
$cmmdtys->setGoodCountAmount("1000");
$cmmdtys->setGoodDeductions("-10");
$cmmdtys->setGoodDiscount("5");
$cmmdtys->setGoodGovSign("0");
$cmmdtys->setGoodId("000101");
$cmmdtys->setGoodModel("P");
$cmmdtys->setGoodNum("10");
$cmmdtys->setGoodPrice("100.00");
$cmmdtys->setGoodRate("0.16");
$cmmdtys->setGoodsCode("600012346");
$cmmdtys->setGoodSerialNum("0001");
$cmmdtys->setGoodsName("空调");
$cmmdtys->setGoodSpecialSign("不征税");
$cmmdtys->setGoodTaxAmount("160");
$cmmdtys->setGoodTaxCode("654334");
$cmmdtys->setGoodUnit("台");
$cmmdtys->setGoodZeroTaxSign("0");
$req->setCmmdtys(array($cmmdtys));
$req->setCountMoney("100");
$req->setDetialSign("0");
$req->setExtendField("xx");
$req->setHowtoPrint("0");
$req->setOldTicketCode("150003528888");
$req->setOldTicketNum("62786934");
$req->setOrderNum("32018091901");
$req->setOrderNumPwd("1B0A2C64C2A1A7FAB7DEBE25FED8B742");
$req->setOrderReturnNum("32018091901");
$req->setOrderTime("2018-09-28 14:26:11");
$req->setPayeeName("李四");
$req->setPlatformCoding("70069114");
$req->setReceiveMode("02");
$req->setRemark("xx");
$req->setReviwerName("李五");
$req->setSaleAddress("南京市玄武区苏宁大道1号");
$req->setSaleBank("中国银行");
$req->setSaleBankNum("622848039260099");
$req->setSaleName("南京苏宁软件技术有限公司");
$req->setSaleTaxNum("140301193302051282");
$req->setSaleTel("025-66996699");
$req->setSpecialRedSign("0");
$req->setSysSource("例如：ZY：自营");
$req->setTicketName("张三");
$req->setTicketType("1");

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