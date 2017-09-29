<?php
namespace DhgateApi\Config;

use DhgateApi\Config\ConfigInterface;

class GenericConfig implements ConfigInterface
{
    protected $apiKey;

    protected $apiSecret;

    protected $accessToken;

    protected $refreshToken;

    protected $request = '\DhgateApi\Request\Request';

    protected $requestFactory = null;

    protected $responseTransformer = null;

    protected $responseTransformerFactory = null;

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    public function getRequestFactory()
    {
        return $this->requestFactory;
    }

    public function setRequestFactory($callback)
    {
        if (!is_callable($callback)) {
            throw new \InvalidArgumentException("Given argument is not callable");
        }

        $this->requestFactory = $callback;

        return $this;
    }

    public function getResponseTransformer()
    {
        return $this->responseTransformer;
    }

    public function setResponseTransformer($responseTransformer)
    {
        $this->responseTransformer = $responseTransformer;

        return $this;
    }

    public function getResponseTransformerFactory()
    {
        return $this->responseTransformerFactory;
    }

    public function setResponseTransformerFactory($callback)
    {
        if (!is_callable($callback)) {
            throw new \InvalidArgumentException("Given argument is not callable");
        }

        $this->responseTransformerFactory = $callback;

        return $this;
    }
}