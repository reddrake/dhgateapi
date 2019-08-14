<?php
namespace DhgateApi\Operations;

class ProductInfoList extends AbstractOperation
{
    public function __construct()
    {
        $this->parameter['v'] = '2.0';
    }

    public function getName()
    {
        return 'dh.item.list';
    }

    public function setOperateDateStart($operateDateStart)
    {
        $this->parameter['operateDateStart'] = $operateDateStart;
        return $this;
    }

    public function setPages($pages)
    {
        $this->parameter['pages'] = $pages;
        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->parameter['pageSize'] = $pageSize;
        return $this;
    }

    public function setState($state)
    {
        $this->parameter['state'] = $state;
        return $this;
    }

    public function setSiteId($siteId)
    {
        $this->parameter['siteId'] = $siteId;
        return $this;
    }
}