<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-8
 */
class freightTemplateAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commonMap;
	
	/**
	 * 
	 */
	private $specialList;
	
	/**
	 * 
	 */
	private $vendorCode;
	
	public function getCommonMap() {
		return $this->commonMap;
	}
	
	public function setCommonMap($commonMap) {
		$this->commonMap = $commonMap;
		$this->apiParams["commonMap"] = $commonMap->getApiParams();
	}
	
	public function getSpecialList() {
		return $this->specialList;
	}
	
	public function setSpecialList($specialList) {
		$this->specialList = $specialList;
		$arr = array();
		foreach ($specialList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["specialList"] = $arr;
	}
	
	public function getVendorCode() {
		return $this->vendorCode;
	}
	
	public function setVendorCode($vendorCode) {
		$this->vendorCode = $vendorCode;
		$this->apiParams["vendorCode"] = $vendorCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.freighttemplatenew.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->vendorCode, 'vendorCode');
	}
	
	public function getBizName(){
		return "freightTemplate";
	}
	
}

class CommonMap {

	private $apiParams = array();
	
	private $continuedBulkFare;
	
	private $continuedItem;
	
	private $continuedItemFare;
	
	private $continuedtBulk;
	
	private $continuedWeight;
	
	private $continuedWeightFare;
	
	private $firstBulk;
	
	private $firstBulkFare;
	
	private $firstItem;
	
	private $firstItemFare;
	
	private $firstWeight;
	
	private $firstWeightFare;
	
	private $freightTemplateName;
	
	private $shippingType;
	
	private $supplierType;
	
	private $taxType;
	
	private $valuationType;
	
	public function getContinuedBulkFare() {
		return $this->continuedBulkFare;
	}

	public function setContinuedBulkFare($continuedBulkFare) {
		$this->continuedBulkFare = $continuedBulkFare;
		$this->apiParams["continuedBulkFare"] = $continuedBulkFare;
	}
	
	public function getContinuedItem() {
		return $this->continuedItem;
	}

	public function setContinuedItem($continuedItem) {
		$this->continuedItem = $continuedItem;
		$this->apiParams["continuedItem"] = $continuedItem;
	}
	
	public function getContinuedItemFare() {
		return $this->continuedItemFare;
	}

	public function setContinuedItemFare($continuedItemFare) {
		$this->continuedItemFare = $continuedItemFare;
		$this->apiParams["continuedItemFare"] = $continuedItemFare;
	}
	
	public function getContinuedtBulk() {
		return $this->continuedtBulk;
	}

	public function setContinuedtBulk($continuedtBulk) {
		$this->continuedtBulk = $continuedtBulk;
		$this->apiParams["continuedtBulk"] = $continuedtBulk;
	}
	
	public function getContinuedWeight() {
		return $this->continuedWeight;
	}

	public function setContinuedWeight($continuedWeight) {
		$this->continuedWeight = $continuedWeight;
		$this->apiParams["continuedWeight"] = $continuedWeight;
	}
	
	public function getContinuedWeightFare() {
		return $this->continuedWeightFare;
	}

	public function setContinuedWeightFare($continuedWeightFare) {
		$this->continuedWeightFare = $continuedWeightFare;
		$this->apiParams["continuedWeightFare"] = $continuedWeightFare;
	}
	
	public function getFirstBulk() {
		return $this->firstBulk;
	}

	public function setFirstBulk($firstBulk) {
		$this->firstBulk = $firstBulk;
		$this->apiParams["firstBulk"] = $firstBulk;
	}
	
	public function getFirstBulkFare() {
		return $this->firstBulkFare;
	}

	public function setFirstBulkFare($firstBulkFare) {
		$this->firstBulkFare = $firstBulkFare;
		$this->apiParams["firstBulkFare"] = $firstBulkFare;
	}
	
	public function getFirstItem() {
		return $this->firstItem;
	}

	public function setFirstItem($firstItem) {
		$this->firstItem = $firstItem;
		$this->apiParams["firstItem"] = $firstItem;
	}
	
	public function getFirstItemFare() {
		return $this->firstItemFare;
	}

	public function setFirstItemFare($firstItemFare) {
		$this->firstItemFare = $firstItemFare;
		$this->apiParams["firstItemFare"] = $firstItemFare;
	}
	
	public function getFirstWeight() {
		return $this->firstWeight;
	}

	public function setFirstWeight($firstWeight) {
		$this->firstWeight = $firstWeight;
		$this->apiParams["firstWeight"] = $firstWeight;
	}
	
	public function getFirstWeightFare() {
		return $this->firstWeightFare;
	}

	public function setFirstWeightFare($firstWeightFare) {
		$this->firstWeightFare = $firstWeightFare;
		$this->apiParams["firstWeightFare"] = $firstWeightFare;
	}
	
	public function getFreightTemplateName() {
		return $this->freightTemplateName;
	}

	public function setFreightTemplateName($freightTemplateName) {
		$this->freightTemplateName = $freightTemplateName;
		$this->apiParams["freightTemplateName"] = $freightTemplateName;
	}
	
	public function getShippingType() {
		return $this->shippingType;
	}

	public function setShippingType($shippingType) {
		$this->shippingType = $shippingType;
		$this->apiParams["shippingType"] = $shippingType;
	}
	
	public function getSupplierType() {
		return $this->supplierType;
	}

	public function setSupplierType($supplierType) {
		$this->supplierType = $supplierType;
		$this->apiParams["supplierType"] = $supplierType;
	}
	
