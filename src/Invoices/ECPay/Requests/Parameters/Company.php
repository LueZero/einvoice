<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\CompanyData;

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
