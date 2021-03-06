<?php

namespace App\Http\Controllers\Alipay\PC;

use App\Http\Controllers\Controller;

use App\Tools\Alipay\Pcpay;
use App\Tools\Alipay\Wappay;
use App\Tools\Alipay\Apppay;

class AlipayController extends Controller
{
    /**
     * pc网站支付
     */
    public function pcpay()
    {
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = time().rand(100,999);

        //订单名称，必填
        $subject = "杜蕾斯奶糖";

        //付款金额，必填
        $total_amount = 0.01;

        //商品描述，可空
        $body = "这是一件商品";

        $response = Pcpay::payRequest($out_trade_no,$subject,$total_amount,$body="");

        return $response;
    }


    /**
     * 手机网站支付
     */
    public function wappay()
    {
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = time().rand(100,999);

        //订单名称，必填
        $subject = "杜蕾斯奶糖";

        //付款金额，必填
        $total_amount = 0.01;

        //商品描述，可空
        $body = "这是一件商品";

        $response = Wappay::payRequest($out_trade_no,$subject,$total_amount,$body="");

        return ;
    }

    /**
     * 手机网站支付
     */
    public function apppay()
    {   
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = time().rand(100,999);

        //订单名称，必填
        $subject = "杜蕾斯奶糖";

        //付款金额，必填
        $total_amount = 0.01;

        //商品描述，可空
        $body = "这是一件商品";

        $response = Apppay::payRequest($out_trade_no,$subject,$total_amount,$body="");

        return $response;
    }

    /**
     * 同步回调
     */
    public function succ()
    {
        echo "恭喜您支付成功";
    }

    /**
     *异步回调地址
     */
    public function notify(Request $request)
    {
        $config = config('alipay');
        $arr=$_POST;
        $alipaySevice = new AlipayTradeService($config);
        $alipaySevice->writeLog(var_export($_POST,true));
        $result = $alipaySevice->check($arr);
        $alipaySevice->writeLog(var_export("验证签名结果:".$result,true));
        if($result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代


            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表

            //商户订单号

            $out_trade_no = $_POST['out_trade_no'];

            //支付宝交易号

            $trade_no = $_POST['trade_no'];

            //交易状态
            $trade_status = $_POST['trade_status'];


            if($_POST['trade_status'] == 'TRADE_FINISHED') {

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序

                //注意：
                //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知
            }
            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            echo "success";	//请不要修改或删除
        }else {
            //验证失败
            echo "fail";

        }
    }



}
