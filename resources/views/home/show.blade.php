<div class="col center-part">
    <!--生成分享图片必须的HTML结构-->
    <style>
        .mdx-si-head .cover{
            object-fit: cover;
            width: 100%;
            height: 100%
        }
    </style>
    {{--<div class="mdx-share-img" id="mdx-share-img"><div class="mdx-si-head" style="background-image:url(https://www.haorenka.cc/usr/themes/handsome/assets/img/video.jpg)"><p>{{ $post->user->name }}</p><span>{{ $post->post_name }}</span></div><div--}}
                {{--class="mdx-si-sum">{{ $post->post_desc }}</div><div class="mdx-si-box"><span>扫描右侧二维码阅读全文</span><div class="mdx-si-qr" id="mdx-si-qr"><img--}}
                        {{--src="https://www.haorenka.cc/usr/themes/handsome/libs/GetCode.php?type=url&content=https://www.haorenka.cc/huashengriji.html"></div></div><div class="mdx-si-time">04<br><span--}}
                    {{--class="mdx-si-time-2">2019/01</span></div>--}}
    {{--</div>    <!--标题下的一排功能信息图标：作者/时间/浏览次数/评论数/分类-->--}}

    <header id="small_widgets" class="bg-light lter b-b wrapper-md">
        <h1 class="entry-title m-n font-thin h3 text-black l-h">{{ $post->post_name }}<a class="plus-font-size" data-toggle="tooltip" data-original-title="点击改变文章字体大小"><i class="glyphicon glyphicon-text-size
