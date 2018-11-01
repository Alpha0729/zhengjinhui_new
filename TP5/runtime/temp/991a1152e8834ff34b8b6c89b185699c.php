<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"G:\phpStudySetup\PHPTutorial\WWW\TP5\public/../application/index\view\html\add.html";i:1541060046;s:77:"G:\phpStudySetup\PHPTutorial\WWW\TP5\application\index\view\header\index.html";i:1541063527;s:77:"G:\phpStudySetup\PHPTutorial\WWW\TP5\application\index\view\footer\index.html";i:1540376260;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>正金汇首页</title>

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

<link rel="stylesheet" href="/static/css/index_home.css">
<!--正金汇首页主体-->
<div style="height: 300px;text-align:center;background-color: #f4f4f4">
    <h1 class="text-center">
        首页轮播图
    </h1>
</div>
<div class="">
    <div class="warp ipo margin_top layui-row">
        <h2 class="border_left margin_top">
        优选基金
            <small>
                <a href="#:;">
                    更多
                    <i class="layui-icon layui-icon-next
"></i>
                </a>
            </small>
        </h2>
        <h4 class="h4_title">
            <small>基于多年金融数据产品研究和应用经验，自主研发的数据应用操作工具平台。 提供数据浏览、查询、对接、定制等主要功能。（对应标题提示）</small>
        </h4>
        <a href="#:;"><div class="zj_ipo layui-col-md4">
            <div class="ipo_padding">
                <h3>
                    <b>正金七号</b>
                    <small>卓越选股能力，提前走出熊市底部(标签描述)</small>
                </h3>
                <div>
                    <div class="ipo_margin">
                        <span>交易策略 </span>
                        <div class="title_right">
                            <b>FOF</b>
                            <b>(标签提示)</b>
                        </div>
                    </div>
                    <div class="ipo_margin">
                        收益率 <span class="cf_color">200%</span>
                        <small>
                            日期<time>2018-11-1</time>
                        </small>
                    </div>
                </div>
            </div>
        </div></a>
        <a href="#:;"><div class="zj_ipo layui-col-md4">
            <div class="ipo_padding">
                <h3>
                    <b>正金七号</b>
                    <small>卓越选股能力，提前走出熊市底部(标签描述)</small>
                </h3>
                <div>
                    <div class="ipo_margin">
                        <span>交易策略 </span>
                        <div class="title_right">
                            <b>FOF</b>
                            <b>(标签提示)</b>
                        </div>
                    </div>
                    <div class="ipo_margin">
                        收益率 <span class="cf_color">200%</span>
                        <small>
                            日期<time>2018-11-1</time>
                        </small>
                    </div>
                </div>
            </div>
        </div></a>
        <a href="#:;"><div class="zj_ipo layui-col-md4">
            <div class="ipo_padding">
                <h3>
                    <b>正金七号</b>
                    <small>卓越选股能力，提前走出熊市底部(标签描述)</small>
                </h3>
                <div>
                    <div class="ipo_margin">
                        <span>交易策略 </span>
                        <div class="title_right">
                            <b>FOF</b>
                            <b>(标签提示)</b>
                        </div>
                    </div>
                    <div class="ipo_margin">
                        收益率 <span class="cf_color">200%</span>
                        <small>
                            日期<time>2018-11-1</time>
                        </small>
                    </div>
                </div>
            </div>
        </div></a>
        <!--<div class="clearFix">
            <p class="layui-col-md6">
               2013年10月注册成立的私募对冲基金
               2015年1月取得私募基金管理人资格
               现在运营“正金7号”“自然风1期”等多项私募基金
               拳石资产经营秉持“频移垒泰山”的投资理念，顺应自然交易法则，以多策略盈利模式，期望和客户之间长期稳定发展。

           </p>
            <div>
                <img class="layui-col-md6" src="/static/images/zhengjinhui.jpg" alt="">
            </div>
        </div>-->
    </div>
    <div class="margin_top row_back padding_tb">
        <div class="row_back warp">
            <h2 class="border_left">
                主营业务
                <a href="#:;">
                    <small>
                        更多
                        <i class="layui-icon layui-icon-next
