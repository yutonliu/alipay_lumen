<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*
*支付宝支付
**/

//PC支付
$router->get('alipay/pc', 'Alipay\PC\AlipayController@pcpay');
//手机支付
$router->get('alipay/wap', 'Alipay\PC\AlipayController@wappay');
//App支付
$router->get('alipay/app', 'Alipay\PC\AlipayController@apppay');

//同步回调
$router->get('alipay/paysucc', 'Alipay\PC\AlipayController@succ');
//异步回调
$router->post('alipay/notify', 'Alipay\PC\AlipayController@notify');



