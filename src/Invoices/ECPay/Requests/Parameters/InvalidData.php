<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

class InvalidData
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
     * 發票開立日期
     */
    public $InvoiceDate;

    /**
     * @var string 
     * 作廢原因
     */
    public $Reason;
}
