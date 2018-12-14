<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
</fieldset>
<div class="layui-row layui-col-space10">

    <div class="layui-col-md2"></div>

    <div class="layui-col-md8 layui-form">
        @include('flash::message')
        <form class="layui-form" action="{{ route('labels.store') }}" method="post" id="formLabelCreate">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label class="layui-form-label">标签名</label>
                <div class="layui-input-block">
                    <input type="text" name="label_name" required  lay-verify="required" placeholder="请输入新标签" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">描述</label>
                <div class="layui-input-block">
                    <textarea name="desc" placeholder="请输入标签描述" class="layui-textarea"></textarea>
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

</script>