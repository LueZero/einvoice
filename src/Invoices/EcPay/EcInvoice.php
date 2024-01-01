<?php

namespace Zero\Invoices\EcPay;

use Zero\Invoices\Invoice;
use Zero\Invoices\EcPay\Requests\Parameters\Base;
use WpOrg\Requests\Requests;

abstract class EcInvoice extends Invoice
{
    /**
     * @var string  
     * base URL
     */
    protected $baseURL;

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
        $this->baseURL = $this->configs['B2C']['invoiceURLs']['baseURL'];
    }

    /**
     * @param Barcode barcode 
     * @return bool
     */
    public function isBarcode(Base $barcode)
    {
        $sendData = array_filter((array) $barcode);
        $sendData['Data'] = $this->encrypt($sendData['Data']);
        $response = Requests::post($this->configs['B2C']['invoiceURLs']['baseURL'] . $this->configs['B2C']['invoiceURLs']['checkBarcode'], [
            'Content-Type: application/json',
        ], json_encode($sendData));

        $result = json_decode($response->body, true);
        $result['Data'] = $this->decrypt($result['Data']);

        return $result['Data']['IsExist'] === 'Y';
    }

    public abstract function createIssue(Base $base);

    public abstract function createInvalid(Base $base);

    public abstract function createAllowanceInvalid(Base $base);

    public abstract function createAllowance(Base $base);

    public abstract function createAllowanceByCollegiate(Base $base);
}
