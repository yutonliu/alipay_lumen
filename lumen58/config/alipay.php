<?php

return [
    //应用ID,您的APPID。
    'app_id' => "2016091800538056",

    //商户私钥 和 支付宝配置的商户公钥是一对RSA
    'merchant_private_key' => "MIIEpAIBAAKCAQEA6CdBgyqkImjMm1d8DtZBqaqqU3iAbBVI5yLKap2FZKFGzeRWWL4eJfLCa4CTQndOgHvLYV9cUnvq8PXnJCzBwNw2llSQGOCLekslkjuaJKGRlZQ8vD/eNzpP92GZdsxLbpr3ljZ1SLoyirTkfQdVFL/+an3dza2QUfKogA/ZoPv4exXXYnZ21KIxKvIHqpcN7LMyjVwbj6GjqS83ETyArqnbO5v2Qt8zK5yzhULEt5k2mko6ZAk9SiOYvgEMO1RkjFlGtWXCn25y+Y09O9IV/RnQmhoJc52l8keNFHMNFvW18vVfiCGSPZxrG0EeJqKUGXKRhfPe1OXUYWl4CMoimwIDAQABAoIBAQC3nrUWhhekj7el9qBNK/JrvG1T8C/DTWKITuBDS6xCV72lBEG3l0hJQ6W7Wcsf+zXAMio/Linbo9/EDvtvhWcKoCMc7G28/33SkLV64GGfL5vy73jKfMnKbPjq9etoJ1ZSeYfy68gAaiWnyEQhEDefXexhVoSlNe68om3cPK0pwiCoWwO4P0O9pLfChm1o4Ync1T9ZEtnVxNEHec+c2XmoWLOMKe6kKUoV2TMtyBQOuDxtusEuD5EU4dEJbjTlxT7UNu4MEOcrDzKK1FGKnvjhKX2jEOJ3Vf0xulTu3OyYgaEOfMJ73CJ3LPZrBsM0kgfe6My5bHdjVAMB11Q92lnhAoGBAPfc4ImgBJQxfCiBGcJ7xSeCj44C9FFhJDaV3RTUm1yKzlJeoIvQiwUUYTLo8SG8q9ljs8v4Wcaek6rKncmUbAmR4foHWJDW47fvOIgaxKyIUf1AqusbZ7+xj/uiZOV3rFWH2DyQQTlT58L1OmaeRs+sqKgdqnsd1YbKAfjKiBRnAoGBAO/GWeienXG8NwQQep0sYCOzkk6i2cyMkWx2LbsBf5/+EzkwR6ysaGC+7s9WeGLXyETnxVB9BrlR69aVsgKvyWCPzVv0hXvsL/NFj5MOwdBCLWPU8nqoIqzyMeAkWeqX2RBfRZbYg0qnSyO7wqa5ipVidCimkSx7cn3h3hz6WT+tAoGBAMx02pMr+Br2JuCSfdk7l4nb3Obb8QUgCGsue8uvBOj1ZvPzMqOiRsrN4M/J7v5RT8Bmye0603NPY6fCsx2Q3P2X5LwGSzxOxlD3d75ttkZLvLYXHeYKGS67HXYIownWCcYT5H8wz1ympcrf1mjHrsmoNwdWUUZ1ealSAQZkqpOJAoGAXpfzGnmRBbDKR5k0tlMubodGfi1zHWaLbK3G5tL1haoX7WTlsfKmjxxkXHnxrpUQllaVmmZow63VC+gsvTCakrTIwLFcBAKu/BuCQ/L7dWzWOV9mdgtk+rPmB1Zv/sP/R50+d/9c9JPBagyGA36JdNvNlcf42AKvrYfxN59wnFUCgYA4hwsSIeQ69PrghI1MfUD/h0AJYx4Ay4CQ5rpE31dQdgFWAvqg5c4S96/ZEnHUD3YCdJQDQJStVs0ErstgOfGO73l7ftpAsLg3DEj6Tv0DUKgeTSl1NKOuyl3UKLqxvPn65q6h8kp/SzOtM4h8oJ7k5xFr6NwjBOqsYtHNibn01Q==",

    //异步通知地址
    'notify_url' => "http://alipay.yuton.xyz/alipay/notify",

    //同步跳转
    'return_url' => "http://alipay.yuton.xyz/alipay/paysucc",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关  https://openapi.alipay.com/gateway.do
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnyvWjqHKOyAbVRTEwddT6kkpavc0gTIR/l6BkOvfET4ifCscTuiRnrU6Ht3ECOzTZRoYcHjGw6vAxC2gWP7Ar6YQxIl+DlUG+SH6Eoy9ziOYkvsC4NY1vtq8lU73eX1HJRllba44RzhMMGhjzZ+sIxVG8DupR3zL5q7nUby926qeiUYOdCICLVsmp8BxhO4rgTyNJeYCxntljaixKaYx8cI9609bAfoSM0jKeAwBS6XyKFVvKb+mM0enSpottkZviSi1CO8AljvjUNCMAHQsmvCxYwbZASBWCV6sj+++IKrtLgBOD0FZN+73laVcC0l+vRV+XDTvexfZ47xrIRnFXQIDAQAB",
];