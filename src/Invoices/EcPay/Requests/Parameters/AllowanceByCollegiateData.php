<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

class AllowanceByCollegiateData
{
    /**
     * @var string
     * 特店編號
     */
    public $MerchantID;

    /**
     * @var string
     * 發票號碼 - 格式為「yyyy-MM-dd」or「yyyy/MM/dd」
     */
    public $InvoiceNo;

    /**
     * @var string 
     * 發票開立日期
     */
    public $InvoiceDate;

    /**
     * @var string
     * 通知類別
     * 開立折讓後，寄送將相關發票折讓資訊通知消費者
     * 請固定填  E：電子郵件
     */
    public $AllowanceNotify;

    /**
     * @var string
     * 客戶名稱
     */
    public $CustomerName;

    /**
     * @var string
     * 通知電子信箱
     */
    public $NotifyMail;

    /**
     * @var string
     * 通知手機號碼
     */
    public $NotifyPhone;
    
    /**
     * @var int
     * 折讓單總金額(含稅)
     */
    public $AllowanceAmount;

    /**
     * @var array
     * 商品
     * @var array[ItemSeq] 商品序號
     * @var array[ItemName] 商品名稱
     * @var array[ItemCount] 商品數量 支援整數 8 位小數 2 位
     * @var array[ItemWord] 商品單位
     * @var array[ItemPrice] 商品單價
     * @var array[ItemTaxType] 商品課稅別
     * @var array[ItemAmount] 商品合計
     */
    public $Items;

    /**
     * @var string
     * 消費者同意後回傳網址
     * 注意事項：請在收到 Server 端折讓成功結果通知後，請正確回應 1|OK 給綠界。
     */
    public $ReturnURL;
}
