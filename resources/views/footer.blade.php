<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
{{--底部二维码表格--}}
<table width="1000" border="0" cellspacing="0" cellpadding="0"  >
    <tr>
        <td valign="top" style="line-height:28px;"><p>这是尾部</p></td>
        <td valign="top">
            {{--<strong id="test">开元旅游公众号</strong><br>--}}
            <img src="{{ config('team_trip.pdf.cdn_image_path').'images/1.png' }}" width="140" height="140" style="margin-top:8px;">
        </td>
        <td valign="top">
            {{--<strong>开元网公众号</strong><br>--}}
            <img src="{{ config('team_trip.pdf.cdn_image_path').'images/2.png' }}" width="140" height="140" style="margin-top:8px;"></td>
        <td width="140" valign="top">
            {{--<strong>开元定制</strong><br>--}}
            <img src="{{ config('team_trip.pdf.cdn_image_path').'images/3.png' }}" width="140" height="140" style="margin-top:8px;"></td>
    </tr>

</table>

</body>
</html>