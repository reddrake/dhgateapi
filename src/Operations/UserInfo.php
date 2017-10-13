<?php
namespace DhgateApi\Operations;

class UserInfo extends AbstractOperation
{
    public function __construct()
    {
        $this->parameter['v'] = '1.0';
    }
    
    public function getName()
    {
        return 'dh.user.base.get';
    }
}