
<!DOCTYPE HTML>
<!--suppress ALL -->
<html class="no-js bg" lang="zh-cmn-Hans">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="UTF-8">
    <!--IE 8浏览器的页面渲染方式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <!--默认使用极速内核：针对国内浏览器产商-->
    <meta name="renderer" content="webkit">
    <!--chrome Android 地址栏颜色-->
    <meta name="theme-color" content="#1199c4" />

    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="//www.imga.cc" />

    <title>来自bestcyt的测试博客</title>
    <link rel="icon" type="image/ico" href="/favicon.ico">
    <meta name="description" content="我只是一个好人" />
    <meta name="keywords" content="好人卡,一个好人,福利资源" />
    <meta name="generator" content="Typecho 1.1/17.10.30" />
    <meta name="template" content="handsome" />
    <link rel="alternate" type="application/rss+xml" title="好人卡 &raquo; RSS 2.0" href="https://www.haorenka.cc/feed/" />
    <link rel="alternate" type="application/rdf+xml" title="好人卡 &raquo; RSS 1.0" href="https://www.haorenka.cc/feed/rss/" />
    <link rel="alternate" type="application/atom+xml" title="好人卡 &raquo; ATOM 1.0" href="https://www.haorenka.cc/feed/atom/" />

    <!-- 第三方CDN加载CSS -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <!-- 本地css静态资源 -->
    <link rel="stylesheet" href="{{ asset('haorenka/css/function.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('haorenka/css/handsome.min.css') }}" type="text/css" />



    <!--主题组件css文件加载-->
    <link rel="stylesheet" href="{{ asset('haorenka/css/fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('haorenka/css/vs.min.css') }}" type="text/css" />

    <!--引入英文字体文件-->

    <style type="text/css">

        html.bg {
            background-image: linear-gradient(-20deg, #d0b782 20%, #a0cecf 80%);
        }
        .cool-transparent .off-screen+* .app-content-body {
            background-image: linear-gradient(-20deg, #d0b782 20%, #a0cecf 80%);
        }#post-content img {
             padding: 2px;
             cursor: pointer;
             margin: 10px auto;
             display: block;
             margin-left: auto;
             margin-right: auto;
         }
        iframe{
            max-width: 100%;
        }    </style>

    <!--全站jquery-->
    <script src="https://cdn.staticfile.org/jquery/2.2.4/jquery.min.js"></script>

    <!--网站统计代码-->
    <script type="text/javascript" src="//js.users.51.la/19844429.js"></script>
</head>

<body id="body">


<!-- aside -->

<div id="alllayout" class="app app-aside-fixed container app-header-fixed ">  <!-- headnav -->
    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header（交集处） -->
        <div class="navbar-header bg-info dker">
            <button class="pull-right visible-xs dk" ui-toggle-class="show animated animated-lento fadeIn" target=".navbar-collapse">
                <i class="fontello fontello-gear text-lg"></i>
            </button>
            <button class="pull-left visible-xs" ui-toggle-class="off-screen animated" target=".app-aside" ui-scroll="app">
                <i class="fontello fontello-menu text-lg"></i>
            </button>
            <!-- brand -->
            <a href="https://www.haorenka.cc/" class="navbar-brand text-lt">
                <i class="fontello fontello-home"></i>
                <span class="hidden-folded m-l-xs">bestcyt</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse（顶部导航栏） -->
        <div class="collapse pos-rlt navbar-collapse box-shadow bg-info dker">        <!-- buttons -->
            <div class="nav navbar-nav hidden-xs">
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
                    <i class="fontello fontello-dedent text icon-fw"></i>
                    <i class="fontello fontello-indent icon-fw text-active"></i>
                </a>

            </div>
            <!-- / buttons -->


            <!-- search form -->
            <form id="searchform1" class="searchform navbar-form navbar-form-sm navbar-left shift" method="post"
                  role="search">
                <div class="form-group">
                    <div class="input-group rounded bg-light">
                        <input autocomplete="off" id="search_input" type="search" name="s" class="transparent rounded form-control input-sm no-border padder" required placeholder="输入关键词搜索…">
                        <!--搜索提示-->
                        <ul id="search_tips_drop" class="dropdown-menu hide" style="display: block;top: 30px; left: 0px;">
                        </ul>
                        <span id="search_submit" class="transparent input-group-btn">
                  <button  type="submit" class="transparent btn btn-sm"><i class="fontello fontello-search"></i></button>
              </span>
                    </div>
                </div>
            </form>
            <a href="" style="display: none" id="searchUrl"></a>
            <!-- / search form -->
            <ul class="nav navbar-nav navbar-right">
                <!--闲言碎语-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fontello fontello-bell icon-fw"></i>
                        <span class="visible-xs-inline">
              闲言碎语              </span>
                        <span class="badge badge-sm up bg-danger pull-right-xs"></span>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu w-xl animated fadeInUp">
                        <div class="panel bg-white">
                            <div class="panel-heading b-light bg-light">
                                <strong>
                                    闲言碎语                  </strong>
                            </div>
                            <div class="list-group" id="smallRecording">
                            </div>
                        </div>
                    </div>
                </li>
                <!--/闲言碎语-->
            </ul>
        </div>
        <!-- / navbar collapse -->
    </header>
    <!-- / headnav -->

    <!--选择侧边栏的颜色-->
    <aside id="aside" class="app-aside hidden-xs bg-light dker b-r">  <!--<aside>-->
        <div class="aside-wrap" layout="column">
            <div class="navi-wrap scroll-y" flex>
                <!-- user -->
                <div class="clearfix hidden-xs text-center hide  show" id="aside-user">
                    <div class="dropdown wrapper">
                        <div ui-nav>
                            <a href="https://www.haorenka.cc">
                            <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="https://ws3.sinaimg.cn/large/005BYqpggy1fwcj45kgxij305k05kgms.jpg" class="img-full">
                </span>
                            </a>
                        </div>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">一个好人</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">江湖险恶，我从不轻易留下自己的姓名。</span>
                </span>
                        </a>
                        <!-- dropdown -->
                        <ul class="dropdown-menu animated fadeInRight w hidden-folded no-padder">
                            <li class="wrapper b-b m-b-sm bg-info m-n">
                                <span class="arrow top hidden-folded arrow-info"></span>
                                <div>
                                    <p>晚上好，注意早点休息</p>
                                </div>
                                <div class="progress progress-xs m-b-none dker">
                                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="时间已经度过87.50%" style="width: 87.50%"></div>
                                </div>
                            </li>
                        </ul>
                        <!-- / dropdown -->
                    </div>
                    <div class="line dk hidden-folded"></div>
                </div>
                <!-- / user -->

                <!-- nav -->
                <nav ui-nav class="navi clearfix">
                    <ul class="nav">
                        <!--index-->
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>导航</span>
                        </li>
                        <!--主页-->
                        <li>
                            <a href="https://www.haorenka.cc/" class="auto">
                                <i class="iconfont icon-zhuye icon text-md"></i>
                                <span>首页</span>
                            </a>
                        </li>
                        <!-- /主页 -->
                        <li> <a target="_blank" href="/jieya.html" class ="auto"><i class="fontello fontello-unlock-alt icon text-md"></i><span>解压密码</span></a></li><li> <a target="_blank" href="/tougaoshenqing.html" class ="auto"><i class="fontello fontello-pencil icon text-md"></i><span>投稿</span></a></li>                              <li class="line dk"></li>
                        <!--Components-->
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>组成</span>
                        </li>
                        <!--分类category-->
                        <li>
                            <a class="auto">
                  <span class="pull-right text-muted">
                    <i class="fontello icon-fw fontello-angle-right text"></i>
                    <i class="fontello icon-fw fontello-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-th"></i>
                                <span>分类</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a>
                                        <span>分类</span>
                                    </a>
                                </li>
                                <!--循环输出分类-->
                                <li><a href="https://www.haorenka.cc/laosiji/"><b class="badge pull-right">57</b><span>老司机</span></a></li><li><a href="https://www.haorenka.cc/youxi/"><b class="badge pull-right">5</b><span>游戏鸡</span></a></li><li><a href="https://www.haorenka.cc/liqi/"><b class="badge pull-right">38</b><span>神兵利器</span></a></li><li><a href="https://www.haorenka.cc/kan/"><b class="badge pull-right">9</b><span>值得看</span></a></li><li><a href="https://www.haorenka.cc/xiaojiejie/"><b class="badge pull-right">53</b><span>小姐姐</span></a></li><li><a href="https://www.haorenka.cc/mai/"><b class="badge pull-right">4</b><span>值得买</span></a></li><li><a href="https://www.haorenka.cc/gifchuchu/"><b class="badge pull-right">5</b><span>GIF出处</span></a></li>                </ul>
                        </li>
                        <!--独立页面pages-->
                        <li>
                            <a class="auto">
                  <span class="pull-right text-muted">
                    <i class="fontello icon-fw fontello-angle-right text"></i>
                    <i class="fontello icon-fw fontello-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-file"></i>
                                <span>页面</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a data-no-instant>
                                        <span>页面</span>
                                    </a>
                                </li><!--这个字段不会被显示出来-->
                                <!--循环输出独立页面-->
                                <li><a href="https://www.haorenka.cc/archive.html"><span>文章归档</span></a></li>
                                <li><a href="https://www.haorenka.cc/guestbook.html"><span>雁过留痕</span></a></li>
                                <li><a href="https://www.haorenka.cc/cross.html"><span>时光</span></a></li>
                            </ul>
                        </li>
                        <!--发布页-->
                        <li>
                            <a class="auto">
                  <span class="pull-right text-muted">
                    <i class="fontello icon-fw fontello-angle-right text"></i>
                    <i class="fontello icon-fw fontello-angle-down text-active"></i>
                  </span>
                                <i class="iconfont icon-links"></i>
                                <span>发布页</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a data-no-instant>
                                        <span>发布页</span>
                                    </a>
                                </li>
                                <li><a target="blank" href="https://www.hrka.cc">网址发布页</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- nav -->
            </div>
            <!--end of .navi-wrap-->
            <!--left_footer-->
            <div id="left_footer" class="footer wrapper-xs text-center nav-xs lt">

                <div class="col-xs-6 footer-stats">
                    <a target="_blank" class="tinav" href="https://www.haorenka.cc/feed/" title="" data-toggle="tooltip" data-placement="top" data-original-title="文章RSS地址">
                        <span class="block"><i class="fontello fontello-rss"></i></span>
                        <small class="text-muted">文章</small>
                    </a>
                </div>
                <div class="col-xs-6 footer-stats">
                    <a target="_blank" href="https://www.haorenka.cc/feed/comments/" title="" data-toggle="tooltip" data-placement="top" data-original-title="评论RSS地址">
                        <span class="block"><i class="fontello fontello-rss-square"></i></span>
                        <small class="text-muted">评论</small>
                    </a>
                </div>
            </div>

        </div><!--.aside-wrap-->
    </aside>

    <!-- content -->
    <div id="content" class="app-content">
        <!--loading animate-->
        <div id="loading" class="butterbar active hide">
            <span class="bar"></span>
        </div>  <!-- / aside -->

        <!-- <div id="content" class="app-content"> -->
        <a class="off-screen-toggle hide"></a>
        <main class="app-content-body ">
            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <div class="col center-part">
                    <!--公告位置-->
                    <div class="alert alert-warning alert-block" style="
              margin-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="alert">×</button><p><i class="fontello fontello-volume-up" aria-hidden="true"></i>&nbsp;
                            资源是有时效性，希望理解。</p>
                    </div>
                    <!--/公告位置-->
                    <header class="bg-light lter b-b wrapper-md">
                        <h1 class="m-n font-thin h3 text-black l-h">陈一锑</h1>
                        <small class="text-muted letterspacing indexWords">迷失的人迷失了，相逢的人会再相逢</small>
                    </header>

                    <div class="wrapper-md" id="post-panel">
                        <!--首页输出文章-->
                        <div class="blog-post">
                            <div class="panel-small">
                                <div class="index-post-img-small post-feature index-img-small">
                                    <a href="#">
                                        <div class="item-thumb-small lazy" data-original="https://www.baidu.com/img/bd_logo1.png?where=super"
                                                {{--style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=)"--}}
                                        ></div>
                                    </a>
                                </div>
                                <div class="post-meta wrapper-lg">
                                    <h2 class="m-t-none index-post-title"><a href="#">測試文章</a></h2>
                                    <p class="summary l-h-2x text-muted">測試文章...</p><div class="line line-lg b-b b-light"></div>
                                    <div class="text-muted post-item-foot-icon">
                                        <i class="fontello fontello-user text-muted"></i><span class="m-r-sm">&nbsp;<a href="https://www.haorenka.cc/author/1/">一个好人&nbsp;</a></span>

                                        <i class="fontello fontello-clock-o text-muted"></i><span class="m-r-sm">&nbsp;2018 年 11 月 07 日</span><a href="https://www.haorenka.cc/juheapp.html#comments" class="m-l-sm post-item-comment"><i class="iconfont icon-comments-o text-muted"></i>&nbsp;8 条评论</a></div><!--text-muted-->
                                </div><!--post-meta wrapper-lg-->
                            </div><!--panel/panel-small-->

                            {{--文章單個可以拿來循環--}}
                            {{--<div class="panel-small">--}}
                            {{--<div class="index-post-img-small post-feature index-img-small">--}}
                            {{--<a href="https://www.haorenka.cc/proxyee-down.html">--}}
                            {{--<div class="item-thumb-small lazy" data-original="https://ws1.sinaimg.cn/large/007oPOSbly1fwv8u66crvj31hc0q141o.jpg" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=)"></div>--}}
                            {{--</a>--}}
                            {{--</div><div class="post-meta wrapper-lg">--}}
                            {{--<h2 class="m-t-none index-post-title"><a href="https://www.haorenka.cc/proxyee-down.html">又一个百度网盘下载神器Proxyee-down 3.32</a></h2><p class="summary l-h-2x text-muted">2018-11-13 更新百度云扩展升级至0.34，修复了下载失败的问题。目前百度彻底限制了不登录账号下载的接口，现在一定要登录账号下载了，请知悉！如果升...</p><div class="line line-lg b-b b-light"></div>--}}
                            {{--<div class="text-muted post-item-foot-icon">--}}
                            {{--<i class="fontello fontello-user text-muted"></i><span class="m-r-sm">&nbsp;<a href="https://www.haorenka.cc/author/1/">一个好人&nbsp;</a></span>--}}

                            {{--<i class="fontello fontello-clock-o text-muted"></i><span class="m-r-sm">&nbsp;2018 年 11 月 03 日</span><a href="https://www.haorenka.cc/proxyee-down.html#comments" class="m-l-sm post-item-comment"><i class="iconfont icon-comments-o text-muted"></i>&nbsp;19 条评论</a></div><!--text-muted-->--}}
                            {{--</div><!--post-meta wrapper-lg-->--}}
                            {{--</div><!--panel/panel-small-->--}}

                        </div>          <!--分页首页按钮-->
                        <nav class="text-center m-t-lg m-b-lg" role="navigation">
                            <ol class="page-navigator">
                                <li class="prev"><a href="https://www.haorenka.cc/page/3/">
                                        <i class="fontello fontello-chevron-left"></i></a>
                                </li>
                                <li><a href="https://www.haorenka.cc/page/1/">1</a></li>
                                <li><a href="https://www.haorenka.cc/page/2/">2</a></li>
                                <li><a href="https://www.haorenka.cc/page/3/">3</a></li>
                                <li class="current"><a href="https://www.haorenka.cc/page/4/">4</a></li>
                                <li><a href="https://www.haorenka.cc/page/5/">5</a></li>
                                <li><a href="https://www.haorenka.cc/page/6/">6</a></li>
                                <li><a href="https://www.haorenka.cc/page/7/">7</a></li>
                                <li><span>...</span></li>
                                <li><a href="https://www.haorenka.cc/page/17/">17</a></li>
                                <li class="next"><a href="https://www.haorenka.cc/page/5/"><i class="fontello fontello-chevron-right"></i></a>
                                </li>
                            </ol>
                        </nav>
                        <style>
                            .page-navigator>li>a, .page-navigator>li>span{
                                line-height: 1.42857143;
                                padding: 6px 12px;
                            }
                        </style>
                    </div>
                </div>
                <!--首页右侧栏-->
                <aside class="asideBar col w-md bg-white-only b-l bg-auto no-border-xs" role="complementary">
                    <div id="sidebar">
                        <section id="tabs-4" class="widget widget_tabs clear">
                            <div class="nav-tabs-alt no-js-hide">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active" role="presentation"> <a href="#widget-tabs-4-hots" role="tab" aria-controls="widget-tabs-4-hots" aria-expanded="true" data-toggle="tab"> <i class="glyphicon glyphicon-fire text-md text-muted wrapper-sm" aria-hidden="true"></i> <span class="sr-only">热门文章</span> </a></li>
                                    <li role="presentation"> <a href="#widget-tabs-4-comments" role="tab" aria-controls="widget-tabs-4-comments" aria-expanded="false" data-toggle="tab"> <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm" aria-hidden="true"></i> <span class="sr-only">最新评论</span> </a></li>
                                    <li role="presentation"> <a href="#widget-tabs-4-random" role="tab" aria-controls="widget-tabs-4-random" aria-expanded="false" data-toggle="tab"> <i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm" aria-hidden="true"></i> <span class="sr-only">随机文章</span> </a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <!--热门文章-->
                                <div id="widget-tabs-4-hots" class="tab-pane  fade in wrapper-md active" role="tabpanel">
                                    <h3 class="widget-title m-t-none text-md">热门文章</h3>
                                    <ul class="list-group no-bg no-borders pull-in m-b-none">
                                        <li class="list-group-item">
                                            <a href="https://www.haorenka.cc/gif-5.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/gif-5.html" title="好人卡 精选GIF出处 第5期"> 好人卡 精选GIF出处 第5期 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">42717</span>
                    </span>
                                                </small></div></li>
                                    </ul>
                                </div>
                                <!--最新评论-->
                                <div id="widget-tabs-4-comments" class="tab-pane fade wrapper-md no-js-show" role="tabpanel">
                                    <h3 class="widget-title m-t-none text-md">最新评论</h3>
                                    <ul class="list-group no-borders pull-in auto m-b-none no-bg">
                                        <li class="list-group-item">

                                            <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6540" class="pull-left thumb-sm avatar m-r">
                                            </a>
                                            <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6540" class="text-muted">
                                                <!--<i class="iconfont icon-comments-o text-muted pull-right m-t-sm text-sm" title="" aria-hidden="true" data-toggle="tooltip" data-placement="auto left"></i>
                                                <span class="sr-only"></span>-->
                                            </a>
                                            <div class="clear">
                                                <div class="text-ellipsis">
                                                    <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6540" title="losttime"> losttime </a>
                                                </div>
                                                <small class="text-muted">
                      <span>
                          OωO 不要被表象迷惑啦，后缀直接改成rar，就可以解压咯                      </span>
                                                </small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--随机文章-->
                                <div id="widget-tabs-4-random" class="tab-pane fade wrapper-md no-js-show" role="tabpanel">
                                    <h3 class="widget-title m-t-none text-md">随机文章</h3>
                                    <ul class="list-group no-bg no-borders pull-in">
                                        <li class="list-group-item">
                                            <a href="https://www.haorenka.cc/20181111.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/20181111.html" title="双11必备神器：红包、领券、比价、历史价格查询"> 双11必备神器：红包、领券、比价、历史价格查询 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">8635</span>
                    </span>
                                                </small></div></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <!--博客信息-->
                        <section id="categories-2" class="widget widget_categories wrapper-md clear">
                            <h3 class="widget-title m-t-none text-md">博客信息</h3>
                            <ul class="list-group">
                                <li class="list-group-item"> <i class="glyphicon glyphicon-file text-muted"></i> <span class="badge
           pull-right">171</span>文章数目</li>
                                <li class="list-group-item"> <i class="glyphicon glyphicon-comment text-muted"></i> <span class="badge
           pull-right">3308</span>评论数目</li>
                                <li class="list-group-item"> <i class="glyphicon glyphicon-equalizer text-muted"></i> <span class="badge
           pull-right">1年123天</span>运行天数</li>
                                <li class="list-group-item"> <i class="glyphicon glyphicon-refresh text-muted"></i> <span class="badge
           pull-right">3 天前</span>最后更新</li>
                            </ul>
                        </section>
                        <!--在文章页面输出目录，在其他页面输出标签云-->
                        <section id="tag_cloud-2" class="widget widget_tag_cloud wrapper-md clear">
                            <h3 class="widget-title m-t-none text-md">标签云</h3>
                            <div class="tags l-h-2x">
                                <a href="https://www.haorenka.cc/tag/%E7%99%BE%E5%BA%A6%E7%BD%91%E7%9B%98/" class="label bg-info" title="该标签下有 24 篇文章" data-toggle="tooltip">百度网盘</a>
                                <a href="https://www.haorenka.cc/tag/PR%E7%A4%BE/" class="label bg-info" title="该标签下有 9 篇文章" data-toggle="tooltip">PR社</a>
                                <a href="https://www.haorenka.cc/tag/%E5%90%88%E9%9B%86/" class="label bg-info" title="该标签下有 7 篇文章" data-toggle="tooltip">合集</a>
                                <a href="https://www.haorenka.cc/tag/%E7%95%AA%E5%8F%B7/" class="label bg-info" title="该标签下有 6 篇文章" data-toggle="tooltip">番号</a>
                                <a href="https://www.haorenka.cc/tag/%E8%BF%85%E9%9B%B7/" class="label bg-info" title="该标签下有 4 篇文章" data-toggle="tooltip">迅雷</a>
                                <a href="https://www.haorenka.cc/tag/%E6%B1%89%E5%8C%96/" class="label bg-info" title="该标签下有 4 篇文章" data-toggle="tooltip">汉化</a>
                                <a href="https://www.haorenka.cc/tag/%E7%A0%B4%E8%A7%A3/" class="label bg-info" title="该标签下有 4 篇文章" data-toggle="tooltip">破解</a>
                                <a href="https://www.haorenka.cc/tag/%E9%9F%A9%E5%9B%BD%E6%BC%AB%E7%94%BB/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">韩国漫画</a>
                                <a href="https://www.haorenka.cc/tag/asmr/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">asmr</a>
                                <a href="https://www.haorenka.cc/tag/%E5%A4%8F%E7%BE%8E%E9%85%B1/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">夏美酱</a>
                                <a href="https://www.haorenka.cc/tag/VIP/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">VIP</a>
                                <a href="https://www.haorenka.cc/tag/%E5%A6%B9%E5%AD%90%E5%9B%BE/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">妹子图</a>
                                <a href="https://www.haorenka.cc/tag/%E6%B7%98%E5%AE%9D/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">淘宝</a>
                                <a href="https://www.haorenka.cc/tag/tumblr/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">tumblr</a>
                                <a href="https://www.haorenka.cc/tag/%E5%A5%97%E5%9B%BE/" class="label bg-info" title="该标签下有 3 篇文章" data-toggle="tooltip">套图</a>
                                <a href="https://www.haorenka.cc/tag/%E5%AE%89%E5%8D%93/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">安卓</a>
                                <a href="https://www.haorenka.cc/tag/%E7%A0%B4%E8%A7%A3%E7%89%88/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">破解版</a>
                                <a href="https://www.haorenka.cc/tag/%E4%B8%AD%E6%96%87/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">中文</a>
                                <a href="https://www.haorenka.cc/tag/%E5%86%99%E7%9C%9F/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">写真</a>
                                <a href="https://www.haorenka.cc/tag/nsfw/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">nsfw</a>
                                <a href="https://www.haorenka.cc/tag/%E7%A6%8F%E5%88%A9/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">福利</a>
                                <a href="https://www.haorenka.cc/tag/%E7%A5%9E%E5%99%A8/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">神器</a>
                                <a href="https://www.haorenka.cc/tag/%E4%B8%AD%E6%96%87%E5%AD%97%E5%B9%95/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">中文字幕</a>
                                <a href="https://www.haorenka.cc/tag/AV/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">AV</a>
                                <a href="https://www.haorenka.cc/tag/%E6%B1%A4%E4%B8%8D%E7%83%AD/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">汤不热</a>
                                <a href="https://www.haorenka.cc/tag/%E7%A7%80%E4%BA%BA%E7%BD%91/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">秀人网</a>
                                <a href="https://www.haorenka.cc/tag/%E8%90%9D%E8%8E%89/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">萝莉</a>
                                <a href="https://www.haorenka.cc/tag/Google/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">Google</a>
                                <a href="https://www.haorenka.cc/tag/%E5%BE%AE%E5%8D%9A/" class="label bg-info" title="该标签下有 2 篇文章" data-toggle="tooltip">微博</a>
                                <a href="https://www.haorenka.cc/tag/%E5%BA%A6%E7%9B%98%E4%B8%8B%E8%BD%BD%E5%99%A8/" class="label bg-info" title="该标签下有 1 篇文章" data-toggle="tooltip">度盘下载器</a>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </main>
        <!-- footer -->
    </div>

    {{--footer--}}
    <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
      <span class="pull-right hidden-xs">
            <a target="blank" href="https://www.haorenka.cc/sitemap.xml">网站地图</a>
      </span>
            &copy;&nbsp;2019 Copyright&nbsp;由 <a href="https://www.haorenka.cc/go/bandwagonhost/" target="_blank">搬瓦工</a> | <a target="blank" href="http://www.typecho.org">Typecho</a>  强力驱动    </div>
        <!--可以去除主题版权信息，最好保留版权信息或者添加主题信息到友链，谢谢你的理解-->
        {{--<script type="text/template" id="tmpl-customizer">--}}
        {{--<div class="settings panel panel-default setting_body_panel" aria-hidden="true">--}}
        {{--<button class="btn btn-default no-shadow pos-abt" data-toggle="tooltip" data-placement="left" data-original-title="设置" data-toggle-class=".settings=active, .settings-icon=animate-spin">--}}
        {{--<i class="fontello fontello-gear settings-icon"></i>--}}
        {{--</button>--}}
        {{--<div class="panel-heading">--}}
        {{--<button class="pull-right btn btn-xs btn-rounded btn-danger" name="reset" data-toggle="tooltip" data-placement="top" data-original-title="恢复默认值" >重置</button>--}}
        {{--设置		</div>--}}
        {{--<div class="setting_body">--}}
        {{--<div class="panel-body">--}}
        {{--<# for ( var keys = _.keys( data.sections.settings ), i = 0, name; keys.length > i; ++i ) { #>--}}
        {{--<div<# if ( i !== ( keys.length - 1 ) ) print( ' class="m-b-sm"' ); #>>--}}
        {{--<label class="i-switch bg-info pull-right">--}}
        {{--<input type="checkbox" name="{{ keys[i] }}" value="1"<# if ( data.defaults[keys[i]] ) print( ' checked="checked"' ); #> />--}}
        {{--<i></i>--}}
        {{--</label>--}}
        {{--{{ data.sections.settings[keys[i]] }}--}}
        {{--</div>--}}
        {{--<# } #>--}}
        {{--</div>--}}
        {{--<div class="wrapper b-t b-light bg-light lter r-b">--}}
        {{--<div class="row row-sm">--}}
        {{--<div class="col-xs-6">--}}
        {{--<#--}}
        {{--_.each( data.sections.colors, function( color, i ) {--}}
        {{--var newColumnBefore = ( i % 7 ) === 6;--}}
        {{--#>--}}
        {{--<label class="i-checks block<# if ( !newColumnBefore ) print( ' m-b-sm' ); #>">--}}
        {{--<input type="radio" name="color" value="{{ i }}"<# if ( data.defaults['color'] === i ) print( ' checked="checked"' ); #> />--}}
        {{--<span class="block bg-light clearfix pos-rlt">--}}
        {{--<span class="active pos-abt w-full h-full bg-black-opacity text-center">--}}
        {{--<i class="fontello fontello-check text-md text-white m-t-xs"></i>--}}
        {{--</span>--}}
        {{--<b class="{{ color.navbarHeader }} header"></b>--}}
        {{--<b class="{{ color.navbarCollapse }} header"></b>--}}
        {{--<b class="{{ color.aside.replace( ' b-r', '' ) }}"></b>--}}
        {{--</span>--}}
        {{--</label>--}}
        {{--<#--}}
        {{--if ( newColumnBefore && ( i + 1 ) < data.sections.colors.length )--}}
        {{--print( '</div><div class="col-xs-6">' );--}}
        {{--} );--}}
        {{--#>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</script>--}}

        <div class="topButton panel panel-default">
            <button id="goToTop" class="btn btn-default no-shadow pos-abt hide">
                <i class="fontello fontello-chevron-circle-up" aria-hidden="true"></i>
            </button>
        </div>
    </footer>
</div><!--end of .app app-header-fixed-->

{{--<link rel="stylesheet" type="text/css" href="https://www.haorenka.cc/usr/plugins/Like/css/style.css" />--}}
<link rel="stylesheet" type="text/css" href="{{ asset('haorenka/css/style.css') }}" />
<!--定义全局变量-->
<script type="text/javascript">
    window['LocalConst'] = {
        COMMENT_NAME_INFO: '必须填写昵称或姓名',
        COMMENT_EMAIL_INFO: '必须填写电子邮箱地址',
        COMMENT_EMAIL_LEGAL_INFO: '邮箱地址不合法',
        COMMENT_CONTENT_INFO: '必须填写评论内容',
        COMMENT_SUBMIT_ERROR: '提交失败，请重试！',
        COMMENT_CONTENT_LEGAL_INFO: '提交失败,您的输入内容不符合规则！',

        LOGIN_USERNAME_INFO: '必须填写用户名',
        LOGIN_PASSWORD_INFO: '请填写密码',
        LOGIN_SUBMIT_ERROR: '登录失败，请重新登录',
        LOGIN_SUBMIT_INFO: '用户名或者密码错误，请重试',
        LOGIN_SUBMIT_SUCCESS: '登录成功',
        CLICK_TO_REFRESH: '点击以刷新页面',
        LOGOUT_SUCCESS_REFRESH: '退出成功，正在刷新当前页面',

        LOGOUT_ERROR: '退出失败，请重试',
        LOGOUT_SUCCESS: '退出成功',

        SUBMIT_PASSWORD_INFO: '密码错误，请重试',
        COMMENT_TITLE: '评论通知',
        LOGIN_TITLE: '登录通知',
        ChANGYAN_APP_KEY: '',
        CHANGYAN_CONF: '',

        COMMENT_SYSTEM: '0',
        COMMENT_SYSTEM_ROOT: '0',
        COMMENT_SYSTEM_CHANGYAN: '1',
        COMMENT_SYSTEM_OTHERS: '2',
        EMOJI: '表情',
        IS_PJAX: '1',
        IS_PAJX_COMMENT: '1',
        BASE_SCRIPT_URL: 'https://www.haorenka.cc/usr/themes/handsome/',
        BLOG_URL: 'https://www.haorenka.cc',
        THEME_COLOR: '9',
        THEME_HEADER_FIX: '1',
        THEME_ASIDE_FIX: '1',
        THEME_ASIDE_FOLDED: '',
        THEME_ASIDE_DOCK: '',
        THEME_CONTAINER_BOX: '1',
        THEME_HIGHLIGHT_CODE: '1',
        THEME_TOC: '1',
        TOC_TITLE: '文章目录',
        HEADER_FIX: '固定头部',
        ASIDE_FIX: '固定导航',
        ASIDE_FOLDED: '折叠导航',
        ASIDE_DOCK: '置顶导航',
        CONTAINER_BOX: '盒子模型',
        OFF_SCROLL_HEIGHT: '50',
        COMMENT_REJECT_PLACEHOLDER: '居然什么也不说，哼',
        COMMENT_PLACEHOLDER: '说点什么吧……',
        SHOW_SETTING_BUTTON: '1',
        THEME_VERSION: '5.0.020181231301',

        OPERATION_NOTICE: '操作通知',
        SCREENSHOT_BEGIN: '正在生成当前页面截图……',
        SCREENSHOT_NOTICE: '点击顶部下载按钮保存当前卡片',
        SCREENSHORT_ERROR: '由于图片跨域原因导致截图失败',
        SCREENSHORT_SUCCESS: '截图成功',
        MUSIC_NOTICE: '播放通知',
        MUSIC_FAILE: '当前音乐地址无效，自动为您播放下一首',
        MUSIC_FAILE_END: '当前音乐地址无效',
        MUSIC_LIST_SUCCESS: '歌单歌曲加载成功',
        CDN_NAME: ''
    };

</script>

<!--CDN加载-->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{--pjax--}}
<script src="{{ asset('haorenka/js/jquery.pjax.min.js') }}" type="text/javascript"></script>

<script>
    $(document).pjax('a[href^="https://www.haorenka.cc/"]:not(a[target="_blank"], a[no-pjax])', {
        container: '#content',
        fragment: '#content',
        timeout: 8000
    }).on('pjax:send',function () {
        $('#loading').removeClass('hide');
    }).on('pjax:click', function() {

        window['Page'].doPJAXClickAction();

        $('body,html').animate({scrollTop:0},100);


    }).on('pjax:complete', function() {
        window['Page'].doPJAXCompleteAction();


        $("img").lazyload({
            effect: "fadeIn",
            threshold: "200"
        });
        $(".lazy").lazyload({
            effect: "fadeIn",
            threshold: "200"
        });
        $('#loading').addClass('hide');



    })
</script>


<!--主题组件js加载-->

<!--平滑滚动组件-->
<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/SmoothScroll.min.js"></script>

<!--pjax动画组件-->

<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/lazyload.min.js"></script>
<script>
    $("img").lazyload({
        effect: "fadeIn",
        threshold: "200"
    });

    $(".lazy").lazyload({
        effect: "fadeIn",
        threshold: "200"
    });

    //后退的时候
    if (window.history && window.history.pushState) {
        $(window).on('popstate', function () {
            /// 当点击浏览器的 后退和前进按钮 时才会被触发，
            window.history.pushState('forward', null, '');
            window.history.forward(1);//当前页 ,
            $("img").lazyload({
                effect: "fadeIn",
                threshold: "200"
            });

            $(".lazy").lazyload({
                effect: "fadeIn",
                threshold: "200"
            });
        });
    }
    //在ie中必须有这两行
    window.history.pushState('forward', null, '');
    window.history.forward(1);
</script>



<!--lightgallery必备组件-->
<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/jquery.fancybox.min.js?v=5.0.020181231301"></script>

<!--component/comments.php 页面必需js（只有选择了原生评论的时候才会加载）-->
<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/OwO.min.js?v=5.0.020181231301"></script>
<!--component/comments.php 必需js结束-->


<!--截图插件-->
<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/html2canvas.min.js"></script>
<!--主题组件js加载结束-->

<!--主题核心js-->
<script src="{{ asset('haorenka/js/function.min.js') }}"></script>
<script src="{{ asset('haorenka/js/core.min.js') }}"></script>



<script src="{{ asset('haorenka/js/setting.min.js') }}"></script>

<script type="text/javascript">

    $(function () {
        /* 鼠标特效 */
        var a_idx = 0;
        $("body").click(function(e) {
            var a = new Array("豆豆", "豆豆", "豆豆", "豆豆", "豆豆", "豆豆", "笨豬" ,"笨豬", "笨豬", "笨豬", "笨豬", "笨豬");
            var $i = $("<span />").text(a[a_idx]);
            a_idx = (a_idx + 1) % a.length;
            var x = e.pageX,
                y = e.pageY;
            $i.css({
                "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
                "top": y - 20,
                "left": x,
                "position": "absolute",
                "font-weight": "bold",
                "color": "#ff6651"
            });
            $("body").append($i);
            $i.animate({
                    "top": y - 180,
                    "opacity": 0
                },
                1500,
                function() {
                    $i.remove();
                });
        });
    })
</script>


</body>
</html><!--html end-->
<!-- / footer -->
