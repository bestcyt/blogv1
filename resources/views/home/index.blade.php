@extends('home.base')

@section('content')
        {{-- loading --}}
        <div id="loading" class="butterbar active hide">
            <span class="bar"></span>
        </div>

        <a class="off-screen-toggle hide"></a>

        <main class="app-content-body ">
            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <div class="col center-part">
                    {{--公告位置--}}
                    <div class="alert alert-warning alert-block" style="
              margin-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="alert">×</button><p><i class="fontello fontello-volume-up" aria-hidden="true"></i>&nbsp;
                            资源是有时效性，希望理解。</p>
                    </div>
                    {{--文字--}}
                    <header class="bg-light lter b-b wrapper-md">
                        <h1 class="m-n font-thin h3 text-black l-h">陈一锑</h1>
                        <small class="text-muted letterspacing indexWords">迷失的人迷失了，相逢的人会再相逢</small>
                    </header>

                    <div class="wrapper-md" id="post-panel">
                        <!--首页输出文章-->
                        <div class="blog-post">
                            @foreach($posts as $post)
                                <div class="panel-small">
                                    <div class="index-post-img-small post-feature index-img-small">
                                        <a href="/post/{{ $post->id }}">
                                            <div class="item-thumb-small lazy" data-original="https://www.baidu.com/img/bd_logo1.png?where=super"
                                                    {{--style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=)"--}}
                                            ></div>
                                        </a>
                                    </div>

                                    <div class="post-meta wrapper-lg">
                                        <h2 class="m-t-none index-post-title"><a href="/post/{{ $post->id }}" data-pjax>{{ $post->post_name }}</a></h2>
                                        <p class="summary l-h-2x text-muted">{{ $post->post_desc }}</p><div class="line line-lg b-b b-light"></div>
                                        <div class="text-muted post-item-foot-icon">
                                            <i class="fontello fontello-user text-muted"></i><span class="m-r-sm">&nbsp;<a href="https://www.haorenka.cc/author/1/">一个好人&nbsp;</a></span>

                                            <i class="fontello fontello-clock-o text-muted"></i><span class="m-r-sm">&nbsp;2018 年 11 月 07 日</span><a href="https://www.haorenka.cc/juheapp.html#comments" class="m-l-sm post-item-comment"><i class="iconfont icon-comments-o text-muted"></i>&nbsp;8 条评论</a></div><!--text-muted-->
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!--分页首页按钮-->
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
@endsection
