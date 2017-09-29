<?php
namespace DhgateApi\Request;

use DhgateApi\Config\ConfigInterface;
use DhgateApi\Operations\OperationInterface;

interface RequestInterface
{
    public function setConfig(ConfigInterface $config);

    public function perform(OperationInterface $operation);
}