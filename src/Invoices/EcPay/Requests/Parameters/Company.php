<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

use Zero\Invoices\EcPay\Requests\Parameters\Base;
use Zero\Invoices\EcPay\Requests\Parameters\CompanyData;

class Company extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public CompanyData $Data;
    
    public function __construct()
    {
        $this->Data = new CompanyData();
    }
}
