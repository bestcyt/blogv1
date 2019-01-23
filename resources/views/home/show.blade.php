{{--pjax请求则返回一部分内容即可--}}
@if(isset($isPjax) && $isPjax == true)
        <!--loading animate-->
        <div id="loading" class="butterbar active hide">
            <span class="bar"></span>
        </div>	<!-- / aside -->
        <!-- <div id="content" class="app-content"> -->
        <a class="off-screen-toggle hide"></a>
        <main class="app-content-body ">
            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <!--文章-->
                <div class="col center-part">
                    <!--生成分享图片必须的HTML结构-->
                    <style>
                        .mdx-si-head .cover{
                            object-fit: cover;
                            width: 100%;
                            height: 100%
                        }
                    </style>
                    <div class="mdx-share-img" id="mdx-share-img"><div class="mdx-si-head" style="background-image:url(https://www.haorenka.cc/usr/themes/handsome/assets/img/video.jpg)"><p>一个好人</p><span>花生日记：真正0成本躺着赚钱</span></div><div
                                class="mdx-si-sum">本文主要适合学生党和想赚点外快的上班族。这个项目是一个朋友推荐的，我观望了大概1年，没办法，胆子小，网上骗术和一些...</div><div class="mdx-si-box"><span>扫描右侧二维码阅读全文</span><div class="mdx-si-qr" id="mdx-si-qr"><img
                                        src="https://www.haorenka.cc/usr/themes/handsome/libs/GetCode.php?type=url&content=https://www.haorenka.cc/huashengriji.html"></div></div><div class="mdx-si-time">04<br><span
                                    class="mdx-si-time-2">2019/01</span></div></div>    <!--标题下的一排功能信息图标：作者/时间/浏览次数/评论数/分类-->

                    <header id="small_widgets" class="bg-light lter b-b wrapper-md">
                        <h1 class="entry-title m-n font-thin h3 text-black l-h">花生日记：真正0成本躺着赚钱<a class="plus-font-size" data-toggle="tooltip" data-original-title="点击改变文章字体大小"><i class="glyphicon glyphicon-text-size
