<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

use Zero\Invoices\EcPay\Requests\Parameters\Base;
use Zero\Invoices\EcPay\Requests\Parameters\LoveCodeData;

class LoveCode extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public LoveCodeData $Data;
    
    public function __construct()
    {
        $this->Data = new LoveCodeData();
    }
}
