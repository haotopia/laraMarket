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

		Log::info('return response.');

		return $app->server->server();
	}

	public function menu_add() {
		$app = app('wechat');
		$menu = $app->menu;
		$button = [
			[
				"type" => "view",
				"name" => "进入商城",
				"url" => BASE_URL . "",
			],
		];
		$menu->add($button);
	}

}
