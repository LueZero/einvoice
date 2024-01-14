<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

class LoveCodeData
{
    /**
     * @var string 
     * 特店編號
     */
    public $MerchantID;

    /**
     * @var string 
     * 受贈單位之捐贈碼
     */
    public $LoveCode;
}
