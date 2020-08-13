<?php
/**
 * 
 *
 * @author suning
 * @date   2019-3-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ItemAddRequest();
//赋值……
$req->setActivityPic("http://1.jpg");
$req->setBarpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setBrandCode("A101");
$req->setCategoryCode("R6101011");
$parsX = new ParsX();
$parsX->setParCodeX("G00001");
$parsX->setParValueX("红色");
$childItem = new ChildItem();
$childItem->setBarcode("11");
$childItem->setBarpicX("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$childItem->setItemCodeX("子商品商家商品编码");
$childItem->setParsX(array($parsX));
$childItem->setPriceX("1.11");
$childItem->setSupplierImgAUrl("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setChildItem(array($childItem));
$req->setCmTitle("商品标题");
$detailModule = new DetailModule();
$detailModule->setContent("模块化详情内容");
$detailModule->setModuleId("R2701001_1");
$detailModule->setModuleName("优惠信息");
$detailModule->setNum("1");
$detailModule->setType("cat_mod");
$req->setDetailModule(array($detailModule));
$req->setIntroduction("电脑详情");
$req->setItemCode("商家商品编码");
$req->setLtpic("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setMainPicVideoCode("108625");
$packingList = new PackingList();
$packingList->setPackingListName("电脑");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$pars = new Pars();
$pars->setParCode("cm_model");
$pars->setParValue("1");
$req->setPars(array($pars));
$req->setPrice("100.11");
$req->setProductName("商品名称");
$req->setSellPoint("卖点");
$req->setSupplierImg1Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg2Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg3Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg4Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setSupplierImg5Url("http://10.19.95.100/uimg/sop/commodity/181223352817344502976922_x.jpg");
$req->setVideoCode("108625");

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