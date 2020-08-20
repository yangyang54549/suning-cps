<?php
namespace Suning\Sdk;

/**
 * 苏宁开放平台接口 - 查询业务类基类
 */
class SelectSuningRequest
{
	protected $apiParams = array();
    /**
     * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据
     */
    protected $pageNo;

    /**
     * 每页条数。取值范围:大于零的整数;最大值：50。默认值：10
     */
    protected $pageSize;

    /**
     * 是否参数校验(默认false,测试及生产建议为true)
     */
    protected $checkParam = false;


    protected $pageNoMin = 1;

    protected $pageNoMax = 99999;

    protected $pageSizeMin = 10;

    protected $pageSizeMax = 50;

    public function getCheckParam() {
		return $this->checkParam;
	}

	public function setCheckParam($checkParam) {
		$this->checkParam = $checkParam;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParams["pageNo"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParams["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	protected $pointParams = array();

	public function getPointParams() {
		return $this->pointParams;
	}

	public function setPointParams($pointParams) {
		$this->pointParams = $pointParams;
	}
	
    public function check()
    {
    	// 若为空，设置默认值
    	if (RequestCheckUtil::checkEmpty($this->pageNo)){
    		$this->pageNo = $this->pageNoMin;
    	}
    	
        if (RequestCheckUtil::checkEmpty($this->pageSize)){
    	    $this->pageSize = $this->pageSizeMin;
    	} 
    	
        RequestCheckUtil::checkPositiveInteger($this->pageNo, 'pageNo');
        RequestCheckUtil::checkMinValue($this->pageNo, $this->pageNoMin, 'pageNo');
        RequestCheckUtil::checkMaxValue($this->pageNo, $this->pageNoMax, 'pageNo');

        RequestCheckUtil::checkPositiveInteger($this->pageSize, 'pageSize');
        RequestCheckUtil::checkMinValue($this->pageSize, $this->pageSizeMin, 'pageSize');
        RequestCheckUtil::checkMaxValue($this->pageSize, $this->pageSizeMax, 'pageSize');
    }
}
?>