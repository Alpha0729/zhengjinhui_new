<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"G:\phpStudySetup\PHPTutorial\WWW\TP5\public/../application/index\view\header\index.html";i:1541061226;}*/ ?>
<link rel="stylesheet" href="/static/icon/web_log.png">
<link rel="stylesheet" href="/static/layui/css/layui.css">
<link rel="stylesheet" href="/static/css/hover.css">
<link rel="stylesheet" href="/static/css/header.css">
<link rel="stylesheet" href="/static/css/public.css">
<!--头部主体-->
<div class="title">
    <h1 class="warp">正金汇商学院欢迎您！</h1>
</div>
<div class="header warp clearfix">
    <h1><small>正金汇商学院，正金汇学院，正金汇首页</small></h1>
    <ul class="pull-right nav_list" id="nav_list">
        <li class="active"><a href="<?php echo url('html/add'); ?>">首 页</a></li>
        <li><a href="<?php echo url('index/index'); ?>">学院介绍</a></li>
        <li><a href=":;">私募基金</a></li>
        <li><a href=":;">学院介绍</a></li>
        <li><a href=":;">学院介绍</a></li>
        <li><a href=":;">学院介绍</a></li>
        <li><a href=":;">学院介绍</a></li>
    </ul>
</div>
<!--头部主体-->
<script src="/static/layui/layui.js"></script>
<script>
    var nav=document.getElementById('nav_list');
    var aLi=nav.getElementsByTagName('li');
    for(var i=0;i<aLi.length;i++){
        aLi[i].onclick=function () {
            this.className='active';
        };
    }
</script>
