<?php
namespace DhgateApi\Config;

interface ConfigInterface
{
    public function getApiKey();

    public function getApiSecret();

    public function getAccessToken();

    public function getRefreshToken();

    public function getRequest();

    public function getRequestFactory();

    public function getResponseTransformer();

    public function getResponseTransformerFactory();
}