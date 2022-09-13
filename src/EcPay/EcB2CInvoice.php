<?php

namespace Zero\EcPay;

use Zero\EcPay\EcInvoice;
use Zero\EcPay\Requests\Parameters\Issue;
use WpOrg\Requests\Requests;

class EcB2CInvoice extends EcInvoice
{   
    /**
     * @param array configs 
     */
    public function __construct($configs)
    {
        $this->configs = $configs;
        $this->hashKey = $this->configs['invoiceParameters']['HashKey'];
        $this->hashIv = $this->configs['invoiceParameters']['HashIV'];
    }

    /**
     * @param Issue issueRequestParameter 
     */
    public function createIssue(Issue $issueRequestParameter)
    {
        $sendData = array_filter((array) $issueRequestParameter);
        $sendData['Data'] = $this->encrypt($sendData['Data']);
        $response = Requests::post($this->configs['B2C']['invoiceURLs']['baseURL'] . $this->configs['B2C']['invoiceURLs']['issue'], [
            'Content-Type: application/json',
        ], json_encode($sendData));

        $result = json_decode($response->body, true);
        $result['Data'] = $this->decrypt($result['Data']);

        return json_encode($result, true);
    }

    /**
     * 加密
     * @param string data
     */
    public function encrypt($data)
    {
        if (openssl_cipher_iv_length('aes-128-cbc') !== strlen($this->hashIv)) {
            throw new \LogicException('hash iv is not valid');
        }

        return openssl_encrypt($this->addPadding(urlencode(json_encode($data))), 'aes-128-cbc', $this->hashKey, OPENSSL_ZERO_PADDING, $this->hashIv);
    }

    /**
     * 解密
     * @param string encrypted
     */
    public function decrypt($encrypted)
    {
        if (openssl_cipher_iv_length('aes-128-cbc') !== strlen($this->hashIv)) {
            throw new \LogicException('hash iv is not valid');
        }

        return json_decode(urldecode($this->stripPadding(openssl_decrypt($encrypted, 'aes-128-cbc', $this->hashKey, OPENSSL_ZERO_PADDING, $this->hashIv))), true);
    }

    /**
     * 強度 128/8 = 16bytes
     * @param string str
     * @param int size
     * @return string
     */
    protected function addPadding(string $str, int $size = 16)
    {
        $len = strlen($str);
        $pad = $size - ($len % $size);
        $str .= str_repeat(chr($pad), $pad);
        return $str;
    }

    /**
     * @param string string
     * @return string
     * @throws \Exception
     */
    protected function stripPadding($string)
    {
        $sLast = ord(substr($string, -1));
        $sLastC = chr($sLast);
        $pCheck = substr($string, -$sLast);

        if (preg_match("/$sLastC{" . $sLast . "}/", $string)) {
            $string = substr($string, 0, strlen($string) - $sLast);
            return $string;
        }

        throw new \Exception("bad hashed string $string");
    }
}
