@include('flash::message')


<table class="layui-hide" id="sort-list"  lay-filter="sort-list"></table>

<script type="text/html" id="switchTpl">
    <input type="checkbox" name="state" value="@{{ d.id }}" lay-skin="switch" lay-text="开|关" lay-filter="state"  @{{ d.state == 1 ? 'checked' : '' }}>
</script>

<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    $(function () {
        layui.use('table', function(){
            var table = layui.table,form = layui.form;;

            //table初始化数据
            table.render({
                elem: '#sort-list'
                ,url:'/back/getSortsJson'
                ,cellMinWidth: 100 //全局定义常规单元格的最小宽度，layui 2.2.1 新增
                ,cols: [[
                    {field:'id', width:50, title: 'ID', sort: true }
                    ,{field:'parent_id', width:50, title: 'ID', sort: true }
                    ,{field:'sort_name', width:130, title: '分类名称', edit: 'text'}
                    ,{field:'desc', width:150, title: '描述', sort: true, edit: 'text'}
                    ,{field:'created_at', width:180, title: '创建时间', sort: true}
                    ,{field:'updated_at', width:180, title: '更新时间', sort: true}
                    ,{field:'state', title:'状态', width:100, templet: '#switchTpl', unresize: true}
                ]]
                ,page: true
            });

            //table编辑
            table.on('edit(sort-list)', function(obj){
                var value = obj.value //得到修改后的值
                    ,data = obj.data //得到所在行所有键值
                    ,field = obj.field; //得到字段
                console.log(value);
                console.log(data);
                console.log(field);
                //发送ajax请求改动
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"/back/sorts/"+data.id,
                    data:{'_method':'put','field':field,'value':value},
                    type:'post',
                    success:function(re){
                        console.log(re);
                        if(re == 1){
                            layer.msg('更新成功', {time: 1500});
                        }else{
                            layer.msg('更新失败败败败败败败败败...');
                        }
                    }
                },JSON);
            });

            //监听是否开启标签
            form.on('switch(state)', function(obj){
                //ajax更新状态
                //发送ajax请求改动
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"/back/sorts/"+this.value,
                    data:{'_method':'put','field':this.name,'value':obj.elem.checked ? 1 :0},
                    type:'post',
                    success:function(re){
                        console.log(re);
                        if(re == 1){
                            layer.msg('更新成功', {time: 1500});
                        }else{
                            layer.msg('更新失败败败败败败败败败...');
                        }
                    }
                },JSON);
                console.log(this.name);
                console.log(obj.elem.checked ? '1' :0);
                console.log( obj.othis);
//            layer.tips(this.value + ' ' + this.name + '：'+ obj.elem.checked, obj.othis);
            });
        });
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    })

</script>

