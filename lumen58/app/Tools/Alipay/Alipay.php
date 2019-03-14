<?php

namespace App\Tools;

interface Alipay
{
    //接收请求参数
    public function get();
    //请求支付宝服务器
    public function request();
}