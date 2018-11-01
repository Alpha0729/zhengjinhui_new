<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"G:\phpStudySetup\PHPTutorial\WWW\TP5\public/../application/index\view\index\index.html";i:1541050571;s:77:"G:\phpStudySetup\PHPTutorial\WWW\TP5\application\index\view\header\index.html";i:1541063527;s:77:"G:\phpStudySetup\PHPTutorial\WWW\TP5\application\index\view\footer\index.html";i:1540376260;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>汇正商学院_首页，正金汇集团</title>
    <link rel="icon" href="/static/icon/web_log.png">
    <link rel="stylesheet" href="/static/css/animate.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

<link rel="stylesheet" href="/static/css/index_content.css">
<link rel="stylesheet" href="/static/css/public.css">

<div class="index_content">
    <!--轮播-->
    <div class="layui-carousel" id="tab">
        <div carousel-item>
            <div><img src="/static/images/banner_new.jpg" alt=""></div>
            <div><img src="/static/images/banner_new.jpg" alt=""></div>
            <div><img src="/static/images/banner_new.jpg" alt=""></div>
            <div><img src="/static/images/banner_new.jpg" alt=""></div>
        </div>
    </div>
    <!--轮播结束-->
    <div class="warp">
        <div class="special">
            <h3 class="title_h4">
                特殊课程</b>
            </h3>
            <img src="/static/images/mao.png" alt="">
            <p class="title_p">以学员满意度、以学员学习效果为本</p>
        </div>
        <ul class="special_all clearFix">
            <li>
                <img src="/static/images/conputer.jpg" alt="">
                <div>
                    <h2>操盘手</h2>
                    <small>
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                    </small>
                </div>
            </li>
            <li>
                <img src="/static/images/conputer.jpg" alt="">
                <div>
                    <h2>操盘手</h2>
                    <small>
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                    </small>
                </div>
            </li>
            <li>
                <img src="/static/images/conputer.jpg" alt="">
                <div>
                    <h2>操盘手</h2>
                    <small>
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                    </small>
                </div>
            </li>
            <li>
                <img src="/static/images/conputer.jpg" alt="">
                <div>
                    <h2>操盘手</h2>
                    <small>
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                    </small>
                </div>
            </li>
            <li>
                <img src="/static/images/conputer.jpg" alt="">
                <div>
                    <h2>操盘手</h2>
                    <small>
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                    </small>
                </div>
            </li>
            <li>
                <img src="/static/images/conputer.jpg" alt="">
                <div>
                    <h2>操盘手</h2>
                    <small>
                        网页设计是根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作
                    </small>
                </div>
            </li>
        </ul>
    </div>

    <div class="tow">
        <div class="warp clearFix">
            <div class="special">
                <h3 class="title_h4">教学优势</h3>
                <img src="/static/images/mao.png" alt="">
                <p class="title_p">以学员满意度、以学员学习效果为本</p>
            </div>
            <div class="clearFix tow_bottom">
                <div class="layui-col-md3">
                    <img src="/static/images/kc.png" alt="">
                    <p>专业课程</p>
                    <small>
                        众多交易策略
                    </small>
                </div>
                <div class="layui-col-md3">
                    <img src="/static/images/kc.png" alt="">
                    <p>专业课程</p>
                    <small>
                        众多交易策略
                    </small>
                </div>
                <div class="layui-col-md3">
                    <img src="/static/images/kc.png" alt="">
                    <p>专业课程</p>
                    <small>
                        众多交易策略
                    </small>
                </div>
                <div class="layui-col-md3">
                    <img src="/static/images/kc.png" alt="">
                    <p>专业课程</p>
                    <small>
                        众多交易策略
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="warp three">
        <div class="special">
            <h3 class="title_h4">优秀教师</h3>
            <img src="/static/images/mao.png" alt="">
            <p class="title_p">以学员满意度、以学员学习效果为本</p>
        </div>
        <div class="three_bottom clearFix">
            <div class="layui-col-md4">
                <img class="layui-col-md6" src="/static/images/zd_boss.png" alt="">
                <div class="layui-col-md6">
                    <h4>史磊</h4>
                    <p>
                        擅长资本运作、资产配置、交易策略组合、企业战略规划与管理；拥有六年的VC PE运作，十年的股票期货实战交易经验、金融市场投资运作管理经验与十年从商经历，白手起家。
                    </p>
                    <button class="icon_border layui-btn">
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                    </button>
                </div>
            </div>
            <div class="layui-col-md4">
                <img class="layui-col-md6" src="/static/images/nowcui.png" alt="">
                <div class="layui-col-md6">
                    <h4>商老师</h4>
                    <p>
                        八年实盘交易经验，五年培训讲师经验，三年操盘手团队管理经验 ,先后培训股票期货学员上千人，多次参加全国各地证券相关的演讲培训等大型活动，拥有丰富的教授经验；擅长证券理论研究，投资研究分析，交易策略组合、交易风险评估等。
                    </p>
                    <button class="icon_border layui-btn">
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                    </button>
                </div>
            </div>
            <div class="layui-col-md4">
                <img class="layui-col-md6" src="/static/images/lige.png" alt="">
                <div class="layui-col-md6">
                    <h4>李冲</h4>
                    <p>
                        八年实盘交易经验，五年培训讲师经验，三年操盘手团队管理经验 ,先后培训股票期货学员上千人，多次参加全国各地证券相关的演讲培训等大型活动，拥有丰富的教授经验；擅长证券理论研究，投资研究分析，交易策略组合、交易风险评估等。
                    </p>
                    <button class="icon_border layui-btn">
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                        <i class="layui-icon layui-icon-rate-solid"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="four">
        <div class="warp">
            <div class="special four_back">
                <h3 class="title_h4">公司介绍</h3>
                <img src="/static/images/mao.png" alt="">
                <p class="title_p">坚持实施“一位学员、一份计划、一种方法”的针对性教学模式</p>
            </div>
            <div class="clearFix four_bottom">
                <div class="layui-col-md6">
                    <h4>公司简介</h4>
                    <p>
                        正金汇同国内数百家银行、券商、私募机构进行深层次合作，拥有大量的资源、资金、投顾数据，通过线上APP和线下实体分公司的数据匹配系统，实现资源、资金、数据、投顾的无缝对接。利用成熟的投研体系及风险评估体系，对交易员交易行为进行全方面解析，建立个人专属数据分析系统，为投顾发展提供详细的数据支持和交易辅助。通过大数据整合，筛选出优秀投顾组成讲师队伍，通过线上路演及线下培训，为市场参与者提供最专业的培训服务。结合大数据的优势，实现人才对接。

                    </p>
                </div>
                <div class="layui-col-md6">
                    <h4>操盘手培训简介</h4>
                    <p>
                        操盘手培训班，拥有多个交易团队、数誓套交易策略、完善的交易系统，团队成员平均实盘经验八年以上。交易员训练体系，结合众多拥有丰富实战经验的操盘手共同编纂教材，建立起一套完善的教学体系，倡导因材施救，真教实操，基于实战角度出发从理论到实战训练，全方位培养和孵化优秀的操盘手。

                        正德与全国数百家证券公司、期货公司．私募机构负责人及优秀基金管理人达成战路合作关系，共同组成嘉宾讲师团队，建立起正德操盘手全国培训体系和输送优秀投顾人オ计划，通过行业顶尖投顾交易员的现场学，让所有学员能够最直观地学习金融行业顶尖交易手法。同时井组织考取相关资格证书（证券从业资格证、期货从业资格证、基金从业资格证、投顾资质、交易员认证等），完成人才输送计划。

                        2018年正德逐步布局线上培训项目，实现异地培训，全国互联，目前在北京、上海、广州、深圳、杭州、湖北、安徽、河南、河北、山东、山西、东北、江西。内蒙、宁夏等地创建百余家合作公司，运作规模达数十亿元，多年来培养了大批专业实战型投顾操盘手，打造教育培训新规则，助推国内金融行业新发展。


                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="five">
        <div class="warp">
            <div class="special four_back">
                <h3 class="title_h4">在线报名</h3>
                <img src="/static/images/mao.png" alt="">
                <p class="title_p">坚持实施“一位学员、一份计划、一种方法”的针对性教学模式</p>
            </div>
            <div class="five_bottom">
                <div class="layui-col-md6">
                    <h4>报名方式：</h4>
                    <p>
                        不同专业形式各有特点，除了在线报名外，报名方式还有其他三种：<br>
                        一：电话报名，即学生可通过招生电话，联系对应专业负责人进行报名<br>
                        <small>
                            电话：400-969-3996
                        </small>
                        <br>
                        二：邮件报名，即学生可通过招生邮箱，将自己的信息发到邮箱报名  <br>
                        <small>
                            邮箱：www.zengdejirong@163.com <br>
                        </small>
                        三：到校报名，即学生直接到达学区，找到对应专业报名区，报名即可(见：底部)。
                    </p>
                </div>
                <form class=" layui-form layui-form-pane layui-col-md4" action="">
                    <h4>在线报名：</h4>
                    <div class="layui-form-item">
                        <label for="int" class="layui-form-label">
                            <i class="fa fa-user-o fa-lg" style="padding-right:5px;"></i>姓名：</label> <!--for 要绑定的表单id 进行选中-->
                        <div class="layui-input-block ">
                            <input id="int" type="text" name="user_name"  placeholder="请输入姓名" autocomplete="off" class="layui-input layui-form-danger">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-input layui-form-danger">
                            <i class="fa fa-phone fa-lg" style="padding-right:5px;"></i>
                            手机：</label> <!--for 要绑定的表单id 进行选中-->
                        <div class="layui-input-block">
                            <input type="text" name="user_phone" lay-verify="required|phone" placeholder="请输入电话(必填)" autocomplete="off" class="layui-input layui-form-danger">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-input layui-form-danger">
                            <i class="fa fa-map-marker fa-lg" style="padding-right:5px;"></i>
                            地址：</label> <!--for 要绑定的表单id 进行选中-->
                        <div class="layui-input-block">
                            <input type="text" name="user_id" placeholder="请输入所在地址" autocomplete="off" class="layui-input layui-form-danger " >
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">
                            <i class="fa fa-edit fa-lg" style="padding-right:5px;"></i>
                            备注：</label> <!--for 要绑定的表单id 进行选中-->
                        <div class="layui-input-block">
                            <textarea name="user_text" class="layui-textarea" placeholder="疑问解答"></textarea>
                            <!--<input type="text" name="title" required="" lay-verify="required" placeholder="请输入所在地址" autocomplete="off" class="layui-input layui-form-danger " >-->
                        </div>
                    </div>
                    <button class="layui-col-md12 layui-btn" lay-submit="" lay-filter="formDemo">立即提交</button>
                </form>
            </div>
        </div>
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
<script src="/static/js/jquery.min.js"></script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#tab'
            ,width: '100%' //设置容器宽度
            ,arrow: 'hover' //始终显示箭头hover（悬停显示）（always 始终显示）（始终不显示）
            ,height:400,
            interval:3000
            //,anim:'fade'
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
</body>
</html>