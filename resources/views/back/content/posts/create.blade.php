{{--<link href="http://local.blog.bestcyt.cn/plugin/layui/css/layui.css" rel="stylesheet">--}}
<div class="layui-row layui-col-space10">

    <div class="layui-col-md1"></div>

    <div class="layui-col-md10">
        <form class="layui-form" action="{{ route('posts.store') }}" method="post" id="formPostCreate">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-block">
                    <input type="text" name="post_name" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">简述</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入文章简述" class="layui-textarea" name="post_desc"></textarea>
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">内容</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入文章简述" class="layui-textarea" name="info"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">分类选择</label>
                <div class="layui-input-block">
                    @foreach($sorts as $sort)
                        <input type="radio" name="sorts" value="{{ $sort['id'] }}" title="{{ $sort['sort_name'] }}">
                    @endforeach
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">标签选择</label>
                <div class="layui-input-block">
                    @foreach($labels as $label)
                        <input type="checkbox" name="labels[{{ $label['id'] }}]" title="{{ $label['label_name'] }}" >
                    @endforeach
                </div>
            </div>
            <div class="layui-form-item ">
                <div class="layui-inline">
                    <label class="layui-form-label">是否发布</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="state" lay-skin="switch" lay-text="ON|OFF">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">是否评论</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="is_comment" lay-skin="switch" lay-text="ON|OFF">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">是否置顶</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="is_top" lay-skin="switch" lay-text="ON|OFF">
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo" type="submit">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
    <div class="layui-col-md1">
    </div>
</div>

<script>
    $(function () {
        layui.use('form', function(){
            var  form = layui.form;
            form.render();
        });


    })
</script>