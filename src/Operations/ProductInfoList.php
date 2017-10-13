<?php
namespace DhgateApi\Operations;

class ProductInfoList extends AbstractOperation
{
    public function __construct()
    {
        $this->parameter['v'] = '1.0';
    }
    
    public function getName()
    {
        return 'dh.products.get';
    }

    public function setPages($pages)
    {
        $this->parameter['pages'] = $pages;
        return $this;
    }

    public function setPagesize($pagesize)
    {
        $this->parameter['pagesize'] = $pagesize;
        return $this;
    }

    public function setProductQueryVo($productQueryVo)
    {
        $this->parameter['productQueryVo'] = $productQueryVo;
        return $this;
    }

    public function setSiteId($siteId)
    {
        $this->parameter['siteId'] = $siteId;
        return $this;
    }
}