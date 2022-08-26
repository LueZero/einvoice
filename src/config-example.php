<?php

return [
    'ec' => [
        'invoiceParameters' => [
            'MerchantID' => 2000132,
            'CreditCheckCode' => 25938511,
            'HashKey' => '5294y06JbISpM5x9',
            'HashIV' => 'v77hoKGq4kWxNNIS'
        ],
        'B2B' => [
            'invoiceURLs' => [
                'base' => 'https://einvoice.ecpay.com.tw/B2BInvoice'
            ]
        ],
        'B2C' => [
            'invoiceURLs' => [
                'base' => 'https://einvoice.ecpay.com.tw/B2CInvoice',
                'issue' => '/issue',
                'invalid' => '/Invalid',
                'allowanceInvalid' => '/AllowanceInvalid',
                'allowanceInvalidByCollegiate' => '/AllowanceInvalidByCollegiate',
                'getIssue' => '/GetIssue',
                'getAllowanceList' => '/GetAllowanceList',
                'getInvalid' => '/GetInvalid',
                'getAllowanceInvalid' => '/GetAllowanceInvalid',
                'getInvoiceWordSetting' => '/GetInvoiceWordSetting',
                'invoiceNotify' => '/InvoiceNotify',
                'invoicePrint' => '/InvoicePrint',
                'checkBarcode' => '/CheckBarcode',
                'checkLoveCode' => '/CheckLoveCode',
            ]
        ]
    ]
];
