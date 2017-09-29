<?php
namespace DhgateApi\Operations;

class ProductInfoList extends AbstractOperation
{
    public function getName()
    {
        return 'api.findProductInfoListQuery';
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


    public function setMethod($method)
    {
        $this->parameter['method'] = $method;
        return $this;
    }

    public function setV($v){
        $this->parameter['v'] = $v;
    }
}