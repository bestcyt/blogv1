<aside id="aside" class="app-aside hidden-xs bg-light dker b-r">  <!--<aside>-->
    <div class="aside-wrap" layout="column">
        <div class="navi-wrap scroll-y" flex>
            <!-- user -->
            <div class="clearfix hidden-xs text-center hide  show" id="aside-user">
                <div class="dropdown wrapper">
                    <div ui-nav>
                        <a href="{{ env('APP_URL') }}">
                            <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="https://source.unsplash.com/user/erondu/200x200" class="img-full">
                </span>
                        </a>
                    </div>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">一个豆豆</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">江湖险恶，我从不轻易留下自己的豆豆。</span>
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
                        <a href="{{ env('APP_URL') }}" class="auto" data-pjax>
                            <i class="iconfont icon-zhuye icon text-md"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <!-- /主页 -->
                    <li> <a  href="#" class ="auto">
                            <i class="fontello fontello-unlock-alt icon text-md"></i><span>待定</span></a></li>
                    <li> <a href="#" class ="auto">
                            <i class="fontello fontello-pencil icon text-md"></i><span>待定</span></a></li>
                    <li class="line dk"></li>
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
                            @if(!empty($sorts))
                                @foreach($sorts as $sort)
                                    <li><a href="{{ env('APP_URL') }}/sort/{{ $sort->id }}"  data-pjax><b class="badge pull-right">*</b><span>{{ $sort->sort_name }}</span></a></li>
                                @endforeach
                            @endif
                        </ul>
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
                            <li><a href="{{ env('APP_URL') }}" data-pjax><span>文章归档(待撸时间轴)</span></a></li>
                            <li><a href="{{ env('APP_URL') }}" data-pjax><span>雁过留痕(待撸记录)</span></a></li>
                            <li><a href="{{ env('APP_URL') }}" data-pjax><span>时光(待撸点滴)</span></a></li>
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
                            <li><a target="blank" href="{{ env('APP_URL') }}" data-pjax>网址发布页</a></li>
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
                <a  href="{{ env('APP_URL') }}" title="" data-toggle="tooltip" data-placement="top" data-original-title="待定" data-pjax>
                    <span class="block"><i class="fontello fontello-rss"></i></span>
                    <small class="text-muted">文章</small>
                </a>
            </div>
            <div class="col-xs-6 footer-stats">
                <a  href="{{ env('APP_URL') }}" title="" data-toggle="tooltip" data-placement="top" data-original-title="待定" data-pjax>
                    <span class="block"><i class="fontello fontello-rss-square"></i></span>
                    <small class="text-muted">评论</small>
                </a>
            </div>
        </div>

    </div><!--.aside-wrap-->
</aside>