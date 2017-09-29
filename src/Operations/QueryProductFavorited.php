<?php
namespace DhgateApi\Operations;

class QueryProductFavorited extends AbstractOperation
{
    public function getName()
    {
        return 'api.queryProductFavoritedInfoEverydayById';
    }

    public function setProductId($productId)
    {
        $this->parameter['productId'] = $productId;
        return $this;
    }

    public function setStartDate($startDate)
    {
        $this->parameter['startDate'] = $startDate;
        return $this;
    }

    public function setEndDate($endDate)
    {
        $this->parameter['endDate'] = $endDate;
        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->parameter['currentPage'] = $currentPage;
        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->parameter['pageSize'] = $pageSize;
        return $this;
    }
}