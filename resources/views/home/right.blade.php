<!--文章右侧边栏开始-->
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
                        @foreach($hotPosts as $hotPost)
                            <li class="list-group-item">
                                <a href="https://www.haorenka.cc/prshe-320g.html" class="pull-left thumb-sm m-r"></a>
                                <div class="clear">
                                    <h4 class="h5 l-h">
                                        <a href="{{ env('APP_URL').'/post/'.$hotPost->id }}" title="{{ $hotPost->post_name }}" data-pjax>
                                            {{ $hotPost->post_name }} </a>
                                    </h4>
                                    <small class="text-muted post-head-icon">
                                        <span class="meta-date">
                                            <i class="fontello fontello-eye" aria-hidden="true"></i>
                                            <span class="sr-only">浏览次数:</span>
                                            <span class="meta-value">91807</span>
                                        </span>
                                    </small>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--最新评论-->
                <div id="widget-tabs-4-comments" class="tab-pane fade wrapper-md no-js-show" role="tabpanel">
                    <h3 class="widget-title m-t-none text-md">最新评论</h3>
                    <ul class="list-group no-borders pull-in auto m-b-none no-bg">
                        <li class="list-group-item">

                            <a href="https://www.haorenka.cc/tuwanjun.html/comment-page-1#comment-6638" class="pull-left thumb-sm avatar m-r">
                            </a>
                            <a href="https://www.haorenka.cc/tuwanjun.html/comment-page-1#comment-6638" class="text-muted">
                                <!--<i class="iconfont icon-comments-o text-muted pull-right m-t-sm text-sm" title="" aria-hidden="true" data-toggle="tooltip" data-placement="auto left"></i>
                                <span class="sr-only"></span>-->
                            </a>
                            <div class="clear">
                                <div class="text-ellipsis">
                                    <a href="https://www.haorenka.cc/tuwanjun.html/comment-page-1#comment-6638" title="嘿嘿"> 嘿嘿 </a>
                                </div>
                                <small class="text-muted">
                      <span>
                          太感谢了，谢谢φ(￣∇￣o)                      </span>
                                </small>
                            </div>
                        </li>
                        <li class="list-group-item">

                            <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6637" class="pull-left thumb-sm avatar m-r">
                            </a>
                            <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6637" class="text-muted">
                                <!--<i class="iconfont icon-comments-o text-muted pull-right m-t-sm text-sm" title="" aria-hidden="true" data-toggle="tooltip" data-placement="auto left"></i>
                                <span class="sr-only"></span>-->
                            </a>
                            <div class="clear">
                                <div class="text-ellipsis">
                                    <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6637" title="菜鸟005"> 菜鸟005 </a>
                                </div>
                                <small class="text-muted">
                      <span>
                          为啥攻击你啊OωO                      </span>
                                </small>
                            </div>
                        </li>
                        <li class="list-group-item">

                            <a href="https://www.haorenka.cc/gif-1.html/comment-page-1#comment-6635" class="pull-left thumb-sm avatar m-r">
                            </a>
                            <a href="https://www.haorenka.cc/gif-1.html/comment-page-1#comment-6635" class="text-muted">
                                <!--<i class="iconfont icon-comments-o text-muted pull-right m-t-sm text-sm" title="" aria-hidden="true" data-toggle="tooltip" data-placement="auto left"></i>
                                <span class="sr-only"></span>-->
                            </a>
                            <div class="clear">
                                <div class="text-ellipsis">
                                    <a href="https://www.haorenka.cc/gif-1.html/comment-page-1#comment-6635" title="艾薇保底"> 艾薇保底 </a>
                                </div>
                                <small class="text-muted">
                      <span>
                          倒数第五个资源链接thunder://QUFtYWduZXQ6...                      </span>
                                </small>
                            </div>
                        </li>
                        <li class="list-group-item">

                            <a href="https://www.haorenka.cc/laoniangnaida.html/comment-page-1#comment-6630" class="pull-left thumb-sm avatar m-r">
                            </a>
                            <a href="https://www.haorenka.cc/laoniangnaida.html/comment-page-1#comment-6630" class="text-muted">
                                <!--<i class="iconfont icon-comments-o text-muted pull-right m-t-sm text-sm" title="" aria-hidden="true" data-toggle="tooltip" data-placement="auto left"></i>
                                <span class="sr-only"></span>-->
                            </a>
                            <div class="clear">
                                <div class="text-ellipsis">
                                    <a href="https://www.haorenka.cc/laoniangnaida.html/comment-page-1#comment-6630" title="coci"> coci </a>
                                </div>
                                <small class="text-muted">
                      <span>
                          该评论仅登录用户及评论双方可见                      </span>
                                </small>
                            </div>
                        </li>
                        <li class="list-group-item">

                            <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6629" class="pull-left thumb-sm avatar m-r">
                            </a>
                            <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6629" class="text-muted">
                                <!--<i class="iconfont icon-comments-o text-muted pull-right m-t-sm text-sm" title="" aria-hidden="true" data-toggle="tooltip" data-placement="auto left"></i>
                                <span class="sr-only"></span>-->
                            </a>
                            <div class="clear">
                                <div class="text-ellipsis">
                                    <a href="https://www.haorenka.cc/20190111.html/comment-page-1#comment-6629" title="key"> key </a>
                                </div>
                                <small class="text-muted">
                      <span>
                          最近身体有点棒，希望有一个大佬补一下                      </span>
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
                            <a href="https://www.haorenka.cc/baiduganjingyun.html" class="pull-left thumb-sm m-r"></a>
                            <div class="clear">
                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/baiduganjingyun.html" title="百度干净云：召唤大神版-破解限速"> 百度干净云：召唤大神版-破解限速 </a></h4>
                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">852</span>
                    </span>
                                </small></div></li><li class="list-group-item">
                            <a href="https://www.haorenka.cc/laoniangnaida.html" class="pull-left thumb-sm m-r"></a>
                            <div class="clear">
                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/laoniangnaida.html" title="微博营养不良博主推荐：老娘奶大"> 微博营养不良博主推荐：老娘奶大 </a></h4>
                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">5464</span>
                    </span>
                                </small></div></li><li class="list-group-item">
                            <a href="https://www.haorenka.cc/iqiyi-jd-vip.html" class="pull-left thumb-sm m-r"></a>
                            <div class="clear">
                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/iqiyi-jd-vip.html" title="爱奇艺+京东plus年会员仅需89元"> 爱奇艺+京东plus年会员仅需89元 </a></h4>
                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">3372</span>
                    </span>
                                </small></div></li><li class="list-group-item">
                            <a href="https://www.haorenka.cc/tampermonkey-baidu-3-23.html" class="pull-left thumb-sm m-r"></a>
                            <div class="clear">
                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/tampermonkey-baidu-3-23.html" title="当前可用的百度网盘油猴脚本版本"> 当前可用的百度网盘油猴脚本版本 </a></h4>
                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">775</span>
                    </span>
                                </small></div></li><li class="list-group-item">
                            <a href="https://www.haorenka.cc/torrent-search-engine.html" class="pull-left thumb-sm m-r"></a>
                            <div class="clear">
                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/torrent-search-engine.html" title="【安卓】种子磁力搜索神器最新版-无法被超越的软件"> 【安卓】种子磁力搜索神器最新版-无法被超越的软件 </a></h4>
                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">4332</span>
                    </span>
                                </small></div></li>            </ul>
                </div>
            </div>
        </section>
        <!--博客信息-->
        <section id="categories-2" class="widget widget_categories wrapper-md clear">
            <h3 class="widget-title m-t-none text-md">博客信息</h3>
            <ul class="list-group">
                <li class="list-group-item"> <i class="glyphicon glyphicon-file text-muted"></i> <span class="badge
           pull-right">166</span>文章数目</li>
                <li class="list-group-item"> <i class="glyphicon glyphicon-comment text-muted"></i> <span class="badge
           pull-right">3252</span>评论数目</li>
                <li class="list-group-item"> <i class="glyphicon glyphicon-equalizer text-muted"></i> <span class="badge
           pull-right">1年131天</span>运行天数</li>
                <li class="list-group-item"> <i class="glyphicon glyphicon-refresh text-muted"></i> <span class="badge
           pull-right">45 分钟前</span>最后更新</li>
            </ul>
        </section>
        <!--文章的段落，类似laravelChina那种文章段落目录-->
        {{--<section id="tag_toc" class="widget widget_categories wrapper-md clear">--}}
            {{--<h3 class="widget-title m-t-none text-md">文章目录</h3>--}}
            {{--<div class="tags l-h-2x">--}}
                {{--<div id="toc"></div>--}}
            {{--</div>--}}
        {{--</section>--}}
    </div>
</aside>
<!--文章右侧边栏结束-->