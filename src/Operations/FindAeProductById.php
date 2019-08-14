<?php
namespace DhgateApi\Operations;

class FindAeProductById extends AbstractOperation
{
    public function __construct()
    {
        $this->parameter['v'] = '2.0';
    }

    public function getName()
    {
        return 'dh.item.get';
    }

    public function setItemCode($itemCode)
    {
        $this->parameter['itemCode'] = $itemCode;
        return $this;
    }

    public function setSiteId($siteId)
    {
        $this->parameter['siteId'] = $siteId;
        return $this;
    }

}