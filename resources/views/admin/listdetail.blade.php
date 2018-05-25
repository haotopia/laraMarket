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
  <link rel="stylesheet" href="{{asset('/css/admin/listdetail.css')}}">
</head>

<body data-type="generalComponents">
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
        <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
          <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
            <span class="am-icon-calendar"></span> 进度
            <span class="am-badge tpl-badge-primary am-round">4</span>
          </a>
          <ul class="am-dropdown-content tpl-dropdown-content">
            <li class="tpl-dropdown-content-external">
              <h3>你有
                <span class="tpl-color-primary">4</span> 个任务进度</h3>
              <a href="###">全部</a>
            </li>
            <li>
              <a href="javascript:;" class="tpl-dropdown-content-progress">
                <span class="task">
                  <span class="desc">Amaze UI 用户中心 v1.2 </span>
                  <span class="percent">45%</span>
                </span>
                <span class="progress">
                  <div class="am-progress tpl-progress am-progress-striped">
                    <div class="am-progress-bar am-progress-bar-success" style="width:45%"></div>
                  </div>
                </span>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="tpl-dropdown-content-progress">
                <span class="task">
                  <span class="desc">新闻内容页 </span>
                  <span class="percent">30%</span>
                </span>
                <span class="progress">
                  <div class="am-progress tpl-progress am-progress-striped">
                    <div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div>
                  </div>
                </span>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="tpl-dropdown-content-progress">
                <span class="task">
                  <span class="desc">管理中心 </span>
                  <span class="percent">60%</span>
                </span>
                <span class="progress">
                  <div class="am-progress tpl-progress am-progress-striped">
                    <div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div>
                  </div>
                </span>
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
  <div class="am-box box">
    <div class="am-g">
      <div class="am-u-sm-10 am-u-sm-centered list-header">
        <div class="box-header">
          <a href="{{route('admin.list')}}">订单管理</a>
          <i class="am-icon-chevron-right"></i>
          <a href="#">订单详情</a>
        </div>
        <div class="list-user">
          <h2>买家信息</h2>
          <p>收货地址： 小小，12345678922， 河北省保定市华北电力大学989</p>
          <p>下单账号：11123546431353</p>
        </div>

        <div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
          <ul class="am-tabs-nav am-nav am-nav-tabs">
            <li class="am-active">
              <a href="javascript: void(0)">订单详情</a>
            </li>
            <li>
              <a href="javascript: void(0)">物流信息</a>
            </li>
          </ul>

          <div class="am-tabs-bd" style="padding-bottom: 25px;">
            <div class="am-tab-panel am-active">
              <div class="am-g tab-header">
                <div class="am-u-sm-5">
                  商品名称
                </div>
                <div class="am-u-sm-1">
                  类别
                </div>
                <div class="am-u-sm-2">发货状态</div>
                <div class="am-u-sm-2">退款状态</div>
                <div class="am-u-sm-2">单价/数量</div>
              </div>
              <div class="am-g tab-body">
                <div class="am-u-sm-5 list-name">
                  <div>
                    <img src="https://zos.alipayobjects.com/rmsportal/TekJlZRVCjLFexlOCuWn.png')}}" alt="" width="100%" height="110">
                  </div>
                  <div class="list-name-two">
                    <span>【夏威夷果】12号正式开始营业sdfasdsafdafsddsfgsf</span>

                  </div>
                </div>
                <div class="am-u-sm-1 list-lineheight">
                    狗饲料
                </div>
                <div class="am-u-sm-2 list-lineheight">
                    已发货
                </div>
                <div class="am-u-sm-2 list-lineheight">
                   无
                </div>
                <div class="am-u-sm-2 list-price">
                    <span>￥23.00</span>
                    <span>*1</span>
                </div>
              </div>

                <div class="am-u-sm-6 list-time">
                    <p>订单编号</p>
                    <p>下单时间：2018-05-12 21:17:20</p>
                    <p>付款时间：2018-05-12 21:17:50</p>
                </div>
                <div class="am-u-sm-6 list-time list-main-price">
                    <p>商品金额： ￥23.00</p>
                    <p>运费：0.00</p>
                </div>

            </div>
            <div class="am-tab-panel">
              <div class="am-g">
                  <div class="am-u-sm-4">
                      <h2>货运单号： 888846544645</h2>
                      <span>快递公司：申通</span>
                      <br />
                      <span>发货时间 2018-05-12 13:44:32</span>
                  </div>
                  <div class="am-u-sm-8">
                      <ul>
                          <li>2018-05-12 15:44:32 卖家已发货，包裹等待揽收</li>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
  <script src="{{asset('/js/admin/amazeui.min.js')}}"></script>
  <script src="{{asset('/js/admin/app.js')}}"></script>
  <script src="{{asset('/js/admin/list.js')}}"></script>
</body>

</html>
