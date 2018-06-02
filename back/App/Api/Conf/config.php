<?php

header("Content-Type:text/html; charset=utf-8");
error_reporting(0);

define('SELF_ROOT','http://www.wxapp.com/');

$urkn= SELF_ROOT."Data/app/";
define('APP_URL',$urkn);

return array(

    'key'         =>   15222,
    'URL_MODEL'   =>0,
    'app_name'   =>'小小西点',
    'DB_FIELDS_CACHE'       =>true,
	'base'					=>$urkn.'62/3057c1502ae5a4d514baec129f72948c266e/',
	'TMPL_CACHE_ON' => false,
	'HTML_CACHE_ON' => false,
	'LOG_RECORD'            =>  false,
	'LOG_TYPE'              =>  'File',
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',
	'LOG_EXCEPTION_RECORD'  =>  false,
	LOAD_EXT_CONFIG => "functions",

	'TMPL_PARSE_STRING'=>array(
		'__DATA__'=>__ROOT__.'/Data'
	),
	'TMPL_ACTION_ERROR'     =>  'Public/error',
	'TMPL_ACTION_SUCCESS'   =>  'Public/success',

    'weixin'=>array(
        'appid' =>'wx381556a7d2197b3a',//微信小程序appid
        'secret'=>'8b6947f83b2f2c90136bbf34fab09aef', //微信小程序secret
        'mchid' => '1395927502',//小程序支付商户号
        'key' => 'Syxyx679KlfgYix7928sdDuv32kmCopH',//小程序支付KEY
        'notify_url'=>'http://www.wxapp.com/index.php/Api/Wxpay/notify',
    ),
);
?>