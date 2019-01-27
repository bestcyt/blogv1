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
            <span class="hidden-folded m-l-xs">bestcyt-Blog</span>
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
                  <button  type="button" onclick="alert('敬请期待')" class="transparent btn btn-sm"><i class="fontello fontello-search"></i></button>

                    </span>
                </div>
            </div>
        </form>
        <a href="" style="display: none" id="searchUrl"></a>
        <!-- / search form -->
        <ul class="nav navbar-nav navbar-right">

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