<?php
namespace DhgateApi\Operations;

class FindAeProductById extends AbstractOperation
{
    public function getName()
    {
        return 'api.findAeProductById';
    }

    public function setItemcode($itemcode)
    {
        $this->parameter['itemcode'] = $itemcode;
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