<?php
/*
 * Copyright (C) xiuno.com
 */

!defined('FRAMEWORK_PATH') && exit('FRAMEWORK_PATH not defined.');

include BBS_PATH.'admin/control/admin_control.class.php';

class sms_control extends admin_control {
	
	function __construct(&$conf) {
		parent::__construct($conf);
		$this->check_admin_group();
	}
	
	public function on_index() {
		$this->on_setting();
	}
	public function on_setting() {
	$kv = $this->kv->get('mobile_setting');
if($this->form_submit()) {
	$everyday_limit = core::gpc('everyday_limit', 'P');
	$send_plat = core::gpc('send_plat', 'P');
	$tencent_appid = core::gpc('tencent_appid', 'P');
	$tencent_appkey = core::gpc('tencent_appkey', 'P');
	$tencent_sign = core::gpc('tencent_sign', 'P');
	$aliyun_appid = core::gpc('aliyun_appid', 'P');
	$aliyun_appkey = core::gpc('aliyun_appkey', 'P');
	$aliyun_sign = core::gpc('aliyun_sign', 'P');
	$aliyun_templateid = core::gpc('aliyun_templateid', 'P');

	$kv = array();
	$kv['everyday_limit'] = $everyday_limit;
	$kv['send_plat'] = $send_plat;
	$kv['tencent_appid'] = $tencent_appid;
	$kv['tencent_appkey'] = $tencent_appkey;
	$kv['tencent_sign'] = $tencent_sign;
	$kv['aliyun_appid'] = $aliyun_appid;
	$kv['aliyun_appkey'] = $aliyun_appkey;
	$kv['aliyun_sign'] = $aliyun_sign;
	$kv['aliyun_templateid'] = $aliyun_templateid;
	
	$this->kv->set('mobile_setting', $kv);
	
	$this->message('修改成功');
}
	$this->view->assign('input', $kv);
	$this->view->display('sms_setting.htm');
	}
}
