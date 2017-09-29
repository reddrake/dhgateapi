<?php
namespace DhgateApi\Request;

use DhgateApi\Request\RequestInterface;
use DhgateApi\Config\ConfigInterface;
use DhgateApi\Operations\OperationInterface;

class Request implements RequestInterface{

    private $options = [];

    protected $requestScheme = 'http://api.dhgate.com/dop/router';

    protected $requestAuthScheme = 'https://secure.dhgate.com/dop/oauth2/access_token';

    protected $config;

    public function __construct(array $options = [])
    {
        $this->options = [];
    }

    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function perform(OperationInterface $operation)
    {
        //$uri = sprintf($this->requestScheme, $operation->getName()). '/' . $this->config->getApiKey();
        $uri=$this->requestScheme;
        $data = $this->authSignature($operation);
        $return = $this->curlExec($uri, $data);
        if(@$return['error_code'] == '40' || @$return['message'] == '令牌Access Token过期或不存在'){
            if(!$this->refreshAccessToken()){
                return $this->perform($operation);
            }
        }elseif(isset($return['code']) && $return['code']>1){
            throw new ExpireInvalidException("请求失败");
        }

        return $return;
    }

    protected function refreshAccessToken()
    {
        $uri = sprintf($this->requestAuthScheme, $this->config->getApiKey());
        $data = array(
                'grant_type'    =>  'refresh_token',
                'client_id'     =>  $this->config->getApiKey(),
                'client_secret' =>  $this->config->getApiSecret(),
                'refresh_token' =>  $this->config->getRefreshToken(),
                'scope'=>'basic'
            );
        $return = $this->curlExec($uri, $data);
        if(!@$return['access_token']) throw new \Exception("Dhgate authorization error!");

        return false == $this->config->setAccessToken($return['access_token']);
    }

    protected function curlExec($uri, $data){
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('POST', $uri, ['form_params' => $data]);
            return json_decode($res->getBody()->getContents(),true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return json_decode($e->getResponse()->getBody(),true);
        }

    }

    protected function authSignature( $operation ){
        $code_arr = $operation->getOperationParameter();
        $code_arr['client_id'] = $this->config->getApiKey();
        $code_arr['access_token'] = $this->config->getAccessToken();
        /*$code_arr['method'] = 'dh.products.get';
        $code_arr['v'] = '1.0';*/
        list($msec, $sec) = explode(' ', microtime());
        $msectime =  (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        $code_arr['timestamp'] =$msectime;
       // $code_arr['_aop_datePattern'] = 'yyyy-MM-dd HH:mm:ss';
        ksort($code_arr);
       /* $sign_str = $url = '';
        foreach ($code_arr as $key=>$val){
            if(!$val) continue;
            $sign_str .= $key . $val;
        }
        $sign_str = 'param2/1/aliexpress.open/' . $operation->getName() . '/' . $this->config->getApiKey() . $sign_str;

        $code_arr['_aop_signature'] = strtoupper(bin2hex(hash_hmac("sha1", $sign_str, $this->config->getApiSecret(), true)));*/

        return $code_arr;
    }    
}