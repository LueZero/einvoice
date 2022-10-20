<?php

namespace Zero\Invoices;

abstract class Invoice
{
    /**
     * @var array
     * 配置
     */
    protected $configs;

    /**
     * 呼叫配置檔案
     * @param string paymentName
     * @throws \Exception
     */
    public function requireConfig($paymentName)
    {
        $configs = require(dirname(__DIR__).'/config.php');

        if (empty($configs[$paymentName]))
            throw new \Exception('Zero\Invoice::[invoice config is empty]');

        $this->setConfigs($configs[$paymentName]);
    }

    /**
     * @var array configs
     */
    public function setConfigs(array $configs)
    {
        $this->$configs = $configs;
    }

    /**
     * 設定配置
     * @return array
     */
    public function getConfigs()
    {
        return $this->configs;
    }
}
