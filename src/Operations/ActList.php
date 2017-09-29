<?php
namespace DhgateApi\Operations;

class ActList extends AbstractOperation
{
    public function getName()
    {
        return 'getActList';
    }

    public function setStatus($status)
    {
        $this->parameter['status'] = $status;
        return $this;
    }

    public function setActivityName($activityName)
    {
        $this->parameter['activityName'] = $activityName;
        return $this;
    }

    public function setMinActivityStartDate($minActivityStartDate)
    {
        $this->parameter['minActivityStartDate'] = $minActivityStartDate;
        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->parameter['pageSize'] = $pageSize;
        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->parameter['currentPage'] = $currentPage;
        return $this;
    }
}