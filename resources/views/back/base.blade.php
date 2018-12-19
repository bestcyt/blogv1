<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>bestcyt</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="bestcyt php 博客">
    <meta name="description" content="bestcyt php 博客">

    <script src="https://cdn.bootcss.com/jquery/3.3.0/jquery.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/style.min862f.css?v=4.1.0" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/plugin/layui/css/layui.css') }}">

</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">bestcyt博客后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">文章管理</a>
                    <dl class="layui-nav-child">
                        <dd><a  href="postCreate" id="postCreate">写点什么</a></dd>
                        <dd><a href="postList"   id="postList">文章列表</a></dd>
                        <dd><a href="#">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">标签管理</a>
                    <dl class="layui-nav-child">
                        <dd><a  href="labelCreate" id="labelCreate">新增标签</a></dd>
                        <dd><a href="labelList" id="labelList">标签列表</a></dd>
                        <dd><a href="#">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">分类管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">新增分类</a></dd>
                        <dd><a href="javascript:;">分类列表</a></dd>
                        <dd><a href="#">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">日志管理</a></li>
                <li class="layui-nav-item"><a href="">系统设置</a></li>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        {{--<!-- 内容主体区域 -->--}}
        <div style="padding: 15px;" id="content-main" style="overflow-y: scroll;">
            @yield('content')
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>

<script src="{{ asset('/plugin/layui/layui.js') }} "></script>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.js"></script>
{{--<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>--}}
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
{{--<script src="/js/hplus.min.js?v=4.1.0"></script>--}}

    {{--pjax不跳转，很奇怪，得研究下--}}
{{--<script type="text/javascript" src="/js/contabs.min.js"></script>--}}

    {{--进度条效果--}}
<script src="/js/plugins/pace/pace.min.js"></script>

<script>
    $(function(){

        console.log('in $');
        layui.use('element', function(){
            console.log('in layui');
            var element = layui.element;

        });

        $(document).on('click','#postCreate',function(event){
            event.preventDefault();
            $.pjax({
                url: '/back/posts/create',
                container: '#content-main'
            });
        });

        $(document).on('click','#postList',function(event){
            event.preventDefault();
            $.pjax({
                url: '/back/posts',
                container: '#content-main'
            });
        });

        $(document).on('click','#sort',function(event){
            event.preventDefault();
            $.pjax({
                url: '/back/sorts',
                container: '#content-main'
            });
        });

        $(document).on('click','#labelCreate',function(event){
            event.preventDefault();
            $.pjax({
                url: '/back/labels/create',
                container: '#content-main'
            });
        });

        $(document).on('click','#labelList',function(event){
            event.preventDefault();

            $.pjax({
                url: '/back/labels',
                container: '#content-main'
            });
        });

        //labels页面的
        $(document).on('submit', '#formLabelCreate', function(event) {
            console.log('formLabelCreate');
            event.preventDefault();
            $.pjax.submit(event, '#content-main');

        });

        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

    });
//    //JavaScript代码区域

</script>
</body>
</html>