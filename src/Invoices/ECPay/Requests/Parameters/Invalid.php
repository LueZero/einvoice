<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\InvalidData;

class Invalid extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public InvalidData $Data;

    public function __construct()
    {
        $this->Data = new InvalidData();
    }
}
