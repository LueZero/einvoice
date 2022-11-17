<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

use Zero\Invoices\EcPay\Requests\Parameters\Base;
use Zero\Invoices\EcPay\Requests\Parameters\AllowanceInvalidData;

class AllowanceInvalid extends Base
{
    public function __construct()
    {
        $this->Data = new AllowanceInvalidData();
    }
}
