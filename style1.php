<?php
$itemPopTitle="确认退出";//样式1的标题
$itemPopContent="确定要退出回桌面？";//样式1的内容
$itemPopButton="<button>确定</button><button onclick='itemPopupsClose()'>取消</button>";//样式1的按钮
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
    <a href="javascript:void(0)" onclick="itemPopupsOpen()">样式1</a>
    <div><? include_once "static/popups_style1.html" ?></div>
</body>
<script src="js/pop.js"></script><!-- 指派JS文件 -->
</html>
