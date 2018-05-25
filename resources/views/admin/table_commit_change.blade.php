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
            <a href="{{route('admin.index')}}" class="nav-link">
              <i class="am-icon-home"></i>
              <span>首页</span>
            </a>
          </li>

          <li class="tpl-left-nav-item">
            <!-- 打开状态 a 标签添加 active 即可   -->
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list active">
              <i class="am-icon-table"></i>
              <span>商品</span>
              <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu" style="display:block">
              <li>
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="{{route('admin.table_font_list')}}" class="active">
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
        Amaze UI 添加商品
      </div>
      <ol class="am-breadcrumb">
        <li>
          <a href="#" class="am-icon-home">首页</a>
        </li>
        <li>
          <a href="#">商品</a>
        </li>
        <li class="am-active">添加商品</li>
      </ol>
      <div class="tpl-portlet-components">
        <form class="am-form">
    <fieldset>
      <legend>表单标题</legend>

      <div class="am-form-group">
        <label>商品名称</label>
        <input type="text" id="goods_name" placeholder="请输入商品名称">
      </div>

    <div class="am-form-group am-form-file">
        <label>商品图片</label>
        <div class="am-form-group am-form-file">
            <button type="button" class="am-btn am-btn-default am-btn-sm">
            <i class="am-icon-cloud-upload"></i> 选择要上传的图片</button>
            <input type="file" id="goods_image" onchange="checkImg(this)" multiple>
        </div>
    </div>
      <div class="am-form-group">
        <label>商品价格</label>
        <input type="text" id="goods_price" placeholder="请填写商品价格">
      </div>
      <div class="am-form-group">
        <label>商品库存</label>
        <input type="text" id="goods_save" placeholder="请填写商品库存">
      </div>
      <div class="am-form-group">
              <label for="doc-select-1">选择商品分类</label>
              <select id="doc-select-1">
                <option value="option1"></option>
                @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
              </select>
            </div>
      <div style="display: none;"><input id="goodsShow" value=""/></div>
      <div class="am-form-group">
        <label for="doc-ta-1">请输入商品描述</label>
        <textarea rows="5" id="goods_des"></textarea>
      </div>
      <p><button onclick="postForm()" type="button" class="am-btn am-btn-default">提交</button></p>
    </fieldset>
</form>
 <div class="am-modal am-modal-alert" tabindex="11" id="my-alert">
      <div class="am-modal-dialog">
        <div class="am-modal-hd">提交失败</div>
        <div class="am-modal-bd" id="showMessage">
          表单内容不能为空
        </div>
        <div class="am-modal-footer">
          <span class="am-modal-btn">确定</span>
        </div>
      </div>
</div>
      </div>
    </div>

  </div>


  <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
  <script src="{{asset('/js/admin/amazeui.min.js')}}"></script>
  <script src="{{asset('/js/admin/app.js')}}"></script>
    <script src="{{asset('/js/admin/mycommit.js')}}"></script>

</body>

</html>
