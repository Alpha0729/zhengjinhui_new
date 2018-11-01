<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"G:\phpStudySetup\PHPTutorial\WWW\TP5\public/../application/index\view\html\fund.html";i:1541068473;s:77:"G:\phpStudySetup\PHPTutorial\WWW\TP5\application\index\view\header\index.html";i:1541063527;s:77:"G:\phpStudySetup\PHPTutorial\WWW\TP5\application\index\view\footer\index.html";i:1540376260;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/css/fund.css">
</head>
<body>
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
        <li <?php if(!empty($cat)): ?>class="active"<?php endif; ?>><a href="<?php echo url('index/index',array('nav_cat'=>'school')); ?>">学院介绍</a></li>
        <li><a href="<?php echo url('html/fund'); ?>">私募基金</a></li>
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

<!--主体内容-->
<div class="fund warp">
    <hr>
    <div class="gps">
        所在位置：<a href="#:;">首页 <i class="layui-icon layui-icon-right"></i></a>
        <span>私募基金</span>
    </div>

    <div class="margin_top layui-row fund_warp">
        <h2 class=""><span class="cf_color">热销</span>排行榜</h2>
        <ul class="layui-col-md8 ipo_all">
            <li class=" padding_bottom">
                <h2>
                    正金七号
                </h2>
                <div class="title_right layui-row">
                    <p class="layui-col-md3">净值盈亏：<i>1.90</i></p>
                    <p class="layui-col-md3">累计收益：<i>200%</i></p>
                    <p class="layui-col-md6">
                        交易策略：
                        <b>最多多多</b>
                        <b>44个标签</b>
                        <b>限制字数</b>
                        <b>44个字制</b>
                    </p>
                </div>
                <div class="title_bottom layui-row">
                    <span>汇正点评：</span> <small>抄底首选，率先入手价值成长股</small>
                    <button class="layui-btn layui-btn-danger pull-right">点击咨询</button>
                </div>
            </li>
            <li class="margin_top padding_bottom">
                <hr>
                <h2>
                    正金七号
                </h2>
                <div class="title_right layui-row">
                    <p class="layui-col-md3">净值盈亏：<i>1.90</i></p>
                    <p class="layui-col-md3">累计收益：<i>200%</i></p>
                    <p class="layui-col-md5">
                        交易策略：
                        <b>最多</b>
                        <b>4个标签</b>
                        <b>限制字数</b>
                        <b>4个字</b>
                    </p>
                </div>
                <div class="title_bottom layui-row">
                    <span>汇正点评：</span> <small>抄底首选，率先入手价值成长股</small>
                    <button class="layui-btn layui-btn-danger pull-right">点击咨询</button>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--尾部-->
<link rel="stylesheet" href="/static/css/footer.css">
<div class="footer">
    <div class="warp clearFix">
        <div class="layui-col-md9">
            <h3>
                汇正商学院全国联系方式:
            </h3>
            <div class="layui-col-md6">
                全国咨询电话：400-969-3996 <br>
                地址：北京市朝阳区日坛国际贸易中心B座1A01 <br>
            </div>

            <div class="layui-col-md6">
                地区电话：18730179613 <br>
                地址：石家庄市桥西区中山西路与师范街海通证券二楼 <br>
            </div>
            <div class="layui-col-md6">
                地区电话：15039060850 <br>
                地址：河南省郑州市郑东新区郑州东站升龙广场1号楼B座11层 <br>
            </div>
        </div>
        <div class="layui-col-md3 footer_code">
            <img class="layui-col-md5 footer_code" src="/static/icon/two_code.jpg" alt="">
        </div>
    </div>
    <div class="icp">
        ©2018 正金汇 版权所有 <a target="_blank" href="http://www.beian.gov.cn">备案：冀ICP备18000985号-1</a>
    </div>
</div>

<!--尾部-->
</body>
</html>