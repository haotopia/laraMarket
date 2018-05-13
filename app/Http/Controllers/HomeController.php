<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	public function show() {
		return view('home/show');
	}

	public function wechatUser() {
		$user = session('wechat.oauth_user');
		return [
			'img' => $user['default']['avatar'],
			'name' => $user['default']['nickname'],
		];
	}
}
