<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {
	public function show(Request $request) {
		$user = session('wechat.oauth_user');
		if (Cache::get('openId') != $user['default']['id']) {
			Cache::forget('openId');
		}
		$dbcheck = DB::table('users')->where('openId', $user['default']['id'])->first();
		if (!$dbcheck) {
			$data = [
				'openId' => $user['default']['id'],
				'name' => $user['default']['name'],
				'nickname' => $user['default']['nickname'],
				'avatar' => $user['default']['avatar'],
				'email' => $user['default']['email'],
				'sex' => $user['default']['original']['sex'],
				'city' => $user['default']['original']['city'],
				'type' => 0,
			];
			User::create($data);
			Cache::put('openId', $user['default']['id'], 60);
			return view('home/show');
		}
		Cache::put('openId', $user['default']['id'], 60);

		return view('home/show');
	}
	public function wechatUser(Request $request) {
		$openid = Cache::get('openId');
		$user = DB::table('users')->where('openid', $openid)->first();
		return [
			'img' => $user->avatar,
			'name' => $user->nickname,
		];
	}
}