<?php

namespace Zero\Invoices\ECPay\Requests\Parameters;

use Zero\Invoices\ECPay\Requests\Parameters\Base;
use Zero\Invoices\ECPay\Requests\Parameters\IssueData;

class Issue extends Base
{
    /**
     * @var class 
     * 加密資料
     */
    public IssueData $Data;

    public function __construct()
    {
        $this->Data = new IssueData();
    }
}
