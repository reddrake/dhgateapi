<?php
namespace DhgateApi\Operations;

class FindOrderList extends AbstractOperation
{
    public function getName()
    {
        return 'api.findOrderListQuery';
    }

    public function setPage($page)
    {
        $this->parameter['page'] = $page;
        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->parameter['pageSize'] = $pageSize;
        return $this;
    }

    public function setCreateDateStart($createDateStart)
    {
        $this->parameter['createDateStart'] = $createDateStart;
        return $this;
    }

    public function setCreateDateEnd($createDateEnd)
    {
        $this->parameter['createDateEnd'] = $createDateEnd;
        return $this;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->parameter['orderStatus'] = $orderStatus;
        return $this;
    }
}