" aria-hidden="true"></i></a></h1>       <!--文章标题下面的小部件-->
                        <ul  class="entry-meta text-muted list-inline m-b-none small
             post-head-icon">
                            <!--作者-->
                            <li class="meta-author"><i class="fontello fontello-user" aria-hidden="true"></i><span class="sr-only">博主：</span> <a class="meta-value" href="https://www.haorenka.cc/author/1/" rel="author"> 一个好人</a></li>
                            <!--发布时间-->
                            <li class="meta-date"><i class="fontello fontello-clock-o" aria-hidden="true"></i>&nbsp;<span class="sr-only">发布时间：</span><time class="meta-value">2019 年 01 月 04 日</time></li>
                            <!--浏览数-->
                            <li class="meta-views"><i class="fontello fontello-eye" aria-hidden="true"></i>&nbsp;<span class="meta-value">11270&nbsp;次浏览</span></li>
                            <!--评论数-->
                            <li class="meta-comments"><i class="iconfont icon-comments-o" aria-hidden="true"></i>&nbsp;<a
                                        class="meta-value" href="#comments">&nbsp;6 条评论</a></li>
                            <!--文字数目-->
                            <li class="meta-word"><i class="fontello fontello-pencil"></i>&nbsp;<span class="meta-value">2150&nbsp;字数</span></li>
                            <!--分类-->
                            <li class="meta-categories"><i class="fontello fontello-tags" aria-hidden="true"></i> <span class="sr-only">分类：</span> <span class="meta-value"><a href="https://www.haorenka.cc/laosiji/">老司机</a></span></li>
                        </ul>
                    </header>
                    <div class="wrapper-md" id="post-panel">
                        <ol class="breadcrumb bg-white b-a" itemscope=""><li>
                                <a href="https://www.haorenka.cc/" itemprop="breadcrumb" title="返回首页" data-toggle="tooltip"><i class="fontello fontello-home" aria-hidden="true"></i>&nbsp;首页</a>
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
                                <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=https://www.haorenka.cc/huashengriji.html&title=花生日记：真正0成本躺着赚钱&site=https://www.haorenka.cc/" itemprop="breadcrumb" target="_blank" title="" data-toggle="tooltip" data-original-title="分享到QQ空间" onclick="window.open(this.href, 'qzone-share', 'width=550,height=335');return false;"><i style ="font-size:15px;" class="iconfont icon-qzone" aria-hidden="true"></i></a>
                                <a href="http://service.weibo.com/share/share.php?url=https://www.haorenka.cc/huashengriji.html&title=花生日记：真正0成本躺着赚钱" target="_blank" itemprop="breadcrumb" title="" data-toggle="tooltip" data-original-title="分享到微博" onclick="window.open(this.href, 'weibo-share', 'width=550,height=335');return false;"><i style ="font-size:15px;" class="fontello fontello-weibo" aria-hidden="true"></i></a>   <a id="generateShareImg" itemprop="breadcrumb" title="" data-toggle="tooltip" data-original-title="生成分享图"><i style ="font-size:13px;" class="fontello fontello-camera" aria-hidden="true"></i></a></div></ol>       <!--博客文章样式 begin with .blog-post-->
                        <div id="postpage" class="blog-post">
                            <article class="panel">
                                <!--文章页面的头图-->
                                <!--文章内容-->
                                <div id="post-content" class="wrapper-lg">
                                    <div class="entry-content l-h-2x">
                                        <p>本文主要适合学生党和想赚点外快的上班族。</p><p>这个项目是一个朋友推荐的，我观望了大概1年，没办法，胆子小，网上骗术和一些风险项目实在是太多了，看到朋友确实赚钱了，才分享出来。</p><p>很多新手初步了解到淘客，都担心自己入场太晚了，分不到羹。这有点高看你自己的了，偌大的市场只要你用点心总会有一席之地的，研究好产品、了解趋势、敢于尝试，迅速占坑！</p><p>网赚圈子里有一句经典的话 “<strong>想要赚钱，你先找到会赚钱的人，然后每天去关注他，研究它的方法技巧，然后复制、粘贴、优化</strong>“！</p><p>网上有很多什么日赚500几千的，说实话，我是不信，花生日记好好做的话一个月一两千块钱是没有问题的，其实做什么都一样，不要太懒，好好推广，推广做的好了，以后才可以躺着赚钱。</p><p>在你还在想的时候，人家已经开始做了，这就是你和人家之间的区别！干就完了，说的再退一步来说，即使失败了，至少你获得了网赚的经验，根本就是零成本的事，你又损失什么了呢？</p><p><strong>提示：不要相信任何需要付费的网赚项目，绝大部分都是交的智商税。</strong></p><p>本文主要是对花生日记做一个简单的介绍。</p><h2>什么是花生日记？</h2><p>官方简介：花生日记是淘宝天猫优惠券集中营，是学生党、上班族、家庭主妇、宝妈、自由职业者等省钱首选，天天都能让你过双11的省钱还能赚钱的APP....</p><p>其实就是一个购物返利、分享给其他人赚取佣金的APP。</p><p>经常接触网络的人都知道，淘宝客在几年前非常火爆，很多牛人可以做到月收入百万以上，但是因为阿里的系统总是升级，导致很多推广方式和链接都会失效。直到花生日记的出现，打破了这个僵局。</p><h2>通过花生日记赚的是谁的钱</h2><p>淘宝商家为了冲销量，打造爆款，都会发布一些隐藏的优惠券和推广佣金。</p><p>简单来说钱都是需要推广的淘宝天猫商家付的。</p><h2>怎样通过花生日记赚钱</h2><p>花生日记本身就是一个淘客APP，低价购物的这么一个平台，自买可以省钱，推广可以赚推广佣金。</p><p>1、通过花生日记领券后在购买淘宝天猫商品，省到及赚到。</p><p>2、把有优惠券的商品分享给其他人购买，即可赚取佣金，没有人会拒绝省钱的，除非家里有矿。</p><p>3、分享自己的花生日记邀请码给其他人注册，邀请者购买，即可赚取佣金。</p><p><a href="https://www.haorenka.cc/go/aHR0cHM6Ly90LmNuL0VHTVJxdkc=" target="_blank" >20种快速招粉丝方法分享，让你每日暴增100粉丝！</a></p><p>当你和你的代理商分享每卖出一单，都可以获得约10~50%的佣金，另外你的代理商每卖出一单，你就可以获得5%的提成奖励，这意味着你的代理越多，你后面躺赚的越多！</p><p>有些人可能会想到，这不是拉人头吗？怎么跟传销一样，这个项目，是不需要任何投资的，而且消费的地方是在淘宝和天猫这些大平台，你平时买东西，多少钱就是多少钱，没有一分钱佣金，那么我们用了花生日记以后，平均每消费1000块钱，就有50-300不等的佣金，我们何乐而不为呢？</p><p>现在这个时代，每个月在淘宝花个千八百的太正常不过了。</p><p>如果你的朋友圈有500个人，推荐成功300人下载花生日记，不管是成为你的代理还是你的客户，他们每月只需要在这上面消费300元，一个月消费总金额是90000，按我们后台佣金比例，如果他们都是消费者你一个月可以赚取9000元，如果他们都是代理，你一个月可以赚取1800元。</p><h2>花生日记小总结</h2><p>花生日记适合推荐给什么人使用？<br>1、学生党，购物省钱和赚取零花钱。<br>2、上班族，上班挣得太少，来点外快。<br>3、休产假或其他原因在家的女性，女性本来就喜欢买买买，再加上女人都受不了优惠券啊打折啊，很适合。</p><p>通过花生日记推广，收入只会一个月比一个月多！</p><h2>花生日记怎样注册下载</h2><p>花生日记可以通过各大应用商店搜索下载，或者点下面下载链接和扫下方二维码。</p><p><strong>花生日记是通过邀请制注册的，不填写邀请码无法注册。</strong></p><p>通过本文邀请码注册，注册成功即可免费成为<strong>超级会员</strong>。</p><p>邀请码：<strong>IHTKMWO</strong></p><p>官方下载：<a href="https://www.haorenka.cc/go/aHR0cDovL2EuYXBwLnFxLmNvbS9vL3NpbXBsZS5qc3A|cGtnbmFtZT1jb20uamYubGtyaiZjb2RlPTI2ODA0NzAz" target="_blank" >花生日记</a></p><p>二维码：</p><p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=" data-original="https://wx1.sinaimg.cn/large/007oPOSbly1fyuna4aa54j3078078gli.jpg" alt="花生日记" title="花生日记" /></p><h2>使用花生日记领优惠券省钱</h2><p><a href="https://www.haorenka.cc/20190110tmall.html" target="_blank" >【天猫年货节888元红包】速领</a></p><p>淘宝选好宝贝→长按宝贝标题复制→打开花生日记→自动识别领券→返回淘宝领券</p><p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=" data-original="https://ws3.sinaimg.cn/large/005BYqpgly1fyzd19ejong30b40kdtkg.jpg" alt="花生日记：真正0成本躺着赚钱" title="花生日记：真正0成本躺着赚钱" /></p><h2>使用花生日记赚钱</h2><p><a href="https://www.haorenka.cc/go/aHR0cHM6Ly90LmNuL0VHTVJxdkc=" target="_blank" >20种快速招粉丝方法分享，让你每日暴增100粉丝！</a></p>          </div>
                                    <!--文章下载面板-->
                                    <!--/文章下载面板-->
                                    <!--文章页脚的广告位-->
                                    <strong style="color: #FD6A5E;">【天猫年货节888元红包】</strong><a target="_blank" href="https://www.haorenka.cc/20190110tmall.html" style="border-bottom: solid 2px #eee;">速领</a>                          <!--文章的页脚部件：打赏和其他信息的输出-->

                                    <div class="show-foot">
                                        <div class="notebook">
                                            <i class="fontello fontello-clock-o"></i>
                                            <span>最后修改：2019 年 01 月 20 日 07 : 53  PM</span>
                                        </div>
                                        <div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并注明转载地址"><span>© 著作权归作者所有</span>
                                        </div>
                                    </div>
                                    <div class="post-like"><div href="javascript:;" class="fa-thumbs-up" data-pid="899"></div><div id="zan_text">1638</div></div>             <!--/文章的页脚部件：打赏和其他信息的输出-->
                                </div>
                            </article>
                        </div>
                        <!--上一篇&下一篇-->
                        <nav class="m-t-lg m-b-lg">
                            <ul class="pager">
                                <li class="next"> <a href="https://www.haorenka.cc/20190103.html" title="2019年：谁有好玩的twitter推荐呢？" data-toggle="tooltip"> 下一篇 </a></li>   <li class="previous"> <a href="https://www.haorenka.cc/tiktok-jp.html" title="抖音日版：换个口味的妹子继续看" data-toggle="tooltip"> 上一篇 </a></li>
                            </ul>
                        </nav>
                        <!--评论-->

                        <style>
                            textarea#comment{
                                background-image: url('https://i.loli.net/2018/10/27/5bd3e23d8dd25.png');
                                background-color: #fafdff;
                            }
                        </style>


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


                    </div>
                </div>
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
                                        <li class="list-group-item">
                                            <a href="https://www.haorenka.cc/prshe-320g.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/prshe-320g.html" title="PR社小姐姐大合集 全都是可爱的小姐姐【320G】"> PR社小姐姐大合集 全都是可爱的小姐姐【320G】 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">91807</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/meizi1023.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/meizi1023.html" title="一般看见这种类型黑色内裤，我直接x了再说"> 一般看见这种类型黑色内裤，我直接x了再说 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">59835</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/1000g.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/1000g.html" title="你该加块硬盘了，1000G+美女福利资源"> 你该加块硬盘了，1000G+美女福利资源 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">49565</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/gif-5.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/gif-5.html" title="好人卡 精选GIF出处 第5期"> 好人卡 精选GIF出处 第5期 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">46443</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/taobaoneiyimaijiaxiu.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/taobaoneiyimaijiaxiu.html" title="最牛逼最极品的淘宝内衣买家秀大约13000张"> 最牛逼最极品的淘宝内衣买家秀大约13000张 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">45704</span>
                    </span>
                                                </small></div></li>         </ul>
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
                        <!--在文章页面输出目录，在其他页面输出标签云-->
                        <section id="tag_toc" class="widget widget_categories wrapper-md clear">
                            <h3 class="widget-title m-t-none text-md">文章目录</h3>
                            <div class="tags l-h-2x">
                                <div id="toc"></div>
                            </div>
                        </section>
                    </div>
                </aside>
                <!--文章右侧边栏结束-->
            </div>
        </main>

        <!--文章点赞开始-->
        <script type="text/javascript" src="https://www.haorenka.cc/usr/plugins/Like/js/jquery.fs.macaroon.js"></script>
        <script>
            function remcls(){$('.fa-thumbs-up').removeClass("heartAnimation");}
            function addcls(){$('.fa-thumbs-up').addClass("heartAnimation");    }
            $(".fa-thumbs-up").on("click", function(){
                var th = $(this);
                var id = th.attr('data-pid');

                if (!id || !/^\d{1,10}$/.test(id)) return;

                $.post('https://www.haorenka.cc/action/like?up',{
                    cid:id
                },function(data){
                    var zan = $(".post-like").find('#zan_text').text();
                    $(".post-like").find('#zan_text').text(parseInt(zan) + 1);
                    $('.fa-thumbs-up').css("background-position","")
                    var wwin=$('.fa-thumbs-up').attr("class");
                    if(wwin === 'fa-thumbs-up'){
                        $('.fa-thumbs-up').addClass("heartAnimation");
                        tui=setTimeout("remcls()",800)
                    }else{
                        remcls()
                        tuiw=setTimeout("addcls()",100)
                    }
                },'json');
            });

        </script>
        <!--文章点赞结束-->
