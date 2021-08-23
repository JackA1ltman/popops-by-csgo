<?php
$popTitle="新物品";//样式2的提示
$popItemTitle="AK47 | 不知道啥皮肤";//样式2的标题
$popSeries="命悬一线武器箱";//样式2的出自标题
$popPicLink="img/test2.png";//样式2的出自图片
$popButton="<button>确定</button><button onclick='popupsClose()'>取消</button>";//样式2的按钮
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>样式测试网页</title>
</head>
<body>
<a href="javascript:void(0)" onclick="popupsOpen()">样式2</a>
<div><? include_once "static/popups_style2.html" ?></div>
</body>
<script src="js/pop.js"></script><!-- 指派JS文件 -->
</html>