<?php

namespace Zero;

use Zero\InvoiceObject;
use Zero\Invoices\EcPay\EcB2CInvoice;

class InvoiceClient
{
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
    }

    /**
     * 設定 Ec 發票模組
     * @return \Zero\EcPay\EcInvoice
     * @throws \Exception
     */
    public function createEcInvoice()
    {
        $ecInvoice = null;
       
        switch ($this->invoiceTypeName) {
            case InvoiceObject::B2C:
                $ecInvoice = new EcB2CInvoice();
                break;
        }

        if (is_null($ecInvoice))
            throw new \Exception('Zero\Invoice::[no ec invoice class]');

        return $ecInvoice;
    }
}
