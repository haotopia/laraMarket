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
  <link rel="stylesheet" href="{{asset('/css/admin/list.css')}}">
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
            <a href="{{route('admin.index')}}"  class="nav-link">
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
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list active">
              <i class="am-icon-wpforms"></i>
              <span>订单</span>
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu" style="display:block">
              <li>
                 <a href="{{route('admin.list')}}" class="active">
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
        Amaze UI 订单
      </div>
      <ol class="am-breadcrumb">
        <li>
          <a href="#" class="am-icon-home">首页</a>
        </li>
        <li>
          <a href="#">订单</a>
        </li>
        <li class="am-active">订单管理</li>
      </ol>
      <div class="tpl-portlet-components">
        <div class="portlet-title">
          <div class="caption font-green bold">
            <span class="am-icon-code"></span> 订单
          </div>
          <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
              <div class="input-icon right">
                <i class="am-icon-search"></i>
                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
            </div>
          </div>


        </div>
        <div class="tpl-block">
          <div class="am-g" style="margin: 16px 0;">
            <div class="am-u-sm-10">

              <div class="list-header" id="list-header">
                <a href="#" class="list-bottom">全部</a>
                <a href="#">代发货</a>
                <a href="#">待付款</a>
                <a href="#">已发货</a>
                <a href="#">退款</a>
                <a href="#">已完成</a>
                <a href="#">已关闭</a>
              </div>

            </div>
            <div class="am-u-sm-2">
                <button type="button" class="am-btn am-btn-default">批量发货</button>
            </div>
          </div>
          <div class="am-g">
            <div class="am-u-sm-12 am-u-md-3">
              <div class="am-form-group" style="padding-left: 2px;">
                <select data-am-selected="{btnSize: 'sm'}">
                  <option value="option1">所有类别</option>
                  <option value="option2">IT业界</option>
                  <option value="option3">数码产品</option>
                  <option value="option3">笔记本电脑</option>
                  <option value="option3">平板电脑</option>
                  <option value="option3">只能手机</option>
                  <option value="option3">超极本</option>
                </select>
              </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
              <div class="am-input-group am-input-group-sm">
                <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                </span>
              </div>
            </div>
          </div>
          <div class="am-g">
            <div class="am-u-sm-12">
              <form class="am-form">
                <!-- <table class="am-table am-table-striped am-table-hover table-main">
                  <thead>
                    <tr>
                      <th class="table-check">
                        <input type="checkbox" class="tpl-table-fz-check">
                      </th>
                      <th class="table-id">ID</th>
                      <th class="table-title">商品描述</th>
                      <th class="table-type">价格</th>
                      <th class="table-author am-hide-sm-only">销量</th>
                      <th>库存</th>
                      <th>分类</th>
                      <th class="table-date am-hide-sm-only">修改日期</th>
                      <th class="table-set">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>1</td>
                      <td>
                        <img src="{{asset('/img/logo.png')}}" alt="" width="50" height="50">
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td>52</td>
                      <td>猪饲料</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>2</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2018年5月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>3</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>4</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>5</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>6</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>7</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>8</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>9</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>10</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>11</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>12</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>13</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>14</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>15</td>
                      <td>
                        <a href="#">Business management</a>
                      </td>
                      <td>22.00</td>
                      <td class="am-hide-sm-only">1</td>
                      <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                      <td>
                        <div class="am-btn-toolbar">
                          <div class="am-btn-group am-btn-group-xs">
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                              <span class="am-icon-pencil-square-o"></span> 编辑</button>
                            <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only">
                              <span class="am-icon-copy"></span> 复制</button>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                              <span class="am-icon-trash-o"></span> 删除</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> -->
                <div class="am-cf table-header">
                    <div class="am-u-sm-6">

                        <label style="float: left;">
                            <input type="checkbox"> 全选
                        </label>

                        订单信息
                    </div>
                    <div class="am-u-sm-4">
                        收货信息
                    </div>
                    <div class="am-u-sm-2">
                        操作
                    </div>
                </div>
                 @foreach($re as $pa)
                <div class="am-cf table">

                    <div class="table-infromation">
                        <div class="am-u-sm-6 header-table">
                            <span>下单时间 {{$pa['created_at']}}</span>
                            <span>订单号：{{$pa['id']}}</span>
                        </div>
                        <div class="am-u-sm-6 header-table">
                            <span>共{{$pa['gcount']}}件商品 合计：￥：{{$pa['pcount']}}</span>
                        </div>
                        <div class="am-u-sm-6 body-table">
                            <div class="am-u-sm-1">
                                <label>
                                    <input type="checkbox"> 发货
                                </label>
                            </div>
                            <div class='am-u-sm-11'>
                             @foreach($pa['goods'] as $goods)
                             <div class='am-u-sm-13'>
                                <div class="am-u-sm-3">

                                    <!-- <img src="{{$goods['img']}}" alt="" height=""> -->
                                </div>
                                <div class="am-u-sm-6">
                                     {{$goods['title']}}
                                </div>
                                <div class="am-u-sm-2">
                                    <p>￥{{$goods['price']}}</p>
                                    <p>x{{$goods['num']}}</p>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="am-u-sm-4  body-table">
                            <p>{{$pa['name']}} {{$pa['phone']}}</p>
                            <p>{{$pa['address']}}</p>
                        </div>
                        <div class="am-u-sm-2 body-table">
                            <a href="#">完成</a>
                            <a href="{{route('admin.listdetail')}}/{{$pa['id']}}" target="_blank">订单详情</a>
                        </div>
                    </div>

                </div>
                @endforeach
                <div class="am-cf">

                  <div class="am-fr">
                    {{$payment->links()}}
                  </div>
                </div>
                <hr>

              </form>
            </div>

          </div>
        </div>
        <div class="tpl-alert"></div>

      </div>
    </div>

  </div>


  <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
  <script src="{{asset('/js/admin/amazeui.min.js')}}"></script>
  <script src="{{asset('/js/admin/app.js')}}"></script>
  <script src="{{asset('/js/admin/list.js')}}"></script>
</body>

</html>
