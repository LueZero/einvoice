<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

use Zero\Invoices\EcPay\Requests\Parameters\Base;
use Zero\Invoices\EcPay\Requests\Parameters\AllowanceData;

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
