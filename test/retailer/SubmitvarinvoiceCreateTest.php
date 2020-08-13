<?php
/**
 * 
 *
 * @author suning
 * @date   2020-3-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new SubmitvarinvoiceCreateRequest();
//赋值……
$req->setAppId("111111");
$req->setSnCustNum("111111");
$req->setSubmitFlag("submitFlag");
$vatAddressInfoDTO = new VatAddressInfoDTO();
$vatAddressInfoDTO->setAdditionalFour("additionalFour");
$vatAddressInfoDTO->setAdditionalOne("additionalOne");
$vatAddressInfoDTO->setAdditionalThree("additionalThree");
$vatAddressInfoDTO->setAdditionalTwo("additionalTwo");
$vatAddressInfoDTO->setAddrNum("addrNum");
$vatAddressInfoDTO->setAddrType("addrType");
$vatAddressInfoDTO->setCity("city");
$vatAddressInfoDTO->setCntctPointName("cntctPointName");
$vatAddressInfoDTO->setCountry("country");
$vatAddressInfoDTO->setCreateTime("createTime");
$vatAddressInfoDTO->setDetailAddress("detailAddress");
$vatAddressInfoDTO->setMobileNumOne("mobileNumOne");
$vatAddressInfoDTO->setMobileNumTwo("mobileNumTwo");
$vatAddressInfoDTO->setPostCode("postCode");
$vatAddressInfoDTO->setPreferFlag("preferFlag");
$vatAddressInfoDTO->setState("state");
$vatAddressInfoDTO->setStreet("street");
$vatAddressInfoDTO->setTeleAreaCode("teleAreaCode");
$vatAddressInfoDTO->setTeleCntryCode("teleCntryCode");
$vatAddressInfoDTO->setTeleExtn("teleExtn");
$vatAddressInfoDTO->setTeleNum("teleNum");
$vatAddressInfoDTO->setTown("town");
$vatAddressInfoDTO->setUpdateTime("updateTime");
$req->setVatAddressInfoDTO($vatAddressInfoDTO);
$vatInvoiceInfoDTO = new VatInvoiceInfoDTO();
$vatInvoiceInfoDTO->setBankAcctPermitId("bankAcctPermitId");
$vatInvoiceInfoDTO->setBankDepositAcnt("bankDepositAcnt");
$vatInvoiceInfoDTO->setBankName("bankName");
$vatInvoiceInfoDTO->setCertNo("certNo");
$vatInvoiceInfoDTO->setCertType("certType");
$vatInvoiceInfoDTO->setOrgAddr("orgAddr");
$vatInvoiceInfoDTO->setOrgName("orgName");
$vatInvoiceInfoDTO->setOrgTel("orgTel");
$vatInvoiceInfoDTO->setTaxPayerCertId("taxPayerCertId");
$vatInvoiceInfoDTO->setTaxRegCertId("taxRegCertId");
$vatInvoiceInfoDTO->setVatConsignId("vatConsignId");
$vatInvoiceInfoDTO->setVatQlfctStat("vatQlfctStat");
$vatInvoiceInfoDTO->setVatQlfctStatUpdRsn("vatQlfctStatUpdRsn");
$vatInvoiceInfoDTO->setVatQlfctStatUpdTm("vatQlfctStatUpdTm");
$req->setVatInvoiceInfoDTO($vatInvoiceInfoDTO);

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