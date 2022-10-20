<?php

namespace Zero\Invoices\EcPay;

use Zero\Invoices\Invoice;

abstract class EcInvoice extends Invoice
{
    /**
     * @var string 
     * 特店編號
     */
    protected $merchantID;

    /**
     * @var string
     */
    protected $hashKey;

    /**
     * @var string
     */
    protected $hashIv;

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
}
