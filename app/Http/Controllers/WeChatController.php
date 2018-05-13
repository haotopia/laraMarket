<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;

class WeChatController extends Controller
{
    /**
    *处理微信请求
    *
    *@return string
    *
    */
    public function server()
    {
        Log::info('request arrived.');
        $app = app('wechat.official_account');
        $app->server->push(function($message){
            return "欢迎关注 Haotopia！";
        });

        return $app->server->server();
    }

}
