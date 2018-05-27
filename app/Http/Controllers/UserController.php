<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
	public function savewechatUser() {
		$user = session('wechat.oauth_user');
        $dbcheck=DB::table('users')->where('openId',$user['default']['id'])->first();
        if(!$dbcheck){
		$data=[
            'openId' =$user['default']['id'];
            'name'  =$user['default']['name'];
            'nickname' =$user['default']['nickname'];
            'avatar' =$user['default']['avatar'];
            'email' = $user['default']['email'];
            'sex'   = $user['original']['sex'];
            'city'  = $user['original']['city'];
        ]
        User::create($data);
        return view();
        }
        return view();
	}
    public function adminUser(){
        $user = session('wechat.oauth_user');
    }
}
