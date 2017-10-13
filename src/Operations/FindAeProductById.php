<?php
namespace DhgateApi\Operations;

class FindAeProductById extends AbstractOperation
{
    public function __construct()
    {
        $this->parameter['v'] = '1.1';
    }

    public function getName()
    {
        return 'dh.product.get';
    }

    public function setItemcode($itemcode)
    {
        $this->parameter['itemcode'] = $itemcode;
        return $this;
    }
}