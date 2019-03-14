<?php

namespace App\Tools;

interface Alipay
{
    /**
     * 商户订单号，商户网站订单系统中唯一订单号，必填
     * 订单名称，必填
     * 付款金额，必填
     * 商品描述，可空
     */

    public static function _request($out_trade_no,$subject,$total_amount,$body="");
}