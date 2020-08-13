<?php
/**
 * 
 *
 * @author suning
 * @date   2019-9-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CommoditybatchesAddRequest();
//赋值……
$commodityBatches = new CommodityBatches();
$commodityBatches->setBatchesCode("20190910");
$commodityBatches->setCommodityCode("1000001002");
$commodityBatches->setCommodityName("速效救心丸");
$commodityBatches->setDeleteType("D-删除，其他为空");
$commodityBatches->setExpiryDate("20190910");
$commodityBatches->setManufacturer("上海东海制药股份有限公司");
$commodityBatches->setOperationTime("20190910152633001");
$commodityBatches->setSpecifications("规格:10粒*6板/盒");
$commodityBatches->setStoreCode("9WF4");
$commodityBatches->setSupCommodityCode("20190719140000000");
$commodityBatches->setSupplierCode("10000197");
$req->setCommodityBatches(array($commodityBatches));

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