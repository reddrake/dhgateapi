<?php
namespace DhgateApi\Operations;

class FindSellerCouponActivity extends AbstractOperation
{
    public function getName()
    {
        return 'findSellerCouponActivity';
    }

    public function setActivityId($activityId)
    {
        $this->parameter['activityId'] = $activityId;
        return $this;
    }
}