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
        <section id="cd-timeline" class="cd-container">

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
            <img src="/classone/Public/Images/cd-icon-picture.svg" alt="Picture">
        </div>

        <div class="cd-timeline-content">
            <h2>happy的团活</h2>
            <div>
                <img src="/classone/Public/Images/class5.jpg"  style="margin-right:5px;" onload="AutoResizeImage(300,300,this)"/>
                <p>团活是一次班级聚会，也是一次加深同学之间感情的机会。记得与你们玩过的每一个游戏，开过的每一个笑话</p>
            </div>

            <span class="cd-date">2015-01-06</span>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">

            <img src="/classone/Public/Images/cd-icon-picture.svg" alt="Picture">
        </div>

        <div class="cd-timeline-content">
            <h2>男生的活动练习</h2>
            <div>
                <img src="/classone/Public/Images/class2.jpg" align="left" style="margin-right:5px;" onload="AutoResizeImage(200,200,this)"/>
                <p>四年的兄弟情，岂是困难可以打倒！无论前方遇见什么，我们都会相互搀扶前进，不抛弃，不放弃</p>
            </div>
            <span class="cd-date">2014-12-25</span>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
            <img src="/classone/Public/Images/cd-icon-picture.svg" alt="Picture">
        </div>

        <div class="cd-timeline-content">
            <h2>意义非凡的班会</h2>
            <div>
                <img src="/classone/Public/Images/class3.jpg" align="left" style="margin-right:5px;" onload="AutoResizeImage(200,200,this)"/>
                <p> 每一次的班会，都是鞭策在鞭策自己不要沉迷于舒适的生活，别忘记奋斗的意义。在这里知道差距的所在，知道奋斗的方向</p>
            </div>
            <span class="cd-date">2014-12-20</span>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
            <img src="/classone/Public/Images/cd-icon-picture.svg" alt="Picture">
        </div>

        <div class="cd-timeline-content">
            <h2>Sports Meeting年级活动</h2>
            <div>
                <img src="/classone/Public/Images/class4.jpg" align="left" style="margin-right:5px;" onload="AutoResizeImage(200,200,this)"/>
                <p> 班级集体活动，挥洒着汗水，留下欢笑和记忆，当然还有我们间不变的情谊！</p>
            </div>
            <span class="cd-date">2014-12-14</span>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
            <img src="/classone/Public/Images/cd-icon-picture.svg" alt="Picture">
        </div>

        <div class="cd-timeline-content">
            <h2>Sports Meeting年级活动</h2>
            <div>
                <img src="/classone/Public/Images/class4.jpg" align="left" style="margin-right:5px;" onload="AutoResizeImage(200,200,this)"/>
                <p> 班级集体活动，挥洒着汗水，留下欢笑和记忆，当然还有我们间不变的情谊！</p>
            </div>
            <span class="cd-date">2014-12-14</span>
        </div>
    </div>
</section>

<script type="text/javascript">
    function AutoResizeImage(maxWidth,maxHeight,objImg){

        var img = new Image();
        img.src = objImg.src;
        var hRatio;
        var wRatio;
        var Ratio = 1;
        var w = img.width;
        var h = img.height;
        wRatio = maxWidth / w;
        hRatio = maxHeight / h;
        if (maxWidth ==0 && maxHeight==0){
            Ratio = 1;
        }else if (maxWidth==0){
            if (hRatio<1) Ratio = hRatio;
        }else if (maxHeight==0){
            if (wRatio<1) Ratio = wRatio;
        }else if (wRatio<1 || hRatio<1){
            Ratio = (wRatio<=hRatio?wRatio:hRatio);
        }
        if (Ratio<1){
            w = w * Ratio;
            h = h * Ratio;
        }
        objImg.height = h;
        objImg.width = w;
    }
</script>
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