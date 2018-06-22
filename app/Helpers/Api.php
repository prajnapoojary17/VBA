<?php namespace App\Helpers;

class Api {

    /**
     * Returns an excerpt from a given string (between 0 and passed limit variable).
     *
     * @param $string
     * @param int $limit
     * @param string $suffix
     * @return string
     */
    public static function APIcall($url,$str_=false,$methodName_,$curl_post_data=false)
    {
		  
		$curlPostData=unserialize($curl_post_data);
		$version = urlencode('1.0');
		$API_Password ="";
		$API_UserName="";
		$baseUrl = config('constant.API_BASE_URL');
              
		$sUrl = '';
		if($methodName_ == 'GET')
		{
			$sUrl = $baseUrl.$url.$str_;
                         
		}else if($methodName_ == 'POST')
		{
			$sUrl = $baseUrl.$url;
		}else if($methodName_ == 'PUT')
		{
			$sUrl = $baseUrl.$url;
		}else if($methodName_ == 'DELETE')
		{
			$sUrl = $baseUrl.$url;
		}
		
		$curl = curl_init($sUrl);
                
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		if($methodName_ == 'POST')
		{
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($curlPostData));
		}else if($methodName_ == 'PUT')
		{
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
		    curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($curlPostData));
		}else if($methodName_ == 'DELETE')
		{
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
		    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPostData);
		}
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
		$curl_response = curl_exec($curl);
              
		if ($curl_response === false) {
			$info = curl_getinfo($curl);
                       
			curl_close($curl);
			die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
                
		curl_close($curl);
		$decoded = json_decode($curl_response);
		/*print_r($decoded);
                print_r($curl_response);
                exit();*/
             /*   $response = json_decode($curl_response);
                print_r($response); exit();
$real_response = json_decode($response->data,true);*/
		return $decoded;
	}
	
	
}