<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\AllowanceInvalidData;

class AllowanceInvalid extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public AllowanceInvalidData $Data;

    public function __construct()
    {
        $this->Data = new AllowanceInvalidData();
    }
}
