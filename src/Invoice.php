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
    public $invoiceModuleName;

    /**
     * @var string
     */
    public $invoiceTypeName;

    /**
     * @param string invoiceModuleName
     * @param string invoiceTypeName
     */
    public function __construct($invoiceModuleName, $invoiceTypeName)
    {
        $this->invoiceModuleName = $invoiceModuleName;
        $this->invoiceTypeName = $invoiceTypeName;      
        $this->requireConfig();
    }

    /**
     * 呼叫配置檔案
     */
    private function requireConfig()
    {
        $configs = require('config.php');

        if (empty($configs[$this->invoiceModuleName]))
            throw new \Exception('Zero\Invoice::[invoice config is empty]');

        $this->configs = $configs[$this->invoiceModuleName];
    }

    /**
     * 設定 Ec 發票模組
     * @return \Zero\EcPay\EcInvoice
     */
    public function getEcInvoice()
    {
        $ecInvoice = null;
       
        switch ($this->invoiceTypeName) {
            case InvoiceObject::B2C:
                $ecInvoice = new EcB2CInvoice($this->configs);
                break;
        }

        if (is_null($ecInvoice))
            throw new \Exception('Zero\Invoice::[no ec invoice class]');

        return $ecInvoice;
    }
}
