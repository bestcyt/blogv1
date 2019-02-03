{{--<link href="http://local.blog.bestcyt.cn/plugin/layui/css/layui.css" rel="stylesheet">--}}
<div class="layui-row">

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
                <label class="layui-form-label">封面图</label>
                <input type="hidden" name="image" value="" id="image">
                <div class="layui-input-block">
                    <button type="button" class="layui-btn" id="test1">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                    </button>
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">富文本</label>
                <div class="layui-input-block">
                    <textarea id="demo" name="info" style="display: none;"></textarea>
                    <script src="{{ asset('admin/vendors/layui/layui.js') }}"></script>
                    <script>
                        layui.use('layedit', function(){
                            var layedit = layui.layedit;
                            layedit.set({
                                uploadImage: {
                                    url: '{{ url('/back/image') }}' //接口url
                                    ,type: 'post' //默认post
                                }
                            });
                            layedit.build('demo',{
                                height: 300
                            }); //建立编辑器
                        });
                    </script>
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

        //封面图片上传
        layui.use('upload', function(){
            var upload = layui.upload;

            //执行实例
            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: '/back/image' //上传接口
                ,before: function(obj){ //obj参数包含的信息，跟 choose回调完全一致，可参见上文。
                    layer.load(); //上传loading
                }
                ,done: function(res){
                    //上传完毕回调
                    layer.closeAll('loading'); //关闭loading
                    if(res.code == 0){
                        $('#test1').html('<i class="layui-icon">&#xe67c;</i>上传成功');
                        $('#image').val(res.data.src);
                    }else {
                        $('#test1').html('<i class="layui-icon">&#xe67c;</i>上传失败');
                    }
                }
                ,error: function(){
                    //请求异常回调
                    layer.closeAll('loading'); //关闭loading
                }
            });
        });

    })
</script>