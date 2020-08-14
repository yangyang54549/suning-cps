<?php
namespace Suning\Sdk;

/**
 * 苏宁开放平台接口-基类
 */
class DefaultSuningClient {

	/**
	 * 应用访问key
	 */
	private $appKey;

	/**
	 * 应用访问密钥
	 */
	private $appSecret;

	/**
	 * 服务器访问地址
	 */
	private $serverUrl = 'http://openpre.cnsuning.com/api/http/sopRequest';

	/**
	 * 请求、响应格式
	 */
	private $format;

	private static $apiVersion = "v1.2";

	private static $checkRequest = TRUE;

	private static $signMethod = "md5";

	private static $connectTimeout = 10;

	private static $readTimeout = 30;

	private static $userAgent = "suning-sdk-php";

	private static $sdkVersion = "suning-sdk-php-beta0.1";

	private static $accessToken = '';

	/**
	 * 构造方法
	 * @param $appKey
	 * @param $appSecret
	 * @param $format (xml、json)
	 */
	function __construct($appKey, $appSecret, $format = 'json') {
		$this -> appKey = $appKey;
		$this -> appSecret = $appSecret;
		$this -> format = $format;
	}

    /**
     * 封装头信息及签名
     * @param $params
     * @return array
     */
	private function generateSignHeader($params) {
		$signString = '';
		foreach($params as $k => $v){
			$signString .= $v;
		}
		unset($k, $v);
		$signMethod = self::$signMethod;
		$signString = $signMethod($signString);
		
		// 组装头文件信息
		$signDataHeader = array(
			"Content-Type: text/xml; charset=utf-8",
			"AppMethod: " . $params['method'],
			"AppRequestTime: " . $params['date'],
			"Format: " . $this -> format,
			"signInfo: " . $signString,
			"AppKey: " . $params['app_key'],
			"VersionNo: " . $params['api_version'],
			"User-Agent: " . self::$userAgent,
			"Sdk-Version: " . self::$sdkVersion
		);
		
		if(! empty(self::$accessToken)){
			$signDataHeader[] = 'access_token:' . self::$accessToken;
		}
		
		return $signDataHeader;
	}

    /**
     * 发送请求
     * @param string $url
     * @param $postFields
     * @param array $header
     * @return mixed
     */
	public static function curl($url, $postFields = null, $header = []) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_FAILONERROR, false);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
		
		// https 请求
		if(strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https"){
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		}
		
		$response = curl_exec($ch);
		
		if(curl_errno($ch)){
			throw new \Exception(curl_error($ch), 0);
		}else{
			$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if(200 !== $httpStatusCode){
				throw new \Exception($response, $httpStatusCode);
			}
		}
		curl_close($ch);
		return $response;
	}

	/**
	 * 准备发送的参数及检查验证
	 * @param $request
	 * @return mixed
	 */
	public function execute($request) {
		$checkParam = $request -> getCheckParam();
		if($checkParam){
			try{
				$request -> check();
			}catch(\Exception $e){
				print_r($e ->__toString());
			}
		}
		
		// 获取业务参数
		$paramsArray = $request -> getApiParams();
		if(empty($paramsArray)){
			$paramsArray = '';
		}
		$paramsArray = array('sn_request' => array('sn_body' => array(
				"{$request -> getBizName()}" => $paramsArray
		)));
		if($this->format == "json"){
			$apiParams = json_encode($paramsArray);
		}else{
			$apiParams = ArrayToXML::parse($paramsArray["sn_request"],"sn_request");
		}
		
		// 组装系统参数
		$sysParams["secret_key"] = $this -> appSecret;
		$sysParams["method"] = $request -> getApiMethodName();
		$sysParams["date"] = date('Y-m-d H:i:s');
		$sysParams["app_key"] = $this -> appKey;
		$sysParams["api_version"] = self::$apiVersion;
		$sysParams["post_field"] = base64_encode($apiParams);
		
		// 头信息(内含签名)
		$signHeader = self::generateSignHeader($sysParams);

		// 设置埋点参数
		$pointParams = $request -> getPointParams();
		if (is_array($pointParams) && !empty($pointParams)) {
			foreach($pointParams as $k => $v){
				if (!array_key_exists($k, $sysParams)) {
					$signHeader[] = $k . ": " . $v;
				}
			}
			unset($k, $v);
		}
		unset($sysParams);
		
		// 发起HTTP请求
		try{
			$resp = self::curl($this -> serverUrl."/".$request -> getApiMethodName(), $apiParams, $signHeader);
		}catch(\Exception $e){
			print_r($e ->__toString());
		}
		
		return $resp;
	}

	/**
	 * OAuth授权必须设置
	 * @param $accessToken
	 * @return void
	 */
	public static function setAccessToken($accessToken) {
		self::$accessToken = $accessToken;
	}

	public function getAppKey() {
		return $this -> appKey;
	}

	public function getAppSecret() {
		return $this -> appSecret;
	}

	public function getServerUrl() {
		return $this -> serverUrl;
	}

	public function getFormat() {
		return $this -> format;
	}
}