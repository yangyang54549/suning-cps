<?php
/**
 * 销售准备API - 批量查询销售范围关联商品组
 *
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../Request/sale/SaleareatemplateitemgroupQueryRequest.php');

$req = new SaleareatemplateitemgroupQueryRequest(); 
$req->setPageNo("1");
$req->setPageSize("10");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>