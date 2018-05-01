<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware {
	/**
	 * The URIs that should be excluded from CSRF verification.
	 *
	 * @var array
	 */
	protected $except = [
		'wechat',
	];
	protected function tokensMatch($request) {
		$token = $request->ajax() ? $request->header('X-CSRF-TOKEN') : $request->input('_token');
		return $request->session()->token() == $token;
	}
	public function handle($request, \Closure $next, $guard = null) {
		/*if (empty(session("id"))){
			            $user = session('wechat.oauth_user');
			            $openid = $user['id'];
			    　　　　　　//检测数据库中用户账号和微信号是否绑定
			            $result = WxStudent::check_boundwechat($openid);
			            if ($result=='200'){
			                return $next($request);
			            }else{
			                return response("请登录", 403)->header("X-CSRF-TOKEN", csrf_token());
			            }
			        } else if(!empty(session("id"))) {
			            return $next($request);

		*/
		if ($request->method() == 'POST') {
			return $next($request);
		}

		return parent::handle($request, $next);
	}
}
