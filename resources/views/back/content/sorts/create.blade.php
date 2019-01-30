<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
</fieldset>
<div class="layui-row layui-col-space10">

    <div class="layui-col-md2"></div>

    <div class="layui-col-md8 layui-form">
        @include('flash::message')
        <form class="layui-form" action="{{ route('sorts.store') }}" method="post" id="formSortCreate">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label class="layui-form-label">分类名</label>
                <div class="layui-input-block">
                    <input type="text" name="sort_name" required  lay-verify="required" placeholder="请输入新分类" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">描述</label>
                <div class="layui-input-block">
                    <textarea name="desc" placeholder="请输入分类描述" class="layui-textarea"></textarea>
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
    $(function () {
        layui.use('form', function(){
            var form = layui.form;
            //更新表单渲染
            form.render();
        });

    })
</script>
