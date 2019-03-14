<?php
namespace App\Tools;

use App\Tools\Alipay\Aop\AlipayTradePayRequest;
use App\Tools\Alipay\Service\AlipayTradeService;
use App\Tools\Alipay\Buildermodel\AlipayTradePagePayContentBuilder;


class Pcpay implements Alipay
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

        //构造参数
        $payRequestBuilder = new AlipayTradePagePayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setOutTradeNo($out_trade_no);

        $aop = new AlipayTradeService($config);

        /**
         * pagePay 电脑网站支付请求
         * @param $builder 业务参数，使用buildmodel中的对象生成。
         * @param $return_url 同步跳转地址，公网可以访问
         * @param $notify_url 异步通知地址，公网可以访问
         * @return $response 支付宝返回的信息
         */
        $response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);

        return $reponse;
    }
}