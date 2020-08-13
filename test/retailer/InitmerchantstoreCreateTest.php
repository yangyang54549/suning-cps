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
$req = new InitmerchantstoreCreateRequest();
//赋值……
$req->setAppId("111111");
$req->setCoperator("操作人");
$dyttInitMerchantInfoDTO = new DyttInitMerchantInfoDTO();
$dyttInitMerchantInfoDTO->setAcctNo("086631");
$dyttInitMerchantInfoDTO->setCityCode("025");
$dyttInitMerchantInfoDTO->setCityName("南京市");
$dyttInitMerchantInfoDTO->setCompanyAddr("苏宁大道1号");
$dyttInitMerchantInfoDTO->setCompanyName("苏宁");
$dyttInitMerchantInfoDTO->setCompanyType("1");
$dyttInitMerchantInfoDTO->setDistrictCode("01");
$dyttInitMerchantInfoDTO->setDistrictName("玄武区");
$dyttInitMerchantInfoDTO->setGeneralTaxpayerFlag("0");
$dyttInitMerchantInfoDTO->setIdcardFrontUrl("http://11.jpg");
$dyttInitMerchantInfoDTO->setIdcardReverseUrl("http://22.jpg");
$dyttInitMerchantInfoDTO->setLegalIdcardNo("3201225546548844");
$dyttInitMerchantInfoDTO->setLegalPerson("法人姓名");
$dyttInitMerchantInfoDTO->setLicenseNo("0265454651544x4");
$dyttInitMerchantInfoDTO->setLicenseUrl("http://11.jpg");
$dyttInitMerchantInfoDTO->setOpeningBankAccount("6254540546545450");
$dyttInitMerchantInfoDTO->setOpeningBankName("中国银行");
$dyttInitMerchantInfoDTO->setProvCode("100");
$dyttInitMerchantInfoDTO->setProvName("江苏省");
$dyttInitMerchantInfoDTO->setRegistPhone("254544");
$dyttInitMerchantInfoDTO->setSnCustNum("7017963441");
$dyttInitMerchantInfoDTO->setTownCode("99");
$dyttInitMerchantInfoDTO->setTownName("全区");
$req->setDyttInitMerchantInfoDTO($dyttInitMerchantInfoDTO);
$dyttInitSotreInfoDTO = new DyttInitSotreInfoDTO();
$dyttInitSotreInfoDTO->setAreaCode("025");
$dyttInitSotreInfoDTO->setBusinessType("1");
$dyttInitSotreInfoDTO->setCompanyCode("5016");
$dyttInitSotreInfoDTO->setContactPerson("张三");
$dyttInitSotreInfoDTO->setContactPhone("16546545");
$dyttInitSotreInfoDTO->setContractStartDate("2020-02-23");
$dyttInitSotreInfoDTO->setDetailAddress("苏宁大道1号");
$dyttInitSotreInfoDTO->setIsManage("Y");
$dyttInitSotreInfoDTO->setRegionCode("10001");
$dyttInitSotreInfoDTO->setResponsiblePerson("筹建负责人");
$dyttInitSotreInfoDTO->setResponsiblePhone("1654561544121");
$dyttInitSotreInfoDTO->setSnStoreCode("90N3");
$dyttInitSotreInfoDTO->setStartBusinessDate("2020-03-23");
$dyttInitSotreInfoDTO->setStoreCityCode("025");
$dyttInitSotreInfoDTO->setStoreCityName("南京市");
$dyttInitSotreInfoDTO->setStoreCode("59021");
$dyttInitSotreInfoDTO->setStoreDistrictCode("01");
$dyttInitSotreInfoDTO->setStoreDistrictName("玄武区");
$dyttInitSotreInfoDTO->setStoreLvCode("1");
$dyttInitSotreInfoDTO->setStoreName("店铺名称");
$dyttInitSotreInfoDTO->setStoreProvCode("100");
$dyttInitSotreInfoDTO->setStoreProvName("江苏省");
$dyttInitSotreInfoDTO->setStoreSource("4");
$dyttInitSotreInfoDTO->setStoreTownCode("99");
$dyttInitSotreInfoDTO->setStoreTownName("全区");
$dyttInitSotreInfoDTO->setStoreType("ST5");
$dyttInitSotreInfoDTO->setStoreXzCode("1");
$dyttInitSotreInfoDTO->setStoreYtCode("门店业态");
$dyttInitSotreInfoDTO->setZipCode("0250000");
$req->setDyttInitSotreInfoDTO($dyttInitSotreInfoDTO);
$req->setOperType("0");
$req->setPlatformCode("P6");

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