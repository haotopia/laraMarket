<?php

namespace App\Http\Controllers;

use Log;

class WeChatController extends Controller {
	/**
	 *处理微信请求
	 *
	 *@return string
	 *
	 */
	public function server() {
		Log::info('request arrived.');
		$app = app('wechat.official_account');
		$app->server->push(function ($message) {
			return "欢迎关注 Haotopia！";
		});

		return $app->server->server();
	}

	public function getPayRes() {
		return $app->template_message->getIndustry();
		/*$openId = 'oMbyU0fB9CBrvDqGU9A8Q2eoBcmc';
			$message = new Text('你有一条新的购买消息，请注意查收');
			$app = app('wechat.official_account');
		*/
	}

}
