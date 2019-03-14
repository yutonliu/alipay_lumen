###lumen5.8 下集成支付宝支付官方sdk
~~~
电脑网站支付
手机网站支付
app支付
~~~
 
#### `工具类目录` 
~~~
app\Tools\Alipay
~~~

####`路由目录`
~~~
routes\web.php
~~~

####`支付宝配置目录`
~~~
config\alipay.php
~~~

#### `全局调用支付宝配置`
~~~
在文件bootstrap\app.php下加

//配置支付宝数据
$app->configure('alipay');
~~~
