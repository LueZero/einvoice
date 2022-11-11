<?php

namespace Zero\Invoices\EcPay;

use Zero\Invoices\Invoice;
use Zero\Invoices\EcPay\Requests\Parameters\Base;

abstract class EcInvoice extends Invoice
{
    /**
     * @var string 
     * 特店編號
     */
    public $merchantID;

    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var string
     */
    public $hashIv;

    /**
     * @override 
     * @param array configs
     */
    public function setConfigs($configs)
    {
        $this->configs = $configs;
        $this->merchantID = empty($this->configs['invoiceParameters']['MerchantID']) == true ? null : $this->configs['invoiceParameters']['MerchantID'];
        $this->hashKey = empty($this->configs['invoiceParameters']['HashKey']) == true ? null : $this->configs['invoiceParameters']['HashKey'];
        $this->hashIv = empty($this->configs['invoiceParameters']['HashIV']) == true ? null : $this->configs['invoiceParameters']['HashIV'];
    }

    public abstract function createIssue(Base $issueRequestParameter);

    public abstract function createInvalid(Base $issueRequestParameter);
}
