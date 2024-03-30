<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\BarcodeData;

class Barcode extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public BarcodeData $Data;
    
    public function __construct()
    {
        $this->Data = new BarcodeData();
    }
}
