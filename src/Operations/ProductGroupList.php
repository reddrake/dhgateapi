<?php
namespace DhgateApi\Operations;

class ProductGroupList extends AbstractOperation
{
    public function getName()
    {
        return 'api.getProductGroupList';
    }

    public function setMethod($method)
    {
        $this->parameter['method'] = $method;
        return $this;
    }

    public function setV($v){
        $this->parameter['v'] = $v;
    }

    public function setContainChildGroup($containChildGroup){
        $this->parameter['containChildGroup'] = $containChildGroup;
    }

    public function setPageNo($pageNo){
        $this->parameter['pageNo'] = $pageNo;
    }

    public function setPageSize($pageSize){
        $this->parameter['pageSize'] = $pageSize;
    }

}