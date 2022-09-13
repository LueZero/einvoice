<?php

namespace Zero\EcPay\Requests\Parameters;

use Zero\EcPay\Requests\Parameters\IssueData;

class Issue
{
    /**
     * @var string 
     * 平台商編號
     */
    public $PlatformID;

    /**
     * @var string 
     * 特店編號
     */
    public $MerchantID;

    /**
     * @var array 
     * 傳入資料
     */
    public $RqHeader;

    /**
     * @var IssueData 
     * 加密資料
     */
    public $Data;

    public function __construct()
    {
        $this->Data = new IssueData();
    }
}