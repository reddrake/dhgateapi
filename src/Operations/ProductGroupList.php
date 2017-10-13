<?php
namespace DhgateApi\Operations;

class ProductGroupList extends AbstractOperation
{
    public function __contrsuct()
    {
        $this->parameter['v'] = '2.0';
    }
    public function getName()
    {
        return 'dh.item.group.list';
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