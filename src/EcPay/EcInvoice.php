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
     * @var string merchantID 特店編號
     */
    protected $merchantID;

    /**
     * @var string hashKey
     */
    protected $hashKey;

    /**
     * @var string hashIv
     */
    protected $hashIv;
}
