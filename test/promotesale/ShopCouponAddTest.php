<?php
/**
 * 店铺优惠券活动新增
 *
 * @author suning
 * @date   2015-10-14
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
require_once(dirname(__FILE__) . '/../../Request/promotesale/ShopCouponAddRequest.php');
$req = new ShopCouponAddRequest();
//赋值……
$req->setActivityName("1");
$req->setEffectEndTime("1");
$req->setChannelInfo("1");
$req->setProductRange("1");
$productList = new ProductList();
$productList->setProductCode("1"); 
$req->setProductList(array($productList));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>