<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\AllowanceData;

class Allowance extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public AllowanceData $Data;
    
    public function __construct()
    {
        $this->Data = new AllowanceData();
    }
}