	public function getTaxType() {
		return $this->taxType;
	}

	public function setTaxType($taxType) {
		$this->taxType = $taxType;
		$this->apiParams["taxType"] = $taxType;
	}
	
	public function getValuationType() {
		return $this->valuationType;
	}

	public function setValuationType($valuationType) {
		$this->valuationType = $valuationType;
		$this->apiParams["valuationType"] = $valuationType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class SpecialList {

	private $apiParams = array();
	
	private $speCityEnCode;
	
	private $speContinuedItem;
	
	private $speContinuedItemFare;
	
	private $speContinuedtBulk;
	
	private $speContinuedtBulkFare;
	
	private $speContinuedWeight;
	
	private $speContinuedWeightFare;
	
	private $speFirstBulk;
	
	private $speFirstBulkFare;
	
	private $speFirstItem;
	
	private $speFirstItemFare;
	
	private $speFirstWeight;
	
	private $speFirstWeightFare;
	
	private $speProvenCode;
	
	private $speRenCode;
	
	public function getSpeCityEnCode() {
		return $this->speCityEnCode;
	}

	public function setSpeCityEnCode($speCityEnCode) {
		$this->speCityEnCode = $speCityEnCode;
		$this->apiParams["speCityEnCode"] = $speCityEnCode;
	}
	
	public function getSpeContinuedItem() {
		return $this->speContinuedItem;
	}

	public function setSpeContinuedItem($speContinuedItem) {
		$this->speContinuedItem = $speContinuedItem;
		$this->apiParams["speContinuedItem"] = $speContinuedItem;
	}
	
	public function getSpeContinuedItemFare() {
		return $this->speContinuedItemFare;
	}

	public function setSpeContinuedItemFare($speContinuedItemFare) {
		$this->speContinuedItemFare = $speContinuedItemFare;
		$this->apiParams["speContinuedItemFare"] = $speContinuedItemFare;
	}
	
	public function getSpeContinuedtBulk() {
		return $this->speContinuedtBulk;
	}

	public function setSpeContinuedtBulk($speContinuedtBulk) {
		$this->speContinuedtBulk = $speContinuedtBulk;
		$this->apiParams["speContinuedtBulk"] = $speContinuedtBulk;
	}
	
	public function getSpeContinuedtBulkFare() {
		return $this->speContinuedtBulkFare;
	}

	public function setSpeContinuedtBulkFare($speContinuedtBulkFare) {
		$this->speContinuedtBulkFare = $speContinuedtBulkFare;
		$this->apiParams["speContinuedtBulkFare"] = $speContinuedtBulkFare;
	}
	
	public function getSpeContinuedWeight() {
		return $this->speContinuedWeight;
	}

	public function setSpeContinuedWeight($speContinuedWeight) {
		$this->speContinuedWeight = $speContinuedWeight;
		$this->apiParams["speContinuedWeight"] = $speContinuedWeight;
	}
	
	public function getSpeContinuedWeightFare() {
		return $this->speContinuedWeightFare;
	}

	public function setSpeContinuedWeightFare($speContinuedWeightFare) {
		$this->speContinuedWeightFare = $speContinuedWeightFare;
		$this->apiParams["speContinuedWeightFare"] = $speContinuedWeightFare;
	}
	
	public function getSpeFirstBulk() {
		return $this->speFirstBulk;
	}

	public function setSpeFirstBulk($speFirstBulk) {
		$this->speFirstBulk = $speFirstBulk;
		$this->apiParams["speFirstBulk"] = $speFirstBulk;
	}
	
	public function getSpeFirstBulkFare() {
		return $this->speFirstBulkFare;
	}

	public function setSpeFirstBulkFare($speFirstBulkFare) {
		$this->speFirstBulkFare = $speFirstBulkFare;
		$this->apiParams["speFirstBulkFare"] = $speFirstBulkFare;
	}
	
	public function getSpeFirstItem() {
		return $this->speFirstItem;
	}

	public function setSpeFirstItem($speFirstItem) {
		$this->speFirstItem = $speFirstItem;
		$this->apiParams["speFirstItem"] = $speFirstItem;
	}
	
	public function getSpeFirstItemFare() {
		return $this->speFirstItemFare;
	}

	public function setSpeFirstItemFare($speFirstItemFare) {
		$this->speFirstItemFare = $speFirstItemFare;
		$this->apiParams["speFirstItemFare"] = $speFirstItemFare;
	}
	
	public function getSpeFirstWeight() {
		return $this->speFirstWeight;
	}

	public function setSpeFirstWeight($speFirstWeight) {
		$this->speFirstWeight = $speFirstWeight;
		$this->apiParams["speFirstWeight"] = $speFirstWeight;
	}
	
	public function getSpeFirstWeightFare() {
		return $this->speFirstWeightFare;
	}

	public function setSpeFirstWeightFare($speFirstWeightFare) {
		$this->speFirstWeightFare = $speFirstWeightFare;
		$this->apiParams["speFirstWeightFare"] = $speFirstWeightFare;
	}
	
	public function getSpeProvenCode() {
		return $this->speProvenCode;
	}

	public function setSpeProvenCode($speProvenCode) {
		$this->speProvenCode = $speProvenCode;
		$this->apiParams["speProvenCode"] = $speProvenCode;
	}
	
	public function getSpeRenCode() {
		return $this->speRenCode;
	}

	public function setSpeRenCode($speRenCode) {
		$this->speRenCode = $speRenCode;
		$this->apiParams["speRenCode"] = $speRenCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>