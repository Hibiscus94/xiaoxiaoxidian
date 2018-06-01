使用方法：

1.到网站后台小程序配置填写微信小程序的相关资料

2.修改App/Common/Conf/db.php 数据库连接参数；

3.修改App/Api/Conf/config.php 微信小程序的appid、secret、mchid、key、notify_url，SELF_ROOT的参数；

4.修改ThinkPHP\Library\Vendor\wxpay\lib\WxPay.Config.php 微信小程序的appid、appsecret、mchid、key参数；

5.修改ThinkPHP\Library\Vendor\WeiXinpay\lib\WxPay.Config.php 微信小程序的appid、appsecret、mchid、key、notify_url参数；

6.修改App/Api/Controller/WxPayController.class.php 50行链接

7.修改前端app.js文件里的 hostUrl appId appKey ceshiUrl 四个参数为你的小程序实际参数,

8.上传你的支付文件证书到/ThinkPHP/Library/Vendor/WeiXinpay/cert/目录 及 /ThinkPHP/Library/Vendor/wxpay/cert/ 这个目录下

9.修改前端utils/config.js文件里面的 var host = "为你的小程序网址"

10.修改前端utils/config.js文件里面的 baiduAk: '为你申请到的附近你本地的AK秘钥'

11.最后在微信小程序设置里面把https://api.map.baidu.com加入到你的 request 合法域名 socket 合法域名 uploadFile 合法域名 downloadFile 合法域名 否则无法跟你的AK互通地理定位信息

12.运行https://www.xxx.com/sncp恢复你的数据库信息即可 sncp登录账号密码为 admin 123456 点击数据库恢复 选中你的数据库名字 直接进行恢复 即可

后台地址：https://www.xxx.com/index.php/Admin

用户名是admin，密码是123456