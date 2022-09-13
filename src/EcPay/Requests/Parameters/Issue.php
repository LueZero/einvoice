<?php

namespace Zero\EcPay\Requests\Parameters;

use Zero\EcPay\Requests\Parameters\IssueData;

class Issue
{
    /**
     * @var string platformID 平台商編號
     */
    public $PlatformID;

    /**
     * @var string merchantID 特店編號
     */
    public $MerchantID;

    /**
     * @var array rqHeader 傳入資料
     */
    public $RqHeader;

    /**
     * @var IssueData data 加密資料
     */
    public $Data;

    public function __construct()
    {
        $this->Data = new IssueData();
    }
}