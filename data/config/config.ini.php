<?php
// defined('InShopNC') or exit('Access Invalid!');

$config = array();
$config['base_site_url']        = 'http://www.corecreate.cn';
$config['shop_site_url'] 		= 'http://www.corecreate.cn/shop';
$config['cms_site_url'] 		= 'http://www.corecreate.cn/cms';
$config['microshop_site_url'] 	= 'http://www.corecreate.c/microshop';
$config['circle_site_url'] 		= 'http://www.corecreate.cn/circle';
$config['admin_site_url'] 		= 'http://www.corecreate.cn/admin';
$config['mobile_site_url'] 		= 'http://www.corecreate.cn/mobile';
$config['wap_site_url'] 		= 'http://www.corecreate.cn/wap';
$config['chat_site_url'] 		= 'http://www.corecreate.cn/chat';
$config['node_site_url'] 		= 'http://www.corecreate.cn:8090';
$config['upload_site_url']		= 'http://www.corecreate.cn/data/upload';
$config['resource_site_url']	= 'http://www.corecreate.cn/data/resource';
$config['version'] 		= '201502020315';
$config['setup_date'] 	= '2015-12-28 19:10:10';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'shopnc_';
$config['db']['1']['dbhost']       = '192.168.1.11';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'd080bc3a-9547';
$config['db']['1']['dbpwd']        = 'f615949f-85bb';
$config['db']['1']['dbname']       = 'dc99a4de10fbd4d7a8647042d1d4b4832';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '3F50_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'shopjl';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
$config['delivery_site_url']    = 'http://www.corecreate.cn/delivery';
return $config;