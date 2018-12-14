
<div class="layui-row layui-col-space10">

    <div class="layui-col-md2"></div>

    <div class="layui-col-md8 layui-form">
        {{--<form class="layui-form" action="{{ route('labels.store') }}" method="post" id="formLabel">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="layui-form-item">--}}
                {{--<label class="layui-form-label">输入框</label>--}}
                {{--<div class="layui-input-block">--}}
                    {{--<input type="text" name="label_name" required  lay-verify="required" placeholder="请输入新标签" autocomplete="off" class="layui-input">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="layui-form-item layui-form-text">--}}
                {{--<label class="layui-form-label">文本域</label>--}}
                {{--<div class="layui-input-block">--}}
                    {{--<textarea name="desc" placeholder="请输入标签描述" class="layui-textarea"></textarea>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="layui-form-item">--}}
                {{--<div class="layui-input-block">--}}
                    {{--<button class="layui-btn" lay-submit lay-filter="formDemo" type="button">立即提交</button>--}}
                    {{--<button type="reset" class="layui-btn layui-btn-primary">重置</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}

        <form id="searchForm"  action="{{ route('labels.store') }}" method="post" class="breadcrumb form-search">
            {{ csrf_field() }}
            <label>表单提交测试-参数：</label> <input id="organId" name="label_name" maxlength="32" class="input-medium"/>
            <label>表单提交测试-参数：</label> <input id="" name="desc" maxlength="32" class="input-medium"/>

            <label>表单提交测试-参数：</label>
            {{--<input type="button" class="btn btn-primary" onclick="test_submit()" value="查询button"/> --}}
            <input id="dsubmit" class="btn btn-primary" type="submit" value="查询submit"/>
        </form>
    </div>
    <div class="layui-col-md2">
        1/6
    </div>
</div>


<script>
//    layui.use('form', function(){
//        var form = layui.form;
//        //监听提交
//        form.on('submit(formDemo)', function(data){
////            layer.msg(JSON.stringify(data.field));
//            //这或许可以ajax提交
//            return true;
//        });
//
//
//    });
$(document).on('submit', 'searchForm', function(event) {
    $.pjax.submit(event, '#content-main')
});


    $(document).on('submit', '#formLabel', function(event) {
        console.log('formlabel');
//        $.pjax.submit(event, '#content-main');

    })

</script>