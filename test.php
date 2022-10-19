<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

require './vendor/autoload.php';

use Zero\InvoiceClient as InvoiceClient;
use Zero\InvoiceObject as InvoiceObject;
use Zero\EcPay\Requests\Parameters\Issue;

// 綠界 發票範例 - 開立發票
$relateNumber = 'EcInvoice'. date('YmdHis') . rand(1000, 0); 
$invoiceClient = new InvoiceClient(InvoiceObject::INVOICE_MODULE_EC, InvoiceObject::B2C);
$issue = new Issue();
$issue->MerchantID = '2000132';
$issue->RqHeader = ['Timestamp' => time()];
$issue->Data->MerchantID = '2000132';
$issue->Data->RelateNumber = $relateNumber;
$issue->Data->CustomerID = '';
$issue->Data->CustomerIdentifier = '';
$issue->Data->CustomerName = 'xxx有限公司';
$issue->Data->CustomerAddr = '106 台北市南港區發票一街 1 號 1 樓';
$issue->Data->CustomerPhone = '';
$issue->Data->CustomerEmail = 'test@ecpay.com.tw';
$issue->Data->ClearanceMark = 1;
$issue->Data->Print = "1";
$issue->Data->Donation = "0";
$issue->Data->LoveCode = "";
$issue->Data->CarrierType = "";
$issue->Data->CarrierNum = "";
$issue->Data->TaxType = "1";
$issue->Data->SpecialTaxType = 1;
$issue->Data->SalesAmount = 100;
$issue->Data->InvoiceRemark = "發票備註";
$issue->Data->InvType = "07";
$issue->Data->Vat = "1";
$issue->Data->Items = [
    [
        'ItemSeq' => 1,
        'ItemName' => "item01",
        'ItemCount' => 1,
        'ItemWord' => "件",
        'ItemPrice' => 100,
        'ItemTaxType' => "1",
        'ItemAmount' => 100,
        'ItemRemark' => "item01_desc"
    ]
];

$ecInvoice = $invoiceClient->createEcInvoice();
echo $ecInvoice->createIssue($issue);
return;
