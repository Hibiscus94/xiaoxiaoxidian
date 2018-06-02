<?php

class WxPayConfig
{
    const APPID = 'wx381556a7d2197b3a';//微信小程序ID
    const MCHID = '';//微信小程序支付商户号
    const KEY = '';//微信小程序支付密码
    const APPSECRET = '8b6947f83b2f2c90136bbf34fab09aef';//微信小程序秘钥
	const SSLCERT_PATH = '../cert/apiclient_cert.pem';
	const SSLKEY_PATH = '../cert/apiclient_key.pem';
	const CURL_PROXY_HOST = "0.0.0.0";
	const CURL_PROXY_PORT = 0;
	const REPORT_LEVENL = 1;
}
