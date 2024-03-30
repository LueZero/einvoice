<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\LoveCodeData;

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
