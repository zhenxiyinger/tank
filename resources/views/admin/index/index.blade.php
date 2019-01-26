<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>B-JUI 客户端框架</title>
    <meta name="Keywords" content="B-JUI,Bootstrap,DWZ,jquery,ui,前端,框架,开源,OSC,开源框架,knaan"/>
    <meta name="Description" content="B-JUI, Bootstrap for DWZ富客户端框架，基于DWZ富客户端框架修改。主要针对皮肤，编辑器，表单验证等方面进行了大量修改，引入了Bootstrap，Font Awesome，KindEditor，jquery.validationEngine，iCheck等众多开源项目。交流QQ群：232781006。"/>
    <!-- bootstrap - css -->
    <link href="{{ asset('BJUI/themes/css/bootstrap.css') }}" rel="stylesheet">
    <!-- core - css -->
    <link href="{{ asset('BJUI/themes/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('BJUI/themes/blue/core.css') }}" id="bjui-link-theme" rel="stylesheet">
    <!-- plug - css -->
    <link href="{{ asset('BJUI/plugins/kindeditor_4.1.10/themes/default/default.css') }}" rel="stylesheet">
    <link href="{{ asset('BJUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('BJUI/plugins/niceValidator/jquery.validator.css') }}" rel="stylesheet">
    <link href="{{ asset('BJUI/plugins/bootstrapSelect/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('BJUI/themes/css/FA/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--[if lte IE 7]>
    <link href="{{ asset('BJUI/themes/css/ie7.css') }}" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 9]>
    <script src="{{ asset('BJUI/other/html5shiv.min.js') }}"></script>
    <script src="{{ asset('BJUI/other/respond.min.js') }}"></script>
    <![endif]-->
    <!-- jquery -->
    <script src="{{ asset('BJUI/js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('BJUI/js/jquery.cookie.js') }}"></script>
    <!--[if lte IE 9]>
    <script src="{{ asset('BJUI/other/jquery.iframe-transport.js') }}"></script>
    <![endif]-->
    <!-- BJUI.all 分模块压缩版 -->
    <script src="{{ asset('BJUI/js/bjui-all.js') }}"></script>
    <!-- plugins -->
    <!-- swfupload for uploadify && kindeditor -->
    <script src="{{ asset('BJUI/plugins/swfupload/swfupload.js') }}"></script>
    <!-- kindeditor -->
    <script src="{{ asset('BJUI/plugins/kindeditor_4.1.10/kindeditor-all.min.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/kindeditor_4.1.10/lang/zh_CN.js') }}"></script>
    <!-- colorpicker -->
    <script src="{{ asset('BJUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- ztree -->
    <script src="{{ asset('BJUI/plugins/ztree/jquery.ztree.all-3.5.js') }}"></script>
    <!-- nice validate -->
    <script src="{{ asset('BJUI/plugins/niceValidator/jquery.validator.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/niceValidator/jquery.validator.themes.js') }}"></script>
    <!-- bootstrap plugins -->
    <script src="{{ asset('BJUI/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/bootstrapSelect/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/bootstrapSelect/defaults-zh_CN.min.js') }}"></script>
    <!-- icheck -->
    <script src="{{ asset('BJUI/plugins/icheck/icheck.min.js') }}"></script>
    <!-- dragsort -->
    <script src="{{ asset('BJUI/plugins/dragsort/jquery.dragsort-0.5.1.min.js') }}"></script>
    <!-- HighCharts -->
    <script src="{{ asset('BJUI/plugins/highcharts/highcharts.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/highcharts/highcharts-3d.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/highcharts/themes/gray.js') }}"></script>
    <!-- ECharts -->
    <script src="{{ asset('BJUI/plugins/echarts/echarts.js') }}"></script>
    <!-- other plugins -->
    <script src="{{ asset('BJUI/plugins/other/jquery.autosize.js') }}"></script>
    <link href="{{ asset('BJUI/plugins/uploadify/css/uploadify.css') }}" rel="stylesheet">
    <script src="{{ asset('BJUI/plugins/uploadify/scripts/jquery.uploadify.min.js') }}"></script>
    <script src="{{ asset('BJUI/plugins/download/jquery.fileDownload.js') }}"></script>
    <!-- init -->
    <script type="text/javascript">
      $(function() {
        BJUI.init({
          JSPATH       : "{{ asset('BJUI') }}",         //[可选]框架路径
          PLUGINPATH   : "{{ asset('BJUI/plugins') }}", //[可选]插件路径
          loginInfo    : {url:'login_timeout.html', title:'登录', width:400, height:200}, // 会话超时后弹出登录对话框
          statusCode   : {ok:200, error:300, timeout:301}, //[可选]
          ajaxTimeout  : 50000, //[可选]全局Ajax请求超时时间(毫秒)
          pageInfo     : {total:'total', pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
          alertMsg     : {displayPosition:'topcenter', displayMode:'slide', alertTimeout:3000}, //[可选]信息提示的显示位置，显隐方式，及[info/correct]方式时自动关闭延时(毫秒)
          keys         : {statusCode:'statusCode', message:'message'}, //[可选]
          ui           : {
            windowWidth      : 0, //框架显示宽度，0=100%宽，> 600为则居中显示
            showSlidebar     : true, //[可选]左侧导航栏锁定/隐藏
            clientPaging     : true, //[可选]是否在客户端响应分页及排序参数
            overwriteHomeTab : false //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
          },
          debug        : true,    // [可选]调试模式 [true|false，默认false]
          theme        : 'sky' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
        })

        // main - menu
        $('#bjui-accordionmenu')
          .collapse()
          .on('hidden.bs.collapse', function(e) {
            $(this).find('> .panel > .panel-heading').each(function() {
              var $heading = $(this), $a = $heading.find('> h4 > a')

              if ($a.hasClass('collapsed')) $heading.removeClass('active')
            })
          })
          .on('shown.bs.collapse', function (e) {
            $(this).find('> .panel > .panel-heading').each(function() {
              var $heading = $(this), $a = $heading.find('> h4 > a')

              if (!$a.hasClass('collapsed')) $heading.addClass('active')
            })
          })

        $(document).on('click', 'ul.menu-items li > a', function(e) {
          var $a = $(this), $li = $a.parent(), options = $a.data('options').toObj(), $children = $li.find('> .menu-items-children')
          var onClose = function() {
            $li.removeClass('active')
          }
          var onSwitch = function() {
            $('#bjui-accordionmenu').find('ul.menu-items li').removeClass('switch')
            $li.addClass('switch')
          }

          $li.addClass('active')
          if (options) {
            options.url      = $a.attr('href')
            options.onClose  = onClose
            options.onSwitch = onSwitch
            if (!options.title) options.title = $a.text()

            if (!options.target)
              $a.navtab(options)
            else
              $a.dialog(options)
          }
          if ($children.length) {
            $li.toggleClass('open')
          }

          e.preventDefault()
        })

        //时钟
        var today = new Date(), time = today.getTime()
        $('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
        setInterval(function() {
          today = new Date(today.setSeconds(today.getSeconds() + 1))
          $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
        }, 1000)
      })

      //菜单-事件
      function MainMenuClick(event, treeId, treeNode) {
        event.preventDefault()

        if (treeNode.isParent) {
          var zTree = $.fn.zTree.getZTreeObj(treeId)

          zTree.expandNode(treeNode, !treeNode.open, false, true, true)
          return
        }

        if (treeNode.target && treeNode.target == 'dialog')
          $(event.target).dialog({id:treeNode.tabid, url:treeNode.url, title:treeNode.name})
        else
          $(event.target).navtab({id:treeNode.tabid, url:treeNode.url, title:treeNode.name, fresh:treeNode.fresh, external:treeNode.external})
      }
    </script>
</head>
<body>
<!--[if lte IE 7]>
<div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
<![endif]-->
<div id="bjui-window">
    <header id="bjui-header">
        <div class="bjui-navbar-header">
            <button type="button" class="bjui-navbar-toggle btn-default" data-toggle="collapse" data-target="#bjui-navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="bjui-navbar-logo" href="#"><img src="{{ asset('images/logo.png') }}"></a>
        </div>
        <nav id="bjui-navbar-collapse">
            <ul class="bjui-navbar-right">
                <li class="datetime"><div><span id="bjui-date"></span> <span id="bjui-clock"></span></div></li>
                <li><a href="#">消息 <span class="badge">4</span></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="changepwd.html" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="400" data-height="260">&nbsp;<span class="glyphicon glyphicon-lock"></span> 修改密码&nbsp;</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span> 注销登陆</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle theme blue" data-toggle="dropdown" title="切换皮肤"><i class="fa fa-tree"></i></a>
                    <ul class="dropdown-menu" role="menu" id="bjui-themes">
                        <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                        <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i class="fa fa-tree"></i> 橘子红了</a></li>
                        <li><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i class="fa fa-tree"></i> 紫罗兰</a></li>
                        <li class="active"><a href="javascript:;" class="theme_blue" data-toggle="theme" data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 天空蓝</a></li>
                        <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i class="fa fa-tree"></i> 绿草如茵</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="bjui-hnav">
            <button type="button" class="btn-default bjui-hnav-more-left" title="导航菜单左移"><i class="fa fa-angle-double-left"></i></button>
            <div id="bjui-hnav-navbar-box">
                <ul id="bjui-hnav-navbar">
                    <li class="active"><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-check-square-o"></i> 系统管理</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="hand-o-up">
                                <li><a href="{{ route('admin_sys_users_index') }}" data-options="{id:'form-input', faicon:'terminal'}">用户管理</a></li>
                                <li><a href="{{ route('admin_sys_roles_index') }}" data-options="{id:'form-select', faicon:'caret-square-o-down'}">角色管理</a></li>
                                <li><a href="form-checkbox.html" data-options="{id:'form-checkbox', faicon:'check-square-o'}">权限管理</a></li>
                            </ul>
                            <ul class="menu-items" data-tit="数据管理" data-faicon="list">
                                <li><a href="form.html" data-options="{id:'form-demo', faicon:'th-large'}">数据备份</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> 表格</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="table">
                                <li><a href="table.html" data-options="{id:'table', faicon:'table'}">普通表格</a></li>
                                <li><a href="table-fixed.html" data-options="{id:'table-fixed', faicon:'list-alt'}">固定表头表格</a></li>
                                <li><a href="table-edit.html" data-options="{id:'table-edit', faicon:'indent'}">可编辑表格</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> Datagrid(beta)</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="table">
                                <li><a href="datagrid-convertable.html" data-options="{id:'datagrid-convertable', faicon:'table'}">转换普通表格</a></li>
                                <li><a href="datagrid-demo.html" data-options="{id:'datagrid-demo', faicon:'table'}">完整示例</a></li>
                                <li><a href="datagrid-datatype.html" data-options="{id:'datagrid-datatype', faicon:'table'}">三种数据类型</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-plane"></i> 弹出窗口</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="plane">
                                <li><a href="dialog.html" data-options="{id:'dialog', faicon:'plane'}">弹出窗口</a></li>
                                <li><a href="alert.html" data-options="{id:'alert', faicon:'info-circle'}">信息提示</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-image"></i> 图形报表</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="image">
                                <li><a href="highcharts.html" data-options="{id:'chart', faicon:'image'}">Highcharts图表</a></li>
                                <li><a href="echarts.html" data-options="{id:'echarts', faicon:'image'}">ECharts图表</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-coffee"></i> 框架组件</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="coffee">
                                <li><a href="tabs.html" data-options="{id:'tabs', faicon:'columns'}">选项卡</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-bug"></i> 其他插件</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="bug">
                                <li><a href="ztree.html" data-options="{id:'ztree', faicon:'tree'}">zTree</a></li>
                                <li><a href="ztree-select.html" data-options="{id:'ztree-select', faicon:'caret-square-o-down'}">zTree下拉选择</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-database"></i> 综合应用</a>
                        <div class="items hide" data-noinit="true">
                            <ul class="menu-items" data-faicon="database">
                                <li><a href="table-layout.html" data-options="{id:'table-layout', faicon:'refresh'}">局部刷新1</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">角色权限</a></li>
                            <li><a href="#">用户列表</a></li>
                            <li class="divider"></li>
                            <li><a href="#">关于我们</a></li>
                            <li class="divider"></li>
                            <li><a href="#">友情链接</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn-default bjui-hnav-more-right" title="导航菜单右移"><i class="fa fa-angle-double-right"></i></button>
        </div>
    </header>
    <div id="bjui-container" class="clearfix">
        <div id="bjui-leftside">
            <div id="bjui-sidebar-s">
                <div class="collapse"></div>
            </div>
            <div id="bjui-sidebar">
                <div class="toggleCollapse"><h2><i class="fa fa-bars"></i> 导航栏 <i class="fa fa-bars"></i></h2><a href="javascript:;" class="lock"><i class="fa fa-lock"></i></a></div>
                <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu">
                </div>
            </div>
        </div>
        <div id="bjui-navtab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent">
                    <ul class="navtab-tab nav nav-tabs">
                        <li data-url="{{ route('admin_main') }}" data-faicon="home"><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
                <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
                <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">#maintab#</a></li>
            </ul>
            <div class="navtab-panel tabsPageContent">
                <div class="navtabPage unitBox">
                    <div class="bjui-pageContent" style="background:#FFF;">
                        Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="bjui-footer">Copyright &copy; 2018 - 2020　
        <a href="http://zhenxiyinger.gnway.cc:5000" target="_blank">zxye</a>　
    </footer>
</div>
</body>
</html>
