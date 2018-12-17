@include('flash::message')
aaa
<table class="layui-table"  lay-data="{url:'/back/getLabelsJson', id:'test3'}" lay-filter="test3">
    <thead>
    <tr>
        <th lay-data="{field:'id', width:80, sort: true}">ID</th>
        <th lay-data="{field:'label_name', width:120, sort: true, edit: 'text'}">用户名</th>
        <th lay-data="{field:'desc', width:200, edit: 'text'}">描述</th>
        <th lay-data="{field:'created_at',  width: 180 , edit: 'text',}">创建时间</th>
        <th lay-data="{field:'updated_at', edit: 'text', width: 180}">更新时间</th>
    </tr>
    </thead>
</table>
ccc
<script>
    $(function() {
        layui.use('table', function(){
            var table = layui.table;

            //监听单元格编辑
            table.on('edit(test3)', function(obj){
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
                    url:"/back/labels/"+data.id,
                    data:{'_method':'put','field':field,'value':value},
                    type:'post',
                    success:function(re){
                        console.log(re);
                        if(re == 1){
                            layer.msg('更新成功');
                        }else{
                            layer.msg('更新成功');
                        }
                    }
                },JSON);

                //layer.msg('[ID: '+ data.id +'] ' + field + ' 字段更改为：'+ value);
            });
        });
    });

</script>
