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

    <title>bestcyt-Blog</title>
    <link rel="icon" type="image/ico" href="/favicon.ico">
    <meta name="description" content="我只是一个豆豆博客" />
    <meta name="keywords" content="豆豆博客,一个豆豆博客" />
    <meta name="generator" content="Typecho 1.1/17.10.30" />
    <meta name="template" content="handsome" />
    <link rel="alternate" type="application/rss+xml" title="豆豆博客 &raquo; RSS 2.0" href="https://www.haorenka.cc/feed/" />
    <link rel="alternate" type="application/rdf+xml" title="豆豆博客 &raquo; RSS 1.0" href="https://www.haorenka.cc/feed/rss/" />
    <link rel="alternate" type="application/atom+xml" title="豆豆博客 &raquo; ATOM 1.0" href="https://www.haorenka.cc/feed/atom/" />

    <!-- 第三方CDN加载CSS -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <!-- 本地css静态资源 -->
    <link rel="stylesheet" href="{{ asset('haorenka/css/function.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('haorenka/css/handsome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css" type="text/css" />



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

    <style type="text/css">html.bg{background:#EFEFEF}.cool-transparent .off-screen+* .app-content-body{background:#EFEFEF}#aside .wrapper:hover{background:url(https://www.ihewro.com/usr/uploads/time/5c471509637a3.gif);background-size:cover;color:#999;}@media (min-width:768px){.app-aside-fixed .aside-wrap{width:200px;}}@media (min-width:991px){.app-aside-fixed .aside-wrap{width:220px;}}.douban-list{object-fit:cover;}@media (max-width:340px){.item-thumb-small{min-height:108px;height:auto;}}.comment-content-true{display:block;}body{color:#777;}.bg-white{color:#777;}.nav-tabs-alt .nav-tabs>li.active>a{border-bottom-color:#000!important;}</style>
    <script src="https://cdn.staticfile.org/jquery/2.2.4/jquery.min.js"></script>
</head>

<body id="body">

<!-- aside -->
<div id="alllayout" class="app app-aside-fixed container app-header-fixed">
    {{--header--}}
    @include('home.header')
    <!--左边-->
    @include('home.left')
    {{--content--}}
        <div class="app-content">
            <div id="loading" class="butterbar active hide">
                <span class="bar"></span>
            </div>
            <a class="off-screen-toggle hide"></a>
            <main class="app-content-body ">
                <div class="hbox hbox-auto-xs hbox-auto-sm" id="content-home">
                    <!--文章-->
                @yield('content')
                </div>
            </main>
        </div>
    {{--底部--}}
    @include('home.footer')
</div>

{{--<link rel="stylesheet" type="text/css" href="https://www.haorenka.cc/usr/plugins/Like/css/style.css" />--}}
<link rel="stylesheet" type="text/css" href="{{ asset('haorenka/css/style.css') }}" />

<!--CDN加载-->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{--pjax--}}
<script src="{{ asset('haorenka/js/jquery.pjax.min.js') }}" type="text/javascript"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js" type="text/javascript"></script>

<script>
if ($.support.pjax) {
    $(document).on('click', 'a[data-pjax]', function(event) {
        $('body,html').animate({scrollTop:0},100);
        event.preventDefault();
        $.pjax({
            timeout: 8000,
            url: $(this).attr('href'),
            container: '#content-home'
        });
    })
    $(document).on('pjax:send', function(event) {
        $('#loading').removeClass('hide');
    });
    $(document).on('pjax:complete', function() {
        $('#loading').addClass('hide');

//        $("img").lazyload({
//            effect: "fadeIn",
//            threshold: "100"
//        });
//        $(".lazy").lazyload({
//            effect: "fadeIn",
//            threshold: "100"
//        });
    })
}else{
    alert('cant support pjax');
}

</script>


<!--主题组件js加载-->

<!--平滑滚动组件-->
<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/SmoothScroll.min.js"></script>

<!--pjax动画组件-->

<script src="https://www.haorenka.cc/usr/themes/handsome/assets/js/features/lazyload.min.js"></script>
<script>
//    $("img").lazyload({
//        effect: "fadeIn",
//        threshold: "200"
//    });

//    $(".lazy").lazyload({
//        effect: "fadeIn",
//        threshold: "200"
//    });
//
//    //后退的时候
//    if (window.history && window.history.pushState) {
//        $(window).on('popstate', function () {
//            /// 当点击浏览器的 后退和前进按钮 时才会被触发，
//            window.history.pushState('forward', null, '');
//            window.history.forward(1);//当前页 ,
//            $("img").lazyload({
//                effect: "fadeIn",
//                threshold: "200"
//            });
//
//            $(".lazy").lazyload({
//                effect: "fadeIn",
//                threshold: "200"
//            });
//        });
//    }
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
            var a = new Array("让我们",  "荡起双桨" , '小船儿' , '推开波浪');
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

        console.log('aaa');
        console.log('ff');
        console.log('aagga');
        console.log('gg');
    })
</script>

{{-- 点击的pjax 解决了就全部解决了兄弟，在看看原来的--}}

</body>
</html>