"></i>
                    </small>

                </a>
            </h2>
            <h4 class="h4_title">
                <small>
                    基于多年金融数据产品研究和应用经验，自主研发的数据应用操作工具平台。
                    提供数据浏览、查询、对接、定制等主要功能。（对应标题提示）
                </small>
            </h4>
            <div class="layui-tab layui-tab-card">
                <ul class="layui-row layui-tab-title">
                    <li class="layui-col-md2 layui-this">
                        <div class="active_btn">
                            私募孵化平台(FOF、MOM)
                        </div>
                    </li>
                    <li class="layui-col-md2">
                        <div class="">
                            投资者技术交流平台
                        </div>
                    </li>
                    <li class="layui-col-md2 ">
                        <div>
                            资源整合
                        </div>
                    </li>
                    <li class="layui-col-md2 ">
                        <div>
                            数据分析
                        </div>
                    </li>
                    <li class="layui-col-md2 ">
                        <div>
                            数据披露
                        </div>
                    </li>
                    <li class="layui-col-md2 ">
                        <div>
                            软件科研
                        </div>
                    </li>
                </ul>
                <ul class="layui-tab-content">
                    <li class="layui-tab-item layui-show layui-row">
                        <ul class="layui-timeline">
                            <li class="layui-timeline-item">
                                <img class="" style="width:50%;border-radius:40%;float: right" src="/static/images/rsot.jpg" alt="">
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">筛选目标群体</h3>
                                    <p>
                                        大范围筛选优秀私募，建立第一手私募数据资源库。
                                    </p>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">确定孵化意向</h3>
                                    <p>筛选出黑马私募达成扶持意向</p>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">实盘数据跟踪</h3>
                                    <p>
                                        严格风控体系，通过历史业绩、近调及实盘数据跟踪进行筛选
                                    </p>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">达成孵化目的</h3>
                                    <p>
                                        通过平台支持，助推新生黑马私募快速成长
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--<div class="layui-col-md3">
                            <img class="layui-col-md12" src="/static/images/rsot.jpg" alt="">
                            <h5>筛选目标群体</h5>
                            <small>
                                大范围筛选优秀私募，建立第一手私募数据资源库。
                            </small>
                        </div>
                        <div class="layui-col-md3">
                            <img class="layui-col-md12" src="/static/images/rsot.jpg" alt="">
                        <h5>确定孵化意向</h5>
                        <small>
                            筛选出黑马私募达成扶持意向
                        </small>
                        </div>
                        <div class="layui-col-md3">
                            <img class="layui-col-md12" src="/static/images/rsot.jpg" alt="">
                            <h5>实盘数据跟踪</h5>
                            <small>
                                严格风控体系，通过历史业绩、近调及实盘数据跟踪进行筛选
                            </small>
                        </div>
                        <div class="layui-col-md3">
                            <img class="layui-col-md12" src="/static/images/rsot.jpg" alt="">
                            <h5>达成孵化目的</h5>
                            <small>
                                通过平台支持，助推新生黑马私募快速成长
                            </small>
                        </div>-->
                    </li>
                    <li class="layui-tab-item">
                        <ul class="layui-timeline">
                            <li class="layui-timeline-item">
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">私募交流平台</h3>
                                    <p>
                                        定期举办私募峰会，为私募提供交流场所、技术资讯、投研报告、信息披露、产品路演等服务。
                                    </p>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">个人交易者交流平台</h3>
                                    <p>集合国内优秀投顾、民间草根操盘手及行业大佬，提供交流场所、技术分析、行业动态等服务。
                                    </p>
                                </div>
                            </li>
                            <li class="layui-timeline-item">
                                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                                <div class="layui-timeline-content layui-text">
                                    <h3 class="layui-timeline-title">投资者交流平台</h3>
                                    <p>
                                        搭建投资者与投顾之间无缝对接的平台，促进投资者交易技能提升、根据投资者的需求精准对接匹配投顾。
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="layui-tab-item">33333</li>
                    <li class="layui-tab-item">44444</li>
                    <li class="layui-tab-item">55555</li>
                    <li class="layui-tab-item">66666</li>

                </ul>
            </div>
        </div>
    </div>
    <div class="margin_top warp layui-row news">
        <h2 class="border_left">
            热点资讯
            <a href="#:;">
                <small>
                    更多
                    <i class="layui-icon layui-icon-next
"></i>
                </small>
            </a>
        </h2>
        <h4 class="h4_title">
            <small>
                最新资讯尽在掌握！
            </small>
        </h4>
        <div class="layui-col-md4">
            <a href="#:;">
                <div class="news_one">
                    <img src="/static/images/phon.jpg" alt="">
                    <p class="text_content" style="">
                        首页独占一侧为了填充内容！首页独占一侧为了填充内容！首页独占一侧为了填充内容！首页独占一侧为了填充内容！首页独占一侧为了填充内容！首页独占一侧为了填充内容！首页独占一侧为了填充内容！

                    </p>
                </div>
            </a>
        </div>
        <h3>
            <b>最新文章投递</b>
        </h3>
        <ul class="layui-col-md8 news_list">
            <li>
                <a href="#:;" class="layui-col-md9">
                    <i class="layui-icon layui-icon-circle-dot"></i>
                    首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！
                </a>
                <time class="time-float">
                    2018-11-01
                </time>
            </li>
            <li>
                <a href="#:;" class="layui-col-md9">
                    <i class="layui-icon layui-icon-circle-dot"></i>
                    首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！
                </a>
                <time class="time-float">
                    2018-11-01
                </time>
            </li>
            <li>
                <a href="#:;" class="layui-col-md9">
                    <i class="layui-icon layui-icon-circle-dot"></i>
                    首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！
                </a>
                <time class="time-float">
                    2018-11-01
                </time>
            </li>
            <li>
                <a href="#:;" class="layui-col-md9">
                    <i class="layui-icon layui-icon-circle-dot"></i>
                    首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！
                </a>
                <time class="time-float">
                    2018-11-01
                </time>
            </li>
            <li>
                <a href="#:;" class="layui-col-md9">
                    <i class="layui-icon layui-icon-circle-dot"></i>
                    首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！
                </a>
                <time class="time-float">
                    2018-11-01
                </time>
            </li>
            <li>
                <a href="#:;" class="layui-col-md9">
                    <i class="layui-icon layui-icon-circle-dot"></i>
                    首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！首页文章只允许显示6条！
                </a>
                <time class="time-float">
                    2018-11-01
                </time>
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
<script>
    layui.use('element',function () {
        var element=layui.element;

    })
</script>
