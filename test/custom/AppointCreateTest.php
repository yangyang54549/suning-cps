<?php
/**
 * 
 *
 * @author suning
 * @date   2019-12-13
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new AppointCreateRequest();
//赋值……
$req->setActionEndTime("2019-10-01 00:00:01");
$req->setActionId("2019102800001");
$req->setActionName("预约活动名称");
$req->setActionStartTime("2019-10-01 00:00:01");
$req->setActionType("0:普通预约");
$req->setAdapteTerminal("1：PC，2：移动，3：PC+移动");
$req->setEnrollInfoCode("SU191028101810140135");
$req->setExcludeCitys("9017,9264");
$goodsList = new GoodsList();
$goodsList->setAppointPrice("3999");
$goodsList->setCatengrpCode("000000000123456788");
$goodsList->setColor("红色");
$goodsList->setDefaultGoodsFlags("1");
$goodsList->setMsgContent("您好，您预约的XXX将于XXX开始抢购......");
$goodsList->setPartName("这是商品名称");
$goodsList->setPartnumber("000000000123456789");
$goodsList->setPersonBuyLimit("2");
$goodsList->setPrice("3899");
$goodsList->setPriceLabel("3？？9");
$goodsList->setStandard("42码");
$goodsList->setTotalLimit("10000");
$req->setGoodsList(array($goodsList));
$goodsSubList = new GoodsSubList();
$goodsSubList->setCount("2");
$goodsSubList->setSubAppointPrice("500");
$goodsSubList->setSubPartName("这是子商品名称");
$goodsSubList->setSubPartNumber("000000000123456789");
$goodsSubList->setSubPrice("399");
$goodsSubList->setSubTextPrice("299");
$req->setGoodsSubList(array($goodsSubList));
$req->setNoticePhone("11111111111");
$req->setOperateType("01：新建，02：修改，03：停用");
$req->setOperateUser("工号");
$req->setOtherTerminalSale("0：否，1：是");
$req->setPartType("00：普通单商品，01：通子码商品，02：蔟商品，03：套餐商品");
$req->setPhoneShareContent("***商品正在做预约");
$req->setPhoneShareImgUrl("url链接");
$req->setPhoneShareTitle("我在苏宁易购预约了商品");
$req->setPhoneShareUrl("url链接");
$req->setPurchaseEndTime("2019-10-01 00:00:01");
$req->setPurchaseStartTime("2019-10-01 00:00:01");
$req->setReceiveSys("AAAA");
$req->setScheduleEndTime("2019-10-01 00:00:01");
$req->setScheduleStartTime("2019-10-01 00:00:01");
$req->setSendScalperMsg("0：不发送，1：发送");
$req->setSendUserMsg("0：不发送，1：发送");
$req->setSupervipPurchaseStartTime("2019-10-01 00:00:01");
$req->setTicketResaleStartTime("2019-10-01 00:00:01");
$req->setTransitDate("2019-10-01 00:00:01");
$req->setTransitFlag("2:否，1:是");
$req->setVendorCode("0000000000");
$req->setVendorName("商家名称");
$req->setVendorType("00-自营,10-代表C模式,20-代表SWL模式,30-代表海外购模式,50-线上联营");
$req->setVersionNumber("1");

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