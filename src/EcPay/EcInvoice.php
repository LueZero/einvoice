<?php

namespace Zero\EcPay;

use Zero\EcPay\Requests\Parameters\Issue;

class EcInvoice
{
    /**
     * 配置
     * @var array
     */
    protected $configs;

    /**
     * @var string MerchantID 特店編號
     */
    protected $merchantID;

    /**
     * @var string HashKey Key
     */
    protected $hashKey;

    /**
     * @var string HashIv Iv
     */
    protected $hashIv;
}
