<!DOCTYPE html>
<html>
<head>
    <title>pjax</title>
    <meta charset="utf-8">
</head>
<body>
<h1>My Site</h1>
<div>
    <input type="button" id="clickMe" value="GO">
    <dd><a  href="clickMe" id="clickMe">新增标签</a></dd>
</div>
<div id="container"></div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.0/jquery.js"></script>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.js"></script>
<script type="text/javascript">
    $(function(){
        $(document).on('click','#clickMe',function(event){
            event.preventDefault();
            $.pjax({
                url: '/res3.php',
            container: '#container'
        });
        });
    });
</script>
</html>