<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'wechat',
    ];
    protected function tokensMatch($request){
        $token=$request->ajax()?$request->header('X-CSRF-TOKEN'):$request->input('_token');
        return $request->session()->token() == $token;
    }
    public function handle($request,\Closure $next){
    if($request->method() == 'POST')
    {
        return $next($request);
    }

    return parent::handle($request,$next);
}
