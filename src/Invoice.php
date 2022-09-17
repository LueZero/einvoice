<?php

namespace Zero;

use Zero\InvoiceObject;
use Zero\EcPay\EcB2CInvoice;

class Invoice
{   
    /**
    * @var array
     */
    public $configs;

    /**
     * @var string
     */
    public $invoiceName;

    /**
     * @param \Zero\InvoiceObject invoiceName
     */
    public function __construct($invoiceName)
    {
       $this->invoiceName = $invoiceName;
       $this->requireConfig($this->invoiceName);
    }

    /**
     * 使用Ec發票模組
     * @param \Zero\InvoiceObject invoiceName
     */
    public function useEcInvoice($invoiceObject)
    {
        $ecInvoice = null;

        switch($invoiceObject)
        {
            case InvoiceObject::B2C:
                $ecInvoice = new EcB2CInvoice($this->configs);
                break;
        }

        if (is_null($ecInvoice))
            throw new \Exception('Zero\Invoice::[no ec invoice class]');

        return $ecInvoice;
    }

    /**
     * 呼叫配置檔案
     */
    private function requireConfig($invoiceName)
    {
        $configs = require('config.php');

        if (empty($configs[$invoiceName]))
            throw new \Exception('Zero\Invoice::[invoice config is empty]');

        $this->configs = $configs[$invoiceName];
    }
}