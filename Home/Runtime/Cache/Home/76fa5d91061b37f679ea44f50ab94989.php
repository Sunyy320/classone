<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>计算机一班</title>
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/style.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/nivo-slider.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="/classone/Public/Css/zong.css" />
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

        <div class="theme-popover">
            <div class="theme-poptit">
                <a href="javascript:;" title="关闭" class="close">×</a>
                <h3 style="color: #4d90fe;margin-top: 10px;">欢迎登陆</h3>
            </div>
            <div class="theme-popbod dform">
                <form class="theme-signin" name="loginform" action="/classone/index.php/Home/Login/login" method="post">
                    <ol>
                        <li><h4>登陆页面</h4></li>
                        <li><strong>用户名：</strong><input class="ipt" type="text" name="username" size="20" style="height: 15px;"/></li>
                        <li><strong>密码：</strong><input class="ipt" type="password" name="pwd"  size="20"  style="height: 15px;"/></li>
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
                        <li><strong>用户名：</strong><input class="ipt" type="text" name="username" size="20" style="height: 15px;"/></li>
                        <li><strong>密码：</strong><input class="ipt" type="password" name="pwd"  size="20" style="height: 15px;"/></li>
                        <li><strong>确认密码：</strong><input class="ipt" type="password" name="repwd"  size="20" style="height: 15px;"/></li>
                        <li><strong>邮箱：</strong><input class="ipt" type="text" name="email"  size="20" style="height: 15px;"/></li>
                        <li><input class="btn btn-primary" type="submit" name="submit" value=" 注 册 " /></li>
                    </ol>
                </form>
            </div>
        </div>
        <div class="theme-popover-mask"></div>

        <br style="clear: left" />
    </div> <!-- end of templatemo_menu，菜单结束 -->

    <!--图片轮播开始-->
    <div id="templatemo_slider">

        <div id="slider" class="nivoSlider">
            <img src="/classone/Public/Images/slider/011.jpg" alt="Slider 01" title="八教是我们上学必经之地和上选修课最好的地方" />
            <a href="#"><img src="/classone/Public/Images/slider/022.jpg" alt="Slider 02" title="南图以其庞大的藏书量吸引着我们，在这里我们可以充实自己，提升自我" /></a>
            <img src="/classone/Public/Images/slider/033.jpg" alt="Slider 03" title="明湖的湖水永远那么静谧，阳光照耀下的明湖透露着历史的气息"/>
            <img src="/classone/Public/Images/slider/044.jpg" alt="Slider 04" title="奔跑吧，兄弟！在这里尽情的挥洒你的汗水，留下健康的体魄" />
        </div>



        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    effect:'random', // Specify sets like: 'fold,fade,sliceDown'
                    slices:15, // For slice animations
                    boxCols: 8, // For box animations
                    boxRows: 4, // For box animations
                    animSpeed:500, // Slide transition speed
                    pauseTime:3000, // How long each slide will show
                    startSlide:0, // Set starting Slide (0 index)
                    directionNav:true, // Next and Prev navigation
                    directionNavHide:false, // Only show on hover
                    controlNav:false, // 1,2,3... navigation
                    controlNavThumbs:false, // Use thumbnails for Control Nav
                    controlNavThumbsFromRel:false, // Use image rel for thumbs
                    controlNavThumbsSearch: '.jpg', // Replace this with...
                    controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
                    keyboardNav:true, // Use left and right arrows
                    pauseOnHover:true, // Stop animation while hovering
                    manualAdvance:false, // Force manual transitions
                    captionOpacity:0.8, // Universal caption opacity
                    prevText: 'Prev', // Prev directionNav text
                    nextText: 'Next', // Next directionNav text
                    beforeChange: function(){}, // Triggers before a slide transition
                    afterChange: function(){}, // Triggers after a slide transition
                    slideshowEnd: function(){}, // Triggers after all slides have been shown
                    lastSlide: function(){}, // Triggers when last slide is shown
                    afterLoad: function(){} // Triggers when slider has loaded
                });
            });
        </script>
    </div><!--图片轮播结束-->

    <!--web主要内容开始-->
    <div id="templatemo_main">

        <!--班级寄语开始-->
        <div class="col one_third">
            <h2>Class one </h2>
            <p><em>湖南科技大学计算机科学与工程学院--14级计算机科学与技术一班</em></p>
            <p>人生旅途中的交集，相遇，是一份意外的惊喜。相诉，是一阕优美的断章。相惜，是一种情意的升华。缘为何来，2014我们相聚科大。情深缘深，只愿我们就这样，且歌且吟，且行且暖，且暖且惜，沐浴似水流年，共渡青春岁月。不负时光，野蛮生长，2016我们在路上！无论未来，我们终将相伴而行，行至彼岸！</p>
            <a href="#" class="more">More</a>
        </div><!--班级寄语结束-->

        <!--我们提供的服务开始-->
        <div class="col one_third">
            <h2>Services</h2>
            <p>班级网站致力于为班级同学提供一个交流的平台，更加有利于同学之间的交流，即使在若干年后，我们也可以快速知道和了解每个人的信息动态</p>
            <ul class="templatemo_list">
                <li>最新班级活动</li>
                <li>学习质料和竞赛信息</li>
                <li>分享生活点滴幸福</li>
                <li>同学最近生活动态</li>
                <li>记录曾经的幸福瞬间</li>
            </ul>
            <a href="#" class="more">More</a>
        </div><!--我们提供的服务结束-->

        <!--照片开始-->
        <div class="col one_third last_box">
            <h2>Class photo</h2>
            <img src="/classone/Public/Images/class1.jpg" alt="Image 01" class="image_frame" />
            <p><em>计一的全家福，快门按下的瞬间不仅是当时的画面，还有我们在一起的岁月</em></p>
            <a href="#" class="more">More</a>
        </div>
        <!--照片结束-->

        <div class="cleaner hr_divider"></div>

        <!--四张照片-->
        <div class="col one_fourth">
            <h3>Group Activity</h3>
            <img src="/classone/Public/Images/class5.jpg" alt="Image 01" class="image_frame" />
            团活是一次班级聚会，也是一次加深同学之间感情的机会。记得与你们玩过的每一个游戏，开过的每一个笑话
        </div>
        <div class="col one_fourth">
            <h3>Class Brothers</h3>
            <img src="/classone/Public/Images/class2.jpg" alt="Image 02" class="image_frame" />
            四年的兄弟情，岂是困难可以打倒！无论前方，我们搀扶前进！不抛弃，不放弃
        </div>
        <div class="col one_fourth">
            <h3>Class Meeting</h3>
            <img src="/classone/Public/Images/class3.jpg" alt="Image 03" class="image_frame" />
            每一次的班会，都是鞭策在鞭策自己不要沉迷于舒适的生活，别忘记奋斗的意义
        </div>
        <div class="col one_fourth last_box">
            <h3>Sports Meeting</h3>
            <img src="/classone/Public/Images/class4.jpg" alt="Image 04" class="image_frame" />
            班级集体活动，挥洒着汗水，留下欢笑和记忆，当然还有我们间不变的情谊！
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