<?php
namespace DhgateApi\Operations;

class FindOrderById extends AbstractOperation
{
    public function getName()
    {
        return 'api.findOrderById';
    }

    public function setOrderId($orderId)
    {
        $this->parameter['orderId'] = $orderId;
        return $this;
    }
}