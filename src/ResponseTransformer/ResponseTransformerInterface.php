<?php

namespace DhgateApi\ResponseTransformer;

interface ResponseTransformerInterface
{
    public function transform($response);
}