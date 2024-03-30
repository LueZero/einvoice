<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

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
}