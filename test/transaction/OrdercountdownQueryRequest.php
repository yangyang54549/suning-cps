<?php
/**
 * 倒计时获取
 *
 * @author 14042058
 * @date   2014-6-4
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../Request/transaction/OrdercountdownQueryRequest.php');
$req = new OrdercountdownQueryRequest();
//赋值……
$req->setOrderCode('1001172007');

$countDown = new CountDown();
$countDown->setProductCode('104021817');
// $countDown1 = new CountDown();
// $countDown1->setProductCode('104021817');

$countDowns = array($countDown,$countDown);
$req->setCountDown($countDowns);

$orderLineNumbers = new OrderLineNumbers();
$orderLineNumber = array('00003392157001','00003392157001');
$orderLineNumbers->setOrderLineNumber($orderLineNumber);
$req->setOrderLineNumbers($orderLineNumbers);

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>