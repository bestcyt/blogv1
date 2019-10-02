<div class="col center-part">
    {{--公告位置--}}
    <div class="alert alert-warning alert-block" style="margin-bottom: 0px;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <p><i class="fontello fontello-volume-up" aria-hidden="true"></i>&nbsp;
            一个小小的博客记录点点滴滴。</p>
    </div>
    {{--文字--}}
    <header class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3 text-black l-h">豆豆</h1>
        <small class="text-muted letterspacing indexWords">我从山中来，山风翻我书~</small>
    </header>

    {{--wrapper-md--}}
    <div class="wrapper-md" id="post-panel">
        <!--首页输出文章-->
        <div class="blog-post">
            {{--置顶文章--}}
            @if(!empty($top_posts))
                @foreach($top_posts as $post)
                    <div class="panel-small">
                        <div class="index-post-img-small post-feature index-img-small">
                            <a href="/post/{{ $post->id }}" title="{{ $post->post_name }}">
                                <img src="{{ $post->image ?? 'http://upyun-cyt.b0.upaiyun.com/image/gjRhCNyjGQRedfzSE90PVlSONyMfCDBfKRHXgfgd.jpeg' }}" alt="{{ $post->post_name }}">
                                {{--<div class="item-thumb-small lazy" data-original="{{ asset('panhu.jpg') }}"--}}
                                        {{--style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=)"--}}
                                {{--></div>--}}
                            </a>
                        </div>
                        <div class="post-meta wrapper-lg">
                            <h2 class="m-t-none index-post-title"><a href="/post/{{ $post->id }}" data-pjax><span class="label text-base bg-danger pull-left m-t-xs m-r-xs" style="margin-top:  2px;">置顶</span>{{ $post->post_name }}</a></h2>
                            <p class="summary l-h-2x text-muted">{{ $post->post_desc }}</p><div class="line line-lg b-b b-light"></div>
                            <div class="text-muted post-item-foot-icon">
                                <i class="fontello fontello-user text-muted"></i><span class="m-r-sm">&nbsp;<a href="#">{{ $post->user->name }}&nbsp;</a></span>
                                <i class="fontello fontello-clock-o text-muted"></i><span class="m-r-sm">&nbsp;{{ $post->created_at }}</span><a href="#" class="m-l-sm post-item-comment">
                                    <i class="iconfont icon-comments-o text-muted"></i>&nbsp;{{ $post->comments_num }} 条评论</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            {{--非置顶文章--}}
            @foreach($posts as $post)
                <div class="panel-small">
                    <div class="index-post-img-small post-feature index-img-small">
                        <a href="/post/{{ $post->id }}" title="{{ $post->post_name }}">
                            <img src="{{ $post->image }}"  alt="{{ $post->post_name }}">
                            {{--<div class="item-thumb-small lazy" data-original="{{ asset('panhu.jpg') }}"--}}
                                    {{--style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=)"--}}
                            {{--></div>--}}
                        </a>
                    </div>
                    <div class="post-meta wrapper-lg" >
                        <h2 class="m-t-none index-post-title"><a href="/post/{{ $post->id }}" data-pjax title="{{ $post->post_name }}">{{ $post->post_name }}</a></h2>
                        <p class="summary l-h-2x text-muted">{{ $post->post_desc }}</p><div class="line line-lg b-b b-light"></div>
                        <div class="text-muted post-item-foot-icon">
                            <i class="fontello fontello-user text-muted"></i><span class="m-r-sm">&nbsp;<a href="#">{{ $post->user->name }}&nbsp;</a></span>
                            <i class="fontello fontello-clock-o text-muted"></i><span class="m-r-sm">&nbsp;{{ $post->updated_at }}</span><a href="#" class="m-l-sm post-item-comment">
                                <i class="iconfont icon-comments-o text-muted"></i>&nbsp;{{ $post->comments_num }} 条评论</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!--分页首页按钮-->
        <nav class="text-center m-t-lg m-b-lg" role="navigation">
            {{ $posts->links() }}
        </nav>
        <style>
            .page-navigator>li>a, .page-navigator>li>span{
                line-height: 1.42857143;
                padding: 6px 12px;
            }
        </style>
    </div>
</div>
@include('home.right')
