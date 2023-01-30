<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

use Zero\Invoices\EcPay\Requests\Parameters\Base;
use Zero\Invoices\EcPay\Requests\Parameters\AllowanceByCollegiateData;

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
