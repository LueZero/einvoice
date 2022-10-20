<?php

namespace Zero\Invoices\EcPay\Requests\Parameters;

class IssueData
{
    /**
     * @var string 
     * 特店編號
     */
    public $MerchantID;

    /**
     * @var string 
     * 特店自訂編號
     */
    public $RelateNumber;

    /**
     * @var string 
     * 客戶編號
     */
    public $CustomerID;

    /**
     * @var string 
     * 統一編號
     */
    public $CustomerIdentifier;

    /**
     * @var string 
     * 客戶名稱
     * 當列印註記[Print]=1(列印)時，此參數為必填
     */
    public $CustomerName;

    /**
     * @var string 
     * 客戶地址
     * 當列印註記[Print]=1(列印)時，此參數為必填
     */
    public $CustomerAddr;

    /**
     * @var string 
     * 客戶手機號碼
     */
    public $CustomerPhone;

    /**
     * @var string 
     * 客戶電子信箱
     */
    public $CustomerEmail;

    /**
     * @var string 
     * 通關方式
     * 1：非經海關出口 2：經海關出口
     */
    public $ClearanceMark;

    /**
     * @var string 
     * 列印註記
     * 0：不列印
     * 1：要列印
     * 注意事項：
     *   1. 當捐贈註記[Donation]=1(要捐贈)，此參數請帶 0
     *   2. 當統一編號[CustomerIdentifier]有值時，
     *      2.1 載具類別[CarrierType]為空值時，此參數請帶 1
     *      2.2 載具類別[CarrierType]=1 或 2 時，此參數請帶 0
     *      2.3 載具類別[CarrierType]=3 時，此參數可帶 0 或 1
     */
    public $Print;

    /**
     * @var string 
     * 捐贈註記 
     * 1. 0=不捐贈
     * 2. 1=要捐贈
     * 
     * 注意事項：
     *    當統一編號[CustomerIdentifier]有值或載具類別[CarrierType]有值
     *    時，此參數請帶 0
     */
    public $Donation;

    /**
     * @var string 
     * 捐贈碼
     * 當捐贈註記[Donation]=1(要捐贈)時，為必填
     * 格式為阿拉伯數字為限，最少三碼，最多七碼，首位可以為零
     */
    public $LoveCode;

    /**
     * @var string 
     * 載具類別
     * 
     * 空字串：無載具
     *   1. 綠界電子發票載具
     *   2. 自然人憑證號碼
     *   3. 手機條碼載具
     * 注意事項：
     *   1. 當列印註記[Print] =1(要列印)或統一編號[CustomerIdentifier]
     *      有值時，請帶空字串
     *   2. 只有存在綠界電子發票載具(此參數帶 1)的發票，中獎後才能在`ibon`列印領取
     */
    public $CarrierType;


    /**
     * @var string 
     * 載具編號
     * 1. [CarrierType]="" 時，請帶空字串
     * 2. [CarrierType]=1 時，請帶空字串，系統會自動帶入值，為客戶電子信箱或客戶手機號碼擇一(以客戶電子信箱優先)
     * 3. [CarrierType]=2 時，請帶固定長度為 `16` 且格式為 `2` 碼大寫英文字母加上 '14' 碼數字
     * 4. [CarrierType]=3 時，請帶固定長度為 `8` 碼字元，第 `1` 碼為【/】; 其餘 `7` 碼則由數字【0-9】、大寫英文【A-Z】與特殊符號【+】【-】【.】這
     *    39 個字元組成的編號
     * 
     * 若載具編號為手機條碼載具時，請先呼叫`手機條碼`驗證進行檢核
     */
    public $CarrierNum;

    /**
     * @var string 
     * 課稅類別
     * 1. 當字軌類別[InvType]為 07 時，則此欄位請填入 1、2、3 或 9
     * 2. 當字軌類別[InvType]為 08 時，則此欄位請填入 3 或 4
     *
     * 應稅 = 1
     * 零稅率 = 2
     * 免稅 = 3
     * 應稅（特種稅率）= 4
     * 混合應稅與免稅或零稅率時(限收銀機發票無法分辨時使用，且需通過申請核可) = 9
     */
    public $TaxType;

    /**
     * @var string 
     * 特種稅額類別
     * 
     * 1. 當課稅類別[TaxType]為 1/2/9 時，系統將會自動帶入數字【0】
     * 2. 當課稅類別[TaxType]為 3 時，則該參數必填，請填入數字【8】
     * 3. 當課稅類別[TaxType]為 4 時，則該參數必填，可填入數字【1-8】
     */
    public $SpecialTaxType;

    /**
     * @var int 
     * 發票總金額(含稅) 金額不可為 0 元。
     */
    public $SalesAmount;

    /**
     * @var string 
     * 發票備註
     */
    public $InvoiceRemark;

    /**
     * @var array 商品
     * @var array[ItemSeq] 商品序號
     * @var array[ItemName] 商品名稱
     * @var array[ItemCount] 商品數量 支援整數 8 位小數 2 位
     * @var array[ItemWord] 商品單位
     * @var array[ItemPrice] 商品單價
     * @var array[ItemTaxType] 商品課稅別
     * @var array[ItemAmount] 商品合計
     * @var array[ItemRemark] 商品備註
     */
    public $Items;

    /**
     * @var string 
     * 字軌類別
     * 1. 07：一般稅額
     * 2. 08 : 特種稅額
     */
    public $InvType;

    /**
     * @var string 
     * 商品單價是否含稅
     * 1. 1：含稅
     * 2. 0：未稅
     */
    public $Vat;
}
