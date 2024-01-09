<?php

namespace Zero;

use Zero\InvoiceObject;
use Zero\Invoices\EcPay\EcB2CInvoice;

class InvoiceClient
{
    /**
     * @var string
     */
    public $invoiceName;

    /**
     * @var string
     */
    public $invoiceTypeName;

    /**
     * @param string invoiceName
     * @param string invoiceTypeName
     */
    public function __construct($invoiceName, $invoiceTypeName)
    {
        $this->invoiceName = $invoiceName;
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

        if($this->invoiceName === InvoiceObject::INVOICE_NAME_EC)
        {
            switch ($this->invoiceTypeName) {
                case InvoiceObject::B2C:
                    $ecInvoice = new EcB2CInvoice();
                    break;
            }
        }

        if (is_null($ecInvoice))
            throw new \Exception('Zero\Invoice::[no ec invoice class]');

        return $ecInvoice;
    }
}