@else
    {{--非pjax请求，比如刷新，返回全部网页--}}
    @extends('home.base')
    @section('content')
        <!--loading animate-->
        <div id="loading" class="butterbar active hide">
            <span class="bar"></span>
        </div>	<!-- / aside -->
        <!-- <div id="content" class="app-content"> -->
        <a class="off-screen-toggle hide"></a>
        <main class="app-content-body ">
            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <!--文章-->
                <div class="col center-part">
                    <!--生成分享图片必须的HTML结构-->
                    <style>
                        .mdx-si-head .cover{
                            object-fit: cover;
                            width: 100%;
                            height: 100%
                        }
                    </style>
                    <div class="mdx-share-img" id="mdx-share-img"><div class="mdx-si-head" style="background-image:url(https://www.haorenka.cc/usr/themes/handsome/assets/img/video.jpg)"><p>一个好人</p><span>花生日记：真正0成本躺着赚钱</span></div><div
                                class="mdx-si-sum">本文主要适合学生党和想赚点外快的上班族。这个项目是一个朋友推荐的，我观望了大概1年，没办法，胆子小，网上骗术和一些...</div><div class="mdx-si-box"><span>扫描右侧二维码阅读全文</span><div class="mdx-si-qr" id="mdx-si-qr"><img
                                        src="https://www.haorenka.cc/usr/themes/handsome/libs/GetCode.php?type=url&content=https://www.haorenka.cc/huashengriji.html"></div></div><div class="mdx-si-time">04<br><span
                                    class="mdx-si-time-2">2019/01</span></div></div>    <!--标题下的一排功能信息图标：作者/时间/浏览次数/评论数/分类-->

                    <header id="small_widgets" class="bg-light lter b-b wrapper-md">
                        <h1 class="entry-title m-n font-thin h3 text-black l-h">花生日记：真正0成本躺着赚钱<a class="plus-font-size" data-toggle="tooltip" data-original-title="点击改变文章字体大小"><i class="glyphicon glyphicon-text-size
