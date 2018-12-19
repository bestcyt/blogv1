<div class="layui-row layui-col-space10">

    <div class="layui-col-md2"></div>

    <div class="layui-col-md8 layui-form">
        <form class="layui-form" action="{{ route('posts.store') }}" method="post">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-block">
                    <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">简述</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入文章简述" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">是否发布</label>
                <div class="layui-input-block">
                    <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF">
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
    <div class="layui-col-md2">
    </div>
</div>


<script>
//    layui.use(['form', 'layedit', 'laydate'], function(){
//        var form = layui.form
//            ,layer = layui.layer
//            ,layedit = layui.layedit
//            ,laydate = layui.laydate;
//
//        //日期
//        laydate.render({
//            elem: '#date'
//        });
//        laydate.render({
//            elem: '#date1'
//        });
//
//        //创建一个编辑器
//        var editIndex = layedit.build('LAY_demo_editor');
//
//        //自定义验证规则
//        form.verify({
//            title: function(value){
//                if(value.length < 5){
//                    return '标题至少得5个字符啊';
//                }
//            }
//            ,pass: [
//                /^[\S]{6,12}$/
//                ,'密码必须6到12位，且不能出现空格'
//            ]
//            ,content: function(value){
//                layedit.sync(editIndex);
//            }
//        });
//
//        //监听指定开关
//        form.on('switch(switchTest)', function(data){
//            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
//                offset: '6px'
//            });
//            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
//        });
//
//        //监听提交
//        form.on('submit(demo1)', function(data){
//            layer.alert(JSON.stringify(data.field), {
//                title: '最终的提交信息'
//            })
//            return false;
//        });
//
//        //表单初始赋值
//        form.val('example', {
//            "username": "贤心" // "name": "value"
//            ,"password": "123456"
//            ,"interest": 1
//            ,"like[write]": true //复选框选中状态
//            ,"close": true //开关状态
//            ,"sex": "女"
//            ,"desc": "我爱 layui"
//        })
//
//
//    });
//    layui.use('layedit', function(){
//        var layedit = layui.layedit;
//        layedit.build('demo'); //建立编辑器
//    });
</script>