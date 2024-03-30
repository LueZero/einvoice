<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\AllowanceByCollegiateData;

class AllowanceByCollegiate extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public AllowanceByCollegiateData $Data;
    
    public function __construct()
    {
        $this->Data = new AllowanceByCollegiateData();
    }
}
