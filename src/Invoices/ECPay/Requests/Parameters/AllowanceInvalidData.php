<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

class AllowanceInvalidData
{
    /**
     * @var string 
     * 特店編號
     */
    public $MerchantID;

    /**
     * @var string 
     * 發票號碼
     */
    public $InvoiceNo;

    /**
     * @var string 
     * 折讓編號
     */
    public $AllowanceNo;

    /**
     * @var string 
     * 作廢原因
     */
    public $Reason;
}
