<?php
/**
 * 类目主数据查询接口
 *
 * @author suning
 * @date   2016-2-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
require_once(dirname(__FILE__) . '/../../Request/fourps/CategoryMasDataQueryRequest.php');
$req = new CategoryMasDataQueryRequest();
//赋值……
$req->setCategoryName("男士");
$req->setPageNo("1");
$req->setPageSize("10");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "e38f48178f9260140bb974d7949f54eb";
$appSecret = "e754e1b2da9efa2cdea1cb1873161957";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>