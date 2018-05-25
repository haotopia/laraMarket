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
  <script src="{{asset('/js/admin/echarts.min.js')}}"></script>
</head>

<body data-type="index">


  <header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
      <a href="javascript:;" class="tpl-logo">
        <img src="{{asset('/img/logo.png')}}" alt="">
      </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}">
      <span class="am-sr-only">导航切换</span>
      <span class="am-icon-bars"></span>
    </button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

      <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
        <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
          <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
            <span class="am-icon-bell-o"></span> 提醒
            <span class="am-badge tpl-badge-success am-round">5</span>
          </a>
          <ul class="am-dropdown-content tpl-dropdown-content">
            <li class="tpl-dropdown-content-external">
              <h3>你有
                <span class="tpl-color-success">5</span> 条提醒</h3>
              <a href="###">全部</a>
            </li>
            <li class="tpl-dropdown-list-bdbc">
              <a href="#" class="tpl-dropdown-list-fl">
                <span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 【预览模块】移动端 查看时 手机、电脑框隐藏。</a>
              <span class="tpl-dropdown-list-fr">3小时前</span>
            </li>
            <li class="tpl-dropdown-list-bdbc">
              <a href="#" class="tpl-dropdown-list-fl">
                <span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 移动端，导航条下边距处理</a>
              <span class="tpl-dropdown-list-fr">15分钟前</span>
            </li>
            <li class="tpl-dropdown-list-bdbc">
              <a href="#" class="tpl-dropdown-list-fl">
                <span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span> 追加统计代码</a>
              <span class="tpl-dropdown-list-fr">2天前</span>
            </li>
          </ul>
        </li>
        <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
          <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
            <span class="am-icon-comment-o"></span> 消息
            <span class="am-badge tpl-badge-danger am-round">9</span>
          </a>
          <ul class="am-dropdown-content tpl-dropdown-content">
            <li class="tpl-dropdown-content-external">
              <h3>你有
                <span class="tpl-color-danger">9</span> 条新消息</h3>
              <a href="###">全部</a>
            </li>
            <li>
              <a href="#" class="tpl-dropdown-content-message">
                <span class="tpl-dropdown-content-photo">
                  <img src="{{asset('/img/user02.png')}}" alt=""> </span>
                <span class="tpl-dropdown-content-subject">
                  <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                  <span class="tpl-dropdown-content-time">10分钟前 </span>
                </span>
                <span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>
              </a>
              <a href="#" class="tpl-dropdown-content-message">
                <span class="tpl-dropdown-content-photo">
                  <img src="{{asset('/img/user03.png')}}" alt=""> </span>
                <span class="tpl-dropdown-content-subject">
                  <span class="tpl-dropdown-content-from"> Steam </span>
                  <span class="tpl-dropdown-content-time">18分钟前</span>
                </span>
                <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
              </a>
            </li>

          </ul>
        </li>
        <li class="am-hide-sm-only">
          <a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link">
            <span class="am-icon-arrows-alt"></span>
            <span class="admin-fullText">开启全屏</span>
          </a>
        </li>

        <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
          <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
            <span class="tpl-header-list-user-nick">禁言小张</span>
            <span class="tpl-header-list-user-ico">
              <img src="{{asset('/img/user01.png')}}">
            </span>
          </a>
          <ul class="am-dropdown-content">
            <li>
              <a href="#">
                <span class="am-icon-bell-o"></span> 资料</a>
            </li>
            <li>
              <a href="#">
                <span class="am-icon-cog"></span> 设置</a>
            </li>
            <li>
              <a href="#">
                <span class="am-icon-power-off"></span> 退出</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="###" class="tpl-header-list-link">
            <span class="am-icon-sign-out tpl-header-list-ico-out-size"></span>
          </a>
        </li>
      </ul>
    </div>
  </header>







  <div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
      <div class="tpl-left-nav-title">
        Amaze UI 列表
      </div>
      <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
          <li class="tpl-left-nav-item">
            <a href="{{route('admin.index')}}"  class="nav-link active">
              <i class="am-icon-home"></i>
              <span>首页</span>
            </a>
          </li>

          <li class="tpl-left-nav-item">
            <!-- 打开状态 a 标签添加 active 即可   -->
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-table"></i>
              <span>商品</span>
              <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu">
              <li>
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="{{route('admin.table_font_list')}}">
                  <i class="am-icon-angle-right"></i>
                  <span>商品管理</span>
                  <!-- <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i> -->
                </a>
                <a href="{{route('admin.table_classify')}}">
                  <i class="am-icon-angle-right"></i>
                  <span>分类管理</span>
                  <!-- <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i> -->
                </a>

                <!-- <a href="table-commit-list">
                  <i class="am-icon-angle-right"></i>
                  <span>添加商品</span>
                   <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                </a> -->
              </li>
            </ul>
          </li>

          <li class="tpl-left-nav-item">
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-wpforms"></i>
              <span>订单</span>
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu">
              <li>
                 <a href="{{route('admin.list')}}">
                    <i class="am-icon-angle-right"></i>
                    <span>订单管理</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="tpl-left-nav-item">
            <a href="{{route('admin.login')}}" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-key"></i>
              <span>登录</span>

            </a>
          </li>
        </ul>
      </div>
    </div>





    <div class="tpl-content-wrapper">
      <div class="tpl-content-page-title">
        Amaze UI 首页组件
      </div>
      <ol class="am-breadcrumb">
        <li>
          <a href="#" class="am-icon-home">首页</a>
        </li>
        <li>
          <a href="#">分类</a>
        </li>
        <li class="am-active">内容</li>
      </ol>
      <div class="tpl-content-scope">
        <div class="note note-info">
          <h3>简单介绍
            <span class="close" data-close="note"></span>
          </h3>
          <p> 该网站是一个后台管理界面</p>
        </div>
      </div>

      <div class="row">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
          <div class="dashboard-stat blue">
            <div class="visual">
              <i class="am-icon-comments-o"></i>
            </div>
            <div class="details">
              <div class="number" id="waitlist"> 0 </div>
              <div class="desc"> 待发货订单 </div>
            </div>
            <a class="more" href="#"> 查看更多
              <i class="m-icon-swapright m-icon-white"></i>
            </a>
          </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
          <div class="dashboard-stat red">
            <div class="visual">
              <i class="am-icon-bar-chart-o"></i>
            </div>
            <div class="details">
              <div class="number" id="giveuplist"> 0 </div>
              <div class="desc"> 退款售后订单 </div>
            </div>
            <a class="more" href="#"> 查看更多
              <i class="m-icon-swapright m-icon-white"></i>
            </a>
          </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
          <div class="dashboard-stat green">
            <div class="visual">
              <i class="am-icon-apple"></i>
            </div>
            <div class="details">
              <div class="number" id="endlist"> 0 </div>
              <div class="desc"> 已完成订单 </div>
            </div>
            <a class="more" href="#"> 查看更多
              <i class="m-icon-swapright m-icon-white"></i>
            </a>
          </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
          <div class="dashboard-stat purple">
            <div class="visual">
              <i class="am-icon-android"></i>
            </div>
            <div class="details">
              <div class="number" id="alllist"> 0 </div>
              <div class="desc"> 所有订单 </div>
            </div>
            <a class="more" href="#"> 查看更多
              <i class="m-icon-swapright m-icon-white"></i>
            </a>
          </div>
        </div>



      </div>
    </div>

  </div>


  <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
  <script src="{{asset('/js/admin/amazeui.min.js')}}"></script>
  <script src="{{asset('/js/admin/app.js')}}"></script>
  <script src="{{asset('/js/admin/index.js')}}"></script>
</body>

</html>