" aria-hidden="true"></i></a></h1>       <!--文章标题下面的小部件-->
        <ul  class="entry-meta text-muted list-inline m-b-none small
             post-head-icon">
            <!--作者-->
            <li class="meta-author"><i class="fontello fontello-user" aria-hidden="true"></i><span class="sr-only">博主：</span> <a class="meta-value" href="#"> {{ $post->user->name }}</a></li>
            <!--发布时间-->
            <li class="meta-date"><i class="fontello fontello-clock-o" aria-hidden="true"></i>&nbsp;<span class="sr-only">发布时间：</span><time class="meta-value">{{ $post->created_at }}</time></li>
            <!--浏览数-->
            <li class="meta-views"><i class="fontello fontello-eye" aria-hidden="true"></i>&nbsp;<span class="meta-value">{{ $post->page_view }}&nbsp;次浏览</span></li>
            <!--评论数-->
            <li class="meta-comments"><i class="iconfont icon-comments-o" aria-hidden="true"></i>&nbsp;
                {{--<a class="meta-value" href="#comments">&nbsp;{{ $post->comments_num }} 条评论</a>--}}
            </li>
            <!--文字数目-->
            <li class="meta-word"><i class="fontello fontello-pencil"></i>&nbsp;<span class="meta-value">{{ $post->word_count }}&nbsp;字数</span></li>
            <!--分类-->
            {{--<li class="meta-categories"><i class="fontello fontello-tags" aria-hidden="true"></i> <span class="sr-only">分类：</span> <span class="meta-value"><a href="https://www.haorenka.cc/laosiji/">{{ $post->sout_id }}</a></span></li>--}}
        </ul>
    </header>
    <div class="wrapper-md" id="post-panel">
        <ol class="breadcrumb bg-white b-a" itemscope=""><li>
                <a href="{{ env('APP_URL') }}" itemprop="breadcrumb" title="返回首页" data-toggle="tooltip" data-pjax><i class="fontello fontello-home" aria-hidden="true"></i>&nbsp;首页</a>
            </li><li class="active">正文&nbsp;&nbsp;</li>
            <div style="float:right;">
                分享到：
                <style>
                    .breadcrumb i.iconfont.icon-qzone:after {
                        padding: 0 0 0 5px;
                        color: #ccc;
                        content: "/\00a0";
                    }
                    .breadcrumb i.fontello.fontello-weibo:after {
                        padding: 0 5px 0 5px;
                        color: #ccc;
                        content: "/\00a0";
                    }
                </style>
                {{--<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=https://www.haorenka.cc/huashengriji.html&title=花生日记：真正0成本躺着赚钱&site=https://www.haorenka.cc/" itemprop="breadcrumb" target="_blank" title="" data-toggle="tooltip" data-original-title="分享到QQ空间" onclick="window.open(this.href, 'qzone-share', 'width=550,height=335');return false;"><i style ="font-size:15px;" class="iconfont icon-qzone" aria-hidden="true"></i></a>--}}
                {{--<a href="http://service.weibo.com/share/share.php?url=https://www.haorenka.cc/huashengriji.html&title=花生日记：真正0成本躺着赚钱" target="_blank" itemprop="breadcrumb" title="" data-toggle="tooltip" data-original-title="分享到微博" onclick="window.open(this.href, 'weibo-share', 'width=550,height=335');return false;"><i style ="font-size:15px;" class="fontello fontello-weibo" aria-hidden="true"></i></a>   --}}
                {{--<a id="generateShareImg" itemprop="breadcrumb" title="" data-toggle="tooltip" data-original-title="生成分享图">--}}
                    {{--<i style ="font-size:13px;" class="fontello fontello-camera" aria-hidden="true"></i></a>--}}
            </div>
        </ol>       <!--博客文章样式 begin with .blog-post-->
        <div id="postpage" class="blog-post">
            <article class="panel">
                <!--文章页面的头图-->
                <!--文章内容-->
                <div id="post-content" class="wrapper-lg">
                     <div class="entry-content l-h-2x">
                            {!! $post->info !!}
                        <div class="show-foot">
                            <div class="notebook">
                                <i class="fontello fontello-clock-o"></i>
                                <span>最后修改：{{ $post->updated_at }}</span>
                            </div>
                            <div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并注明转载地址"><span>© 著作权归作者所有</span>
                            </div>
                        </div>
                         {{--点赞--}}
                        <div class="post-like">
                            <div id="like" class="fa-thumbs-up" data-pid="{{ $post->id }}"></div>
                            <div id="zan_text">{{ $post->like_num }}</div>
                            <script>
                                {{--点赞js--}}
                                $(function () {
                                    $('#like').on('click',function () {
                                        var old_like_num = $('#zan_text').text();
                                        var url = '/post-like?id='+$(this).attr('data-pid');
                                        $.get(url, function(str){
                                            if (str == 1){
                                                $('#zan_text').text(Number(old_like_num) + Number(1));
                                            }
                                        });
                                    })
                                })

                            </script>
                        </div>
                     </div>
                </div>
            </article>
        </div>
        <!--上一篇&下一篇-->
        <nav class="m-t-lg m-b-lg">
            <ul class="pager">
                @if(\App\Models\post::find((int)($post->id + 1 )))
                    <li class="next"> <a href="{{ env('APP_URL') }}/post/{{ (int)($post->id + 1 ) }}" title="下一篇" data-toggle="tooltip" data-pjax> 下一篇 </a></li>
                @endif
                @if(\App\Models\post::find((int)($post->id - 1 )))
                    <li class="previous"> <a href="{{ env('APP_URL') }}/post/{{ (int)($post->id - 1 ) }}" title="上一篇" data-toggle="tooltip" data-pjax> 上一篇 </a></li>
                @endif
            </ul>
        </nav>
        <!--评论-->

        <style>
            textarea#comment{
                background-image: url('https://i.loli.net/2018/10/27/5bd3e23d8dd25.png');
                background-color: #fafdff;
            }
        </style>

        @if($post->is_comment == 1)
        <div id="comments">

            <!--评论列表-->
            <h4 class="comments-title m-t-lg m-b">6 条评论</h4><ol class="comment-list">
                <!--自定义评论代码结构-->

                <li id="comment-6447" class="comment-body comment-parent comment-odd">
                    <div id="div-comment-6447" class="comment-body">

                        <a class="pull-left thumb-sm">
                            <img nogallery src="https://q.qlogo.cn/g?b=qq&nk=1430190357&s=100" class="avatar-40 photo img-circle" style="height:40px!important; width: 40px!important;">                </a>
                        <div class="m-b m-l-xxl">
                            <div class="comment-meta">
            <span class="comment-author vcard">
              <b class="fn">感谢好人一生平安</b>              </span>
                                <div class="comment-metadata">
                                    <time class="format_time text-muted text-xs block m-t-xs" pubdate="pubdate" datetime="2019-01-06T20:43:58+08:00">2 星期前</time>
                                </div>
                            </div>
                            <!--回复内容-->
                            <div class="comment-content m-t-sm">
                                <span class="comment-author-at"><b></b></span><span class="comment-content-true">
                            <p>注册起来，自己用也挺好</p>                        </span>
                            </div>
                            <!--回复按钮-->
                            <div class="comment-reply m-t-sm">
                                <a href="https://www.haorenka.cc/huashengriji.html/comment-page-1?replyTo=6447#respond-post-899" rel="nofollow" onclick="return TypechoComment.reply('comment-6447', 6447);">回复</a>                    </div>
                        </div>

                    </div>
                    <!-- 单条评论者信息及内容 -->
                    <!-- 是否嵌套评论判断结束 -->
                </li><!--匹配`自定义评论的代码结构`下面的li标签-->

                <!--自定义评论代码结构-->

                <li id="comment-6443" class="comment-body comment-parent comment-even">
                    <div id="div-comment-6443" class="comment-body">

                        <a class="pull-left thumb-sm">
                            <img nogallery src="https://q.qlogo.cn/g?b=qq&nk=2313316136&s=100" class="avatar-40 photo img-circle" style="height:40px!important; width: 40px!important;">                </a>
                        <div class="m-b m-l-xxl">
                            <div class="comment-meta">
            <span class="comment-author vcard">
              <b class="fn"><a href="https://www.haorenka.cc/go/aHR0cHM6Ly9zaG9wMTg3NzQ1MDI1LnRhb2Jhby5jb20vP3NwbT0yMDEzLjEuMTAwMDEyNi4yLjM5NzEyZTM3MFE1d3h1"target="_blank" rel="external nofollow">一个不愿意透露姓名的小明同学</a></b>              </span>
                                <div class="comment-metadata">
                                    <time class="format_time text-muted text-xs block m-t-xs" pubdate="pubdate" datetime="2019-01-06T17:58:07+08:00">2 星期前</time>
                                </div>
                            </div>
                            <!--回复内容-->
                            <div class="comment-content m-t-sm">
                                <span class="comment-author-at"><b></b></span><span class="comment-content-true">
                            <p>大概明白了 我是一名淘宝店主 这个商家反利其实就是淘宝客 淘宝店主设置商品营销 佣金 优惠券 这个平台在整理发出来<br>
在通过你们推广出售 虽然是能够赚钱但是一般一个商品只有一块钱给你 大多数淘宝店主设置佣金只有百分之5 然后这个平台拿一部分你拿一部分 没有多少了</p>                        </span>
                            </div>
                            <!--回复按钮-->
                            <div class="comment-reply m-t-sm">
                                <a href="https://www.haorenka.cc/huashengriji.html/comment-page-1?replyTo=6443#respond-post-899" rel="nofollow" onclick="return TypechoComment.reply('comment-6443', 6443);">回复</a>                    </div>
                        </div>

                    </div>
                    <!-- 单条评论者信息及内容 -->
                    <!-- 是否嵌套评论判断开始 -->
                    <div class="comment-children list-unstyled m-l-xxl">
                        <ol class="comment-list">
                            <!--自定义评论代码结构-->

                            <li id="comment-6444" class="comment-body comment-child comment-level-odd comment-odd">
                                <div id="div-comment-6444" class="comment-body">

                                    <a class="pull-left thumb-sm">
                                        <img nogallery src="https://q.qlogo.cn/g?b=qq&nk=335748728&s=100" class="avatar-40 photo img-circle" style="height:40px!important; width: 40px!important;">                </a>
                                    <div class="m-b m-l-xxl">
                                        <div class="comment-meta">
            <span class="comment-author vcard">
              <b class="fn">梦里花落</b>              </span>
                                            <div class="comment-metadata">
                                                <time class="format_time text-muted text-xs block m-t-xs" pubdate="pubdate" datetime="2019-01-06T18:07:05+08:00">2 星期前</time>
                                            </div>
                                        </div>
                                        <!--回复内容-->
                                        <div class="comment-content m-t-sm">
                                            <span class="comment-author-at"><b><a href="#comment-6443">@一个不愿意透露姓名的小明同学</a></b></span><span class="comment-content-true">
                            <p>之前做过淘宝联盟，一般的平台都是有筛选过的高佣商品，佣金大部分是20%左右，花生日记的好处就是可以裂变，不像淘宝联盟得一直推广，很烦的。</p>                        </span>
                                        </div>
                                        <!--回复按钮-->
                                        <div class="comment-reply m-t-sm">
                                            <a href="https://www.haorenka.cc/huashengriji.html/comment-page-1?replyTo=6444#respond-post-899" rel="nofollow" onclick="return TypechoComment.reply('comment-6444', 6444);">回复</a>                    </div>
                                    </div>

                                </div>
                                <!-- 单条评论者信息及内容 -->
                                <!-- 是否嵌套评论判断结束 -->
                            </li><!--匹配`自定义评论的代码结构`下面的li标签-->
                        </ol> <!-- 嵌套评论所有内容-->
                    </div>
                    <!-- 是否嵌套评论判断结束 -->
                </li><!--匹配`自定义评论的代码结构`下面的li标签-->

                <!--自定义评论代码结构-->

                <li id="comment-6442" class="comment-body comment-parent comment-odd">
                    <div id="div-comment-6442" class="comment-body">

                        <a class="pull-left thumb-sm">
                            <img nogallery src="https://q.qlogo.cn/g?b=qq&nk=1840876444&s=100" class="avatar-40 photo img-circle" style="height:40px!important; width: 40px!important;">                </a>
                        <div class="m-b m-l-xxl">
                            <div class="comment-meta">
            <span class="comment-author vcard">
              <b class="fn">alith</b>              </span>
                                <div class="comment-metadata">
                                    <time class="format_time text-muted text-xs block m-t-xs" pubdate="pubdate" datetime="2019-01-06T16:53:51+08:00">2 星期前</time>
                                </div>
                            </div>
                            <!--回复内容-->
                            <div class="comment-content m-t-sm">
                                <span class="comment-author-at"><b></b></span><span class="comment-content-true">
                            <p><img src="https://www.haorenka.cc/usr/themes/handsome/usr/img/emotion/aru/lurking.png" class="emotion-aru"> 还能加表情，呜</p>                        </span>
                            </div>
                            <!--回复按钮-->
                            <div class="comment-reply m-t-sm">
                                <a href="https://www.haorenka.cc/huashengriji.html/comment-page-1?replyTo=6442#respond-post-899" rel="nofollow" onclick="return TypechoComment.reply('comment-6442', 6442);">回复</a>                    </div>
                        </div>

                    </div>
                    <!-- 单条评论者信息及内容 -->
                    <!-- 是否嵌套评论判断结束 -->
                </li><!--匹配`自定义评论的代码结构`下面的li标签-->

                <!--自定义评论代码结构-->

                <li id="comment-6434" class="comment-body comment-parent comment-even">
                    <div id="div-comment-6434" class="comment-body">

                        <a class="pull-left thumb-sm">
                            <img nogallery src="https://q.qlogo.cn/g?b=qq&nk=1922595400&s=100" class="avatar-40 photo img-circle" style="height:40px!important; width: 40px!important;">                </a>
                        <div class="m-b m-l-xxl">
                            <div class="comment-meta">
            <span class="comment-author vcard">
              <b class="fn">脱光干</b>              </span>
                                <div class="comment-metadata">
                                    <time class="format_time text-muted text-xs block m-t-xs" pubdate="pubdate" datetime="2019-01-06T00:42:01+08:00">2 星期前</time>
                                </div>
                            </div>
                            <!--回复内容-->
                            <div class="comment-content m-t-sm">
                                <span class="comment-author-at"><b></b></span><span class="comment-content-true">
                            <p>注册了</p>                        </span>
                            </div>
                            <!--回复按钮-->
                            <div class="comment-reply m-t-sm">
                                <a href="https://www.haorenka.cc/huashengriji.html/comment-page-1?replyTo=6434#respond-post-899" rel="nofollow" onclick="return TypechoComment.reply('comment-6434', 6434);">回复</a>                    </div>
                        </div>

                    </div>
                    <!-- 单条评论者信息及内容 -->
                    <!-- 是否嵌套评论判断结束 -->
                </li><!--匹配`自定义评论的代码结构`下面的li标签-->

                <!--自定义评论代码结构-->

                <li id="comment-6422" class="comment-body comment-parent comment-odd">
                    <div id="div-comment-6422" class="comment-body">

                        <a class="pull-left thumb-sm">
                            <img nogallery src="https://q.qlogo.cn/g?b=qq&nk=3097268294&s=100" class="avatar-40 photo img-circle" style="height:40px!important; width: 40px!important;">                </a>
                        <div class="m-b m-l-xxl">
                            <div class="comment-meta">
            <span class="comment-author vcard">
              <b class="fn">无名</b>              </span>
                                <div class="comment-metadata">
                                    <time class="format_time text-muted text-xs block m-t-xs" pubdate="pubdate" datetime="2019-01-04T21:04:05+08:00">2 星期前</time>
                                </div>
                            </div>
                            <!--回复内容-->
                            <div class="comment-content m-t-sm">
                                <span class="comment-author-at"><b></b></span><span class="comment-content-true">
                            <p>好人一生平安</p>                        </span>
                            </div>
                            <!--回复按钮-->
                            <div class="comment-reply m-t-sm">
                                <a href="https://www.haorenka.cc/huashengriji.html/comment-page-1?replyTo=6422#respond-post-899" rel="nofollow" onclick="return TypechoComment.reply('comment-6422', 6422);">回复</a>                    </div>
                        </div>

                    </div>
                    <!-- 单条评论者信息及内容 -->
                    <!-- 是否嵌套评论判断结束 -->
                </li><!--匹配`自定义评论的代码结构`下面的li标签-->
            </ol><nav class="text-center m-t-lg m-b-lg" role="navigation"></nav>
            <!--如果允许评论，会出现评论框和个人信息的填写-->

            <div id="respond-post-899" class="respond comment-respond">

                <h4 id="reply-title" class="comment-reply-title m-t-lg m-b">发表评论                    <small class="cancel-comment-reply">
                        <a id="cancel-comment-reply-link" href="https://www.haorenka.cc/huashengriji.html#respond-post-899" rel="nofollow" style="display:none" onclick="return TypechoComment.cancelReply();">取消回复</a>                    </small>
                </h4>
                <form id="comment_form" method="post" action="https://www.haorenka.cc/huashengriji.html/comment"  class="comment-form" role="form">
                    <div class="comment-form-comment form-group">
                        <label for="comment">评论                            <span class="required text-danger">*</span></label>
                        <textarea id="comment" class="textarea form-control OwO-textarea" name="text" rows="5" placeholder="说点什么吧……" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                        <div class="OwO"></div>
                        <div class="secret_comment" id="secret_comment" data-toggle="tooltip"
                             data-original-title="开启该功能，您的评论仅作者和评论双方可见">
                            <label class="secret_comment_label control-label">私密评论</label>
                            <div class="secret_comment_check">
                                <label class="i-switch i-switch-sm bg-dark m-b-ss m-r">
                                    <input type="checkbox" id="secret_comment_checkbox">
                                    <i></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--判断是否登录-->
                    <div id="author_info" class="row row-sm">
                        <div class="comment-form-author form-group col-sm-6 col-md-4">
                            <label for="author">名称                                    <span class="required text-danger">*</span></label>
                            <div>
                                <img class="author-avatar" src="https://cdn.v2ex.com/gravatar/d41d8cd98f00b204e9800998ecf8427e?s=65&r=G&d=" nogallery/>
                                <input id="author" class="form-control" name="author" type="text" value="" maxlength="245" placeholder="姓名或昵称">
                            </div>
                        </div>

                        <div class="comment-form-email form-group col-sm-6 col-md-4">
                            <label for="email">邮箱                                    <span class="required text-danger">*</span>
                            </label>
                            <input type="text" name="mail" id="mail" class="form-control" placeholder="邮箱 (必填,将保密)" value="" />
                            <input type="hidden" name="receiveMail" id="receiveMail" value="yes" />
                        </div>

                        <div class="comment-form-url form-group col-sm-12 col-md-4">
                            <label for="url">地址</label>
                            <input id="url" class="form-control" name="url" type="url" value="" maxlength="200" placeholder="网站或博客"></div>
                    </div>
                    <!--提交按钮-->
                    <div class="form-group">
                        <button type="submit" name="submit" id="submit" class="submit btn btn-success padder-lg">
                            <span class="text">发表评论</span>
                            <span class="text-active">提交中...</span>
                        </button>
                        <i class="animate-spin fontello fontello-spinner hide" id="spin"></i>
                        <input type="hidden" name="comment_post_ID" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent">
                    </div>
                </form>
            </div>

        </div>
            @endif


    </div>
</div>
{{--右侧热门文章及标签云--}}
@include('home.right')