" aria-hidden="true"></i></a></h1>       <!--文章标题下面的小部件-->
                        <ul  class="entry-meta text-muted list-inline m-b-none small
             post-head-icon">
                            <!--作者-->
                            <li class="meta-author"><i class="fontello fontello-user" aria-hidden="true"></i><span class="sr-only">博主：</span> <a class="meta-value" href="https://www.haorenka.cc/author/1/" rel="author"> 一个好人</a></li>
                            <!--发布时间-->
                            <li class="meta-date"><i class="fontello fontello-clock-o" aria-hidden="true"></i>&nbsp;<span class="sr-only">发布时间：</span><time class="meta-value">2019 年 01 月 04 日</time></li>
                            <!--浏览数-->
                            <li class="meta-views"><i class="fontello fontello-eye" aria-hidden="true"></i>&nbsp;<span class="meta-value">11270&nbsp;次浏览</span></li>
                            <!--评论数-->
                            <li class="meta-comments"><i class="iconfont icon-comments-o" aria-hidden="true"></i>&nbsp;<a
                                        class="meta-value" href="#comments">&nbsp;6 条评论</a></li>
                            <!--文字数目-->
                            <li class="meta-word"><i class="fontello fontello-pencil"></i>&nbsp;<span class="meta-value">2150&nbsp;字数</span></li>
                            <!--分类-->
                            <li class="meta-categories"><i class="fontello fontello-tags" aria-hidden="true"></i> <span class="sr-only">分类：</span> <span class="meta-value"><a href="https://www.haorenka.cc/laosiji/">老司机</a></span></li>
                        </ul>
                    </header>
                    <div class="wrapper-md" id="post-panel">
                        <ol class="breadcrumb bg-white b-a" itemscope=""><li>
                                <a href="https://www.haorenka.cc/" itemprop="breadcrumb" title="返回首页" data-toggle="tooltip"><i class="fontello fontello-home" aria-hidden="true"></i>&nbsp;首页</a>
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
                                <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=https://www.haorenka.cc/huashengriji.html&title=花生日记：真正0成本躺着赚钱&site=https://www.haorenka.cc/" itemprop="breadcrumb" target="_blank" title="" data-toggle="tooltip" data-original-title="分享到QQ空间" onclick="window.open(this.href, 'qzone-share', 'width=550,height=335');return false;"><i style ="font-size:15px;" class="iconfont icon-qzone" aria-hidden="true"></i></a>
                                <a href="http://service.weibo.com/share/share.php?url=https://www.haorenka.cc/huashengriji.html&title=花生日记：真正0成本躺着赚钱" target="_blank" itemprop="breadcrumb" title="" data-toggle="tooltip" data-original-title="分享到微博" onclick="window.open(this.href, 'weibo-share', 'width=550,height=335');return false;"><i style ="font-size:15px;" class="fontello fontello-weibo" aria-hidden="true"></i></a>   <a id="generateShareImg" itemprop="breadcrumb" title="" data-toggle="tooltip" data-original-title="生成分享图"><i style ="font-size:13px;" class="fontello fontello-camera" aria-hidden="true"></i></a></div></ol>       <!--博客文章样式 begin with .blog-post-->
                        <div id="postpage" class="blog-post">
                            <article class="panel">
                                <!--文章页面的头图-->
                                <!--文章内容-->
                                <div id="post-content" class="wrapper-lg">
                                    <div class="entry-content l-h-2x">
                                        <p>本文主要适合学生党和想赚点外快的上班族。</p><p>这个项目是一个朋友推荐的，我观望了大概1年，没办法，胆子小，网上骗术和一些风险项目实在是太多了，看到朋友确实赚钱了，才分享出来。</p><p>很多新手初步了解到淘客，都担心自己入场太晚了，分不到羹。这有点高看你自己的了，偌大的市场只要你用点心总会有一席之地的，研究好产品、了解趋势、敢于尝试，迅速占坑！</p><p>网赚圈子里有一句经典的话 “<strong>想要赚钱，你先找到会赚钱的人，然后每天去关注他，研究它的方法技巧，然后复制、粘贴、优化</strong>“！</p><p>网上有很多什么日赚500几千的，说实话，我是不信，花生日记好好做的话一个月一两千块钱是没有问题的，其实做什么都一样，不要太懒，好好推广，推广做的好了，以后才可以躺着赚钱。</p><p>在你还在想的时候，人家已经开始做了，这就是你和人家之间的区别！干就完了，说的再退一步来说，即使失败了，至少你获得了网赚的经验，根本就是零成本的事，你又损失什么了呢？</p><p><strong>提示：不要相信任何需要付费的网赚项目，绝大部分都是交的智商税。</strong></p><p>本文主要是对花生日记做一个简单的介绍。</p><h2>什么是花生日记？</h2><p>官方简介：花生日记是淘宝天猫优惠券集中营，是学生党、上班族、家庭主妇、宝妈、自由职业者等省钱首选，天天都能让你过双11的省钱还能赚钱的APP....</p><p>其实就是一个购物返利、分享给其他人赚取佣金的APP。</p><p>经常接触网络的人都知道，淘宝客在几年前非常火爆，很多牛人可以做到月收入百万以上，但是因为阿里的系统总是升级，导致很多推广方式和链接都会失效。直到花生日记的出现，打破了这个僵局。</p><h2>通过花生日记赚的是谁的钱</h2><p>淘宝商家为了冲销量，打造爆款，都会发布一些隐藏的优惠券和推广佣金。</p><p>简单来说钱都是需要推广的淘宝天猫商家付的。</p><h2>怎样通过花生日记赚钱</h2><p>花生日记本身就是一个淘客APP，低价购物的这么一个平台，自买可以省钱，推广可以赚推广佣金。</p><p>1、通过花生日记领券后在购买淘宝天猫商品，省到及赚到。</p><p>2、把有优惠券的商品分享给其他人购买，即可赚取佣金，没有人会拒绝省钱的，除非家里有矿。</p><p>3、分享自己的花生日记邀请码给其他人注册，邀请者购买，即可赚取佣金。</p><p><a href="https://www.haorenka.cc/go/aHR0cHM6Ly90LmNuL0VHTVJxdkc=" target="_blank" >20种快速招粉丝方法分享，让你每日暴增100粉丝！</a></p><p>当你和你的代理商分享每卖出一单，都可以获得约10~50%的佣金，另外你的代理商每卖出一单，你就可以获得5%的提成奖励，这意味着你的代理越多，你后面躺赚的越多！</p><p>有些人可能会想到，这不是拉人头吗？怎么跟传销一样，这个项目，是不需要任何投资的，而且消费的地方是在淘宝和天猫这些大平台，你平时买东西，多少钱就是多少钱，没有一分钱佣金，那么我们用了花生日记以后，平均每消费1000块钱，就有50-300不等的佣金，我们何乐而不为呢？</p><p>现在这个时代，每个月在淘宝花个千八百的太正常不过了。</p><p>如果你的朋友圈有500个人，推荐成功300人下载花生日记，不管是成为你的代理还是你的客户，他们每月只需要在这上面消费300元，一个月消费总金额是90000，按我们后台佣金比例，如果他们都是消费者你一个月可以赚取9000元，如果他们都是代理，你一个月可以赚取1800元。</p><h2>花生日记小总结</h2><p>花生日记适合推荐给什么人使用？<br>1、学生党，购物省钱和赚取零花钱。<br>2、上班族，上班挣得太少，来点外快。<br>3、休产假或其他原因在家的女性，女性本来就喜欢买买买，再加上女人都受不了优惠券啊打折啊，很适合。</p><p>通过花生日记推广，收入只会一个月比一个月多！</p><h2>花生日记怎样注册下载</h2><p>花生日记可以通过各大应用商店搜索下载，或者点下面下载链接和扫下方二维码。</p><p><strong>花生日记是通过邀请制注册的，不填写邀请码无法注册。</strong></p><p>通过本文邀请码注册，注册成功即可免费成为<strong>超级会员</strong>。</p><p>邀请码：<strong>IHTKMWO</strong></p><p>官方下载：<a href="https://www.haorenka.cc/go/aHR0cDovL2EuYXBwLnFxLmNvbS9vL3NpbXBsZS5qc3A|cGtnbmFtZT1jb20uamYubGtyaiZjb2RlPTI2ODA0NzAz" target="_blank" >花生日记</a></p><p>二维码：</p><p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=" data-original="https://wx1.sinaimg.cn/large/007oPOSbly1fyuna4aa54j3078078gli.jpg" alt="花生日记" title="花生日记" /></p><h2>使用花生日记领优惠券省钱</h2><p><a href="https://www.haorenka.cc/20190110tmall.html" target="_blank" >【天猫年货节888元红包】速领</a></p><p>淘宝选好宝贝→长按宝贝标题复制→打开花生日记→自动识别领券→返回淘宝领券</p><p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=" data-original="https://ws3.sinaimg.cn/large/005BYqpgly1fyzd19ejong30b40kdtkg.jpg" alt="花生日记：真正0成本躺着赚钱" title="花生日记：真正0成本躺着赚钱" /></p><h2>使用花生日记赚钱</h2><p><a href="https://www.haorenka.cc/go/aHR0cHM6Ly90LmNuL0VHTVJxdkc=" target="_blank" >20种快速招粉丝方法分享，让你每日暴增100粉丝！</a></p>          </div>
                                    <!--文章下载面板-->
                                    <!--/文章下载面板-->
                                    <!--文章页脚的广告位-->
                                    <strong style="color: #FD6A5E;">【天猫年货节888元红包】</strong><a target="_blank" href="https://www.haorenka.cc/20190110tmall.html" style="border-bottom: solid 2px #eee;">速领</a>                          <!--文章的页脚部件：打赏和其他信息的输出-->

                                    <div class="show-foot">
                                        <div class="notebook">
                                            <i class="fontello fontello-clock-o"></i>
                                            <span>最后修改：2019 年 01 月 20 日 07 : 53  PM</span>
                                        </div>
                                        <div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并注明转载地址"><span>© 著作权归作者所有</span>
                                        </div>
                                    </div>
                                    <div class="post-like"><div href="javascript:;" class="fa-thumbs-up" data-pid="899"></div><div id="zan_text">1638</div></div>             <!--/文章的页脚部件：打赏和其他信息的输出-->
                                </div>
                            </article>
                        </div>
                        <!--上一篇&下一篇-->
                        <nav class="m-t-lg m-b-lg">
                            <ul class="pager">
                                <li class="next"> <a href="https://www.haorenka.cc/20190103.html" title="2019年：谁有好玩的twitter推荐呢？" data-toggle="tooltip"> 下一篇 </a></li>   <li class="previous"> <a href="https://www.haorenka.cc/tiktok-jp.html" title="抖音日版：换个口味的妹子继续看" data-toggle="tooltip"> 上一篇 </a></li>
                            </ul>
                        </nav>
                        <!--评论-->

                        <style>
                            textarea#comment{
                                background-image: url('https://i.loli.net/2018/10/27/5bd3e23d8dd25.png');
                                background-color: #fafdff;
                            }
                        </style>


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


                    </div>
                </div>
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
                                        <li class="list-group-item">
                                            <a href="https://www.haorenka.cc/prshe-320g.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/prshe-320g.html" title="PR社小姐姐大合集 全都是可爱的小姐姐【320G】"> PR社小姐姐大合集 全都是可爱的小姐姐【320G】 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">91807</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/meizi1023.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/meizi1023.html" title="一般看见这种类型黑色内裤，我直接x了再说"> 一般看见这种类型黑色内裤，我直接x了再说 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">59835</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/1000g.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/1000g.html" title="你该加块硬盘了，1000G+美女福利资源"> 你该加块硬盘了，1000G+美女福利资源 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">49565</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/gif-5.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/gif-5.html" title="好人卡 精选GIF出处 第5期"> 好人卡 精选GIF出处 第5期 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">46443</span>
                    </span>
                                                </small></div></li><li class="list-group-item">
                                            <a href="https://www.haorenka.cc/taobaoneiyimaijiaxiu.html" class="pull-left thumb-sm m-r"></a>
                                            <div class="clear">
                                                <h4 class="h5 l-h"> <a href="https://www.haorenka.cc/taobaoneiyimaijiaxiu.html" title="最牛逼最极品的淘宝内衣买家秀大约13000张"> 最牛逼最极品的淘宝内衣买家秀大约13000张 </a></h4>
                                                <small class="text-muted post-head-icon"><span class="meta-date"> <i class="fontello fontello-eye" aria-hidden="true"></i> <span class="sr-only">浏览次数:</span> <span class="meta-value">45704</span>
                    </span>
                                                </small></div></li>         </ul>
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
                        <!--在文章页面输出目录，在其他页面输出标签云-->
                        <section id="tag_toc" class="widget widget_categories wrapper-md clear">
                            <h3 class="widget-title m-t-none text-md">文章目录</h3>
                            <div class="tags l-h-2x">
                                <div id="toc"></div>
                            </div>
                        </section>
                    </div>
                </aside>
                <!--文章右侧边栏结束-->
            </div>
        </main>

        <!--文章点赞开始-->
        <script type="text/javascript" src="https://www.haorenka.cc/usr/plugins/Like/js/jquery.fs.macaroon.js"></script>
        <script>
            function remcls(){$('.fa-thumbs-up').removeClass("heartAnimation");}
            function addcls(){$('.fa-thumbs-up').addClass("heartAnimation");    }
            $(".fa-thumbs-up").on("click", function(){
                var th = $(this);
                var id = th.attr('data-pid');

                if (!id || !/^\d{1,10}$/.test(id)) return;

                $.post('https://www.haorenka.cc/action/like?up',{
                    cid:id
                },function(data){
                    var zan = $(".post-like").find('#zan_text').text();
                    $(".post-like").find('#zan_text').text(parseInt(zan) + 1);
                    $('.fa-thumbs-up').css("background-position","")
                    var wwin=$('.fa-thumbs-up').attr("class");
                    if(wwin === 'fa-thumbs-up'){
                        $('.fa-thumbs-up').addClass("heartAnimation");
                        tui=setTimeout("remcls()",800)
                    }else{
                        remcls()
                        tuiw=setTimeout("addcls()",100)
                    }
                },'json');
            });

        </script>
        <!--文章点赞结束-->
    @endsection
@endif
