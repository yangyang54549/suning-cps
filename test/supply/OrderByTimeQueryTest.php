<?php
/**
 * 按照订单修改时间获取订单号
 *
 * @author suning
 * @date   2016-3-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
require_once(dirname(__FILE__) . '/../../Request/supply/OrderByTimeQueryRequest.php');
$req = new OrderByTimeQueryRequest();
//赋值……
$req->setStartTime("2015-06-18 00:00:00");
$req->setEndTime("2015-06-18 10:00:00");
$req->setOrderLineStatus("20");
$req->setPageNo("1");
$req->setPageSize("10");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "917f0b9a93b31393cf4d4816a84c2434";
$appSecret = "917f0b9a93b31393cf4d4816a84c2433";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>