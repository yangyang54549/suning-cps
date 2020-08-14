<?php
/**
 * 任务单物流详情查询接口
 *
 * @author suning
 * @date   2015-11-18
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
require_once(dirname(__FILE__) . '/../../Request/selfmarket/LogisticsDetailGetRequest.php');
$req = new LogisticsDetailGetRequest();
//赋值……
$req->setExpressCompanyCode("SN2");
$req->setExpressNo("00620000000061456000");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://opensit.cnsuning.com/api/http/sopRequest";
$appKey = "1579d631e43245840c515ffffdaea0a6";
$appSecret = "165bb7a9d57c4feca55c719893d592b0";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>