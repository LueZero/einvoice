<?php

namespace Zero\EcPay;

use Zero\EcPay\Requests\Parameters\Issue;

class EcInvoice
{
    /**
     * @var array
     * 配置
     */
    protected $configs;

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
     * @var array configs
     */
    public function setConfig(array $configs)
    {
        $this->$configs = $configs;
    }
}
