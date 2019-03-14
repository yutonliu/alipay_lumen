<?php
namespace App\Tools;

use App\Tools\Alipay\Aop\AlipayTradePayRequest;
use App\Tools\Alipay\Service\AlipayTradeService;
use App\Tools\Alipay\Buildermodel\AlipayTradeWapPayContentBuilder;


class Wappay implements Alipay
{
    /**
     * 商户订单号，商户网站订单系统中唯一订单号，必填
     * 订单名称，必填
     * 付款金额，必填
     * 商品描述，可空
     */
    public static function _request($out_trade_no,$subject,$total_amount,$body="")
    {
        //支付宝配置文件
        $config = config('alipay');

        //超时时间
        $timeout_express="1m";

        $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setOutTradeNo($out_trade_no);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setTimeExpress($timeout_express);

        $payResponse = new AlipayTradeService($config);
        $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);

        return ;

    }
}