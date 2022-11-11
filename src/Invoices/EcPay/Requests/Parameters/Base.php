<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

use Zero\Invoices\EcPay\Requests\Parameters\Issue;
use Zero\Invoices\EcPay\Requests\Parameters\Invalid;

class Base
{
    /**
     * @var string 
     * 平台商編號
     */
    public $PlatformID;

    /**
     * @var string 
     * 特店編號
     */
    public $MerchantID;

    /**
     * @var array 
     * 傳入資料
     */
    public $RqHeader;

    /**
     * @var class 
     * 加密資料
     */
    public $Data;
}