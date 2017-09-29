<?php
namespace DhgateApi\Operations;

interface OperationInterface
{
    public function getName();

    public function getOperationParameter();
}