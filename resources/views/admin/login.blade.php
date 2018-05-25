<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="{{asset('/i/favicon.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{asset('/i/app-icon72x72@2x.png')}}">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="{{asset('/css/admin/amazeui.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/css/admin/admin.css')}}">
  <link rel="stylesheet" href="{{asset('/css/admin/app.css')}}">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
      <div class="myapp-login-logo-text">
        <div class="myapp-login-logo-text">
          后台管理界面
          <span> 登录</span>
          <i class="am-icon-skyatlas"></i>

        </div>
      </div>

      <div class="login-font">
        <span>登录 </span>
      </div>
      <!-- @yield('content') -->

      <div class="am-u-sm-10 login-am-center">
        <form class="am-form" id="login">
          <fieldset>
            <div class="am-form-group">
              <input type="email" class="" id="doc-ipt-email-1" placeholder="输入电子邮件">
            </div>
            <div class="am-form-group">
              <input type="password" class="" id="doc-ipt-pwd-1" placeholder="请输入密码">
            </div>
            <p>
              <button type="button" class="am-btn am-btn-default" id="submit">登录</button>
            </p>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

  <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
  <script src="{{asset('/js/admin/amazeui.min.js')}}"></script>
  <script src="{{asset('/js/admin/app.js')}}"></script>
  <script src="{{asset('/js/admin/login.js')}}"></script>

</body>

</html>
