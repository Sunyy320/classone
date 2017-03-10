<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>计算机一班</title>
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/style.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/nivo-slider.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/time.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/show.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/login.css" />
    <script type="text/javascript" src="/classone/Public/Js/jquery.min.js"></script>
    <script type="text/javascript" src="/classone/Public/Js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="/classone/Public/Js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="/classone/Public/Js/jquery.nivo.slider.pack.js"></script>


    <script language="javascript" type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        });


    </script>

</head>

<body>

<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title"><h1><a href="#">计算机一班</a></h1></div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->


    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="/classone/index.php/Home/Index/index" class="selected">主页</a></li>
            <li><a href="/classone/index.php/Home/Tongxl/index">心缘通信</a></li>
            <li><a href="/classone/index.php/Home/Show/index">资源共享</a></li>
            <li><a href="/classone/index.php/Home/Leave/index">留言飞语</a></li>
            <li><a href="/classone/index.php/Home/Time/index">镌刻时光</a></li>
        </ul>

        <!--登陆和注册开始-->
        <div id="search_box">
            <a style="cursor: pointer" class="theme-login">&nbsp;登陆</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a style="cursor: pointer" class="theme-reg">注册</a>
        </div>
        <!--登陆和注册结束-->
        <div class="theme-popover">
            <div class="theme-poptit">
                <a href="javascript:;" title="关闭" class="close">×</a>
                <h3 style="color: #4d90fe;margin-top: 10px;">欢迎登陆</h3>
            </div>
            <div class="theme-popbod dform">
                <form class="theme-signin" name="loginform" action="/classone/index.php/Home/Login/login" method="post">
                    <ol>
                        <li><h4>登陆页面</h4></li>
                        <li><strong>用户名：</strong><input class="ipt" type="text" name="username" size="20" /></li>
                        <li><strong>密码：</strong><input class="ipt" type="password" name="pwd"  size="20" /></li>
                        <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
                    </ol>
                </form>
            </div>
        </div>
        <div class="theme-popover-mask"></div>


        <div class="theme-popover2">
            <div class="theme-poptit">
                <a href="javascript:;" title="关闭" class="close">×</a>
                <h3 style="color: #4d90fe;margin-top: 10px;">欢迎登陆</h3>
            </div>
            <div class="theme-popbod dform">
                <form class="theme-signin" name="loginform" action="/classone/index.php/Home/Login/reg" method="post">
                    <ol>
                        <li><strong>用户名：</strong><input class="ipt" type="text" name="username" size="20" /></li>
                        <li><strong>密码：</strong><input class="ipt" type="password" name="pwd"  size="20" /></li>
                        <li><strong>确认密码：</strong><input class="ipt" type="password" name="repwd"  size="20" /></li>
                        <li><strong>邮箱：</strong><input class="ipt" type="text" name="email"  size="20" /></li>
                        <li><input class="btn btn-primary" type="submit" name="submit" value=" 注 册 " /></li>
                    </ol>
                </form>
            </div>
        </div>
        <div class="theme-popover-mask"></div>

        <br style="clear: left" />
    </div> <!-- end of templatemo_menu，菜单结束 -->

    <!--web主要内容开始-->
    <div id="templatemo_main">
        
    <div id="content" class="float_l">
        <h2>极力推荐------学习</h2>
        <p style="color: #d6e5e4;"> 针对现在的学习状态我们推荐了以下的资源。好资源大家一起分析才可以进步。同学们可以下载和相互共享，如有不足很尽快联系我们，以方便我们改正。</p>
        <ul class="templatemo_list">
            <li>
                <a href="http://www.cssmoban.com/" class="li_a">web前端页面模板免费下载</a>
                -------
                <a href="http://www.ke01.com" class="li_a">移动端页面开发模板</a>
            </li>

            <li>
                <a href="http://www.jq22.com/" class="li_a">jquery插件实现特炫功能</a>
                ---------
                <a href="http://www.swiper.com.cn/" class="li_a">移动端特炫功能</a>
            </li>

            <li>
                <a href="http://server.php1.cn/" class="li_a">中国最大的php分享社区</a>
                ---------
                <a href="http://down.chinaz.com/" class="li_a">php项目源码下载</a>
            </li>

            <li>
                <a href="http://pan.java1234.com/" class="li_a">百度网盘搜索引擎</a>
                ------------
                <a href="http://www.java1234.com/" class="li_a">java知识分享</a>
            </li>

            <li>
                <a href="http://www.sinacloud.com/" class="li_a">免运维云计算服务新浪云</a>
                ---------
                <a href="https://bce.baidu.com/index.html" class="li_a">智能云计算服务平台百度开发云</a>
            </li>

        </ul>
        <div class="cleaner h20"></div>
        <h3>极力推荐------生活</h3>
        <p style="color: #d6e5e4;">学习的本质在于提高自身素养和知识储备，最终享受生活的美好。如果一味奔跑只会忘记最初的出发点，忽略了身边的美景。但愿你的每一天都精彩不停！</p>
        <div class="cleaner"></div>
        <blockquote style="color: #d6e5e4;">
            希望某个阳光的午后，你可以喝着coffee，沐浴阳光的同时静静的遨游<a href="http://book.2345.com/" style="font-size: 18px;color: darkgreen;">书本的世界</a>又或者简单的看看
            <a href="http://www.iqiyi.com/dianying/" style="font-size: 18px;color: darkgreen;">电影</a>，又或者就是简单玩玩<a href="http://www.4399.com/" style="font-size: 18px;color: darkgreen;">游戏</a>，放空自己，释放心灵！也或者此刻需要一些<a href="http://xiangtan.meituan.com/" style="font-size: 18px;color: darkgreen;">美食</a>满足味觉需求。Go ahead and do it!
        </blockquote>
    </div>


    <div id="sidebar" class="float_r">
        <div class="sb_box">
            <h3>Popular Recommendation </h3>
            <ul class="sb_list">
                <li><a href="http://www.responsinator.com/">在线移动手机页面测试</a></li>
                <li><a href="http://man.chinaunix.net/">各类学习开发手册推荐</a></li>
                <li><a href="http://android.apkbus.com/">Android移动开发集合</a></li>
                <li><a href="http://www.chinacloud.cn/">云计算平台信息交流</a></li>
                <li><a href="http://www.oschina.net/">开源中国社区共享</a></li>
                <li><a href="http://www.jeeweixin.com/">微信二次开发参考</a></li>
            </ul>
        </div>

        <div class="sb_box" style="color: #d6e5e4;">
            <h3>Life Ornament </h3>
            <ul class="sb_list">
                <li><a href="https://www.taobao.com/">淘到小玩意</a></li>
                <li><a href="http://www.tuniu.com">旅游咨询攻略</a></li>
                <li><a href="http://www.sina.com.cn/">个人社区微博</a></li>
                <li><a href="http://news.sina.com.cn/">生活新闻百态</a></li>

            </ul>
            <div class="cleaner"></div>

        </div>
    </div>
    <div class="cleaner"></div>

    </div>

    <!--底部-->
    <div id="templatemo_bottom">
        <div class="col one_fourth">
            <h5>Recent Posts</h5>
            <ul class="footer_link">
                <li><a href="#">Morbi posuere dictum diam</a></li>
                <li><a href="#">Suscipit porta mauris</a></li>
                <li><a href="#">Luctus tincidunt iaculis</a></li>
                <li><a href="#">Ut porta, lacus at mattis</a></li>
                <li><a href="#">Non molestie turpis magna</a></li>
            </ul>
        </div>
        <div class="col one_fourth">
            <h5>Recent Comments</h5>
            <ul class="footer_link">
                <li><a href="#">Jones</a> on <a href="#">Vivamus ac augue eros</a></li>
                <li><a href="#">Steven</a> on <a href="#">Curabitur imperdiet lacus</a></li>
                <li><a href="#">Susan</a> on <a href="#">Duis nec justo ut eros dignissim</a></li>
                <li><a href="#">Collin</a> on <a href="#">Suscipit dui integer imperdiet</a></li>
                <li><a href="#">Edward</a> on <a href="#">Sed facilisis tempus nulla sit </a></li>
            </ul>
        </div>
        <div class="col one_fourth">
            <h5>Blogroll</h5>
            <ul class="footer_link">
                <li><a href="http://www.cssmoban.com/">Free CSS Templates</a></li>
                <li><a href="http://www.webdesignmo.com/blog">Web Design Resources</a></li>
                <li><a href="#">Free Flash Templates</a></li>
                <li><a href="#">Website Templates</a></li>
                <li><a href="http://www.koflash.com">Free Web Gallery</a></li>
            </ul>
        </div>

        <div class="cleaner"></div>
    </div>

    <div id="templatemo_footer">
        开发者Sunny和威少
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        $('.theme-login').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover').slideDown(200);
        });

        $('.theme-poptit .close').click(function(){
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover').slideUp(200);
        });

        $('.theme-reg').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover2').slideDown(200);
        });

        $('.theme-poptit .close').click(function(){
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover2').slideUp(200);
        });

    })
</script>
</body>
</html>