<?php /*a:1:{s:55:"/home/wwwroot/default/tp/app/home/view/index/index.html";i:1671505769;}*/ ?>
<!DOCTYPE html>

<html>

<head>
    <!-- 【寻品咖啡学院】专注于咖啡创业、就业的培训机构,北京咖啡培训学院,上海咖啡培训学院 -->
    <title> 【北京寻品咖啡有限责任公司】专注于咖啡创业、就业的培训机构,北京寻品咖啡,上海寻品咖啡</title>

    <meta name="keywords" content="寻品,寻品咖啡,寻品咖啡学院,咖啡师姜涛,上海咖啡师培训,北京咖啡师培训,咖啡培训机构,咖啡拉花培训,咖啡店加盟,中国sca咖啡认证培训">
    <meta name="description" content="seek-gift|寻品咖啡，位于北京和上海的咖啡培训，是一家专注于咖啡创业规划与咖啡从业者职业生涯规划的创新型咖啡培训机构。由sca认证老师授课，在SCA精品咖啡协会的认证技能课程体系中加入不同职岗的综合素质训练。">
    <meta name="referrer" content="no-referrer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script src="/static/js/swiper.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/static/Image/icon.svg" />
    <link rel = "stylesheet" href = "/static/css/base.css"  type = "text/css"/>
    <link rel = "stylesheet" href = "static/css/swiper.min.css" type = "text/css" />

    <style>
        .home_nav_li {
            cursor: pointer;
        }
        
        .header_logo {
            width: 100%;
            text-align: center;
            margin-top: 5%;
        }
        
        .header_logo img {
            width: 12%;
            align-content: center;
        }
        
        .home_nav_ul {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 3% 0;
        }
        
        .home_nav_ul li {
            margin: 0 0.6%;
            font-family: SourceHanSansCN-Medium;
            font-size: 1.33rem;
            padding: 0 2%;
            color: #121519;
            border: 0.0625rem solid white;
            border-radius: 0.959rem;
        }
        
        .home_nav_ul li:hover {
            margin: 0 0.6%;
            font-family: SourceHanSansCN-Medium;
            font-size: 1.33rem;
            padding: 0 2%;
            color: #121519;
            border: 0.0625rem solid #121519;
            border-radius: 0.959rem;
        }
        
        .home_nav_ul li:nth-child(1) {
            margin: 0 0.6%;
            font-family: SourceHanSansCN-Medium;
            font-size: 1.33rem;
            color: white;
            background: #1B44DB;
            border-radius: 0.959rem;
            padding: 0 2%;
        }
        
        #swiper_banner img {
            width: 100%;
            height: 100%;
            padding-bottom: 1%;
            align-content: center;
        }
        
        .banner {
            margin-top: 1.4%;
        }
        
        .swiper-container-horizontal>.swiper-pagination-bullets,
        .swiper-pagination-custom,
        .swiper-pagination-fraction {
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 2%;
            left: 0;
            width: 100%;
        }
        
        .swiper-pagination-bullet {
            width: 0.9rem;
            height: 0.9rem;
            border: 0.0625rem solid white;
            background: rgba(0, 0, 0, 0);
        }
        
        .swiper-pagination-bullet-active {
            width: 0.9rem;
            height: 0.9rem;
            background: white;
        }
        
        .swiper-pagination {
            height: 5%;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .course_container {
            margin: 1.5% 3.3% 3.7% 3.3%;
            display: grid;
            grid-template-columns: 33.33% 33.33% 33.33%;
            grid-template-rows: auto;
            grid-auto-flow: row dense;
        }
        
        .course_item {
            padding-right: 1.6%;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #303030;
            text-align: center;
        }
        
        .course_item p {
            margin: 2% 0 10%;
        }
        
        .course_item img {
            margin-bottom: 0.6%;
            width: 50%;
        }
        
        .teacher_title {
            height: 15%;
            overflow: hidden;
            padding-top: 4.8%;
            padding-left: 5%;
            font-size: 0.9rem;
            color: #656565;
        }
        
        #swiper_teacher {
            margin-top: 2.3%;
            padding-left: 2.9%;
        }
        
        .swiper-container-horizontal>.swiper-scrollbar {
            position: relative;
            height: 0.125rem;
            width: auto;
            background: #cfcfcf;
            margin-top: 3.8%;
            margin-left: 13.8%;
            margin-right: 13.8%;
            margin-bottom: 3.8%;
        }
        
        .swiper-scrollbar-drag {
            height: 0.375rem;
            width: 30%;
            top: -0.125rem;
            background: #1B44DB;
        }
        
        #swiper_teacher .swiper-slide {
            width: 60%;
            background: #F7F7F7;
            margin-left: 1.3%;
        }
        
        .avatar {
            width: 45%;
            padding-left: 2.5%;
            float: right;
        }
        
        .teacher_title {
            font-family: SourceHanSansCN-Medium;
            font-size: .875rem;
            color: #656565;
            padding-left: 5%;
        }
        
        .teacher_name {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.75rem;
            color: #1B44DB;
            padding-left: 5%;
        }
        
        .teacher_detail {
            width: 55%;
            font-family: SourceHanSansCN-Normal;
            font-size: .875rem;
            color: #656565;
            line-height: 1.6rem;
            padding-left: 5%;
            padding-right: 8%;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            overflow: hidden;
        }
        
        .more_btn {
            position: absolute;
            bottom: 8%;
            left: 5%;
            width: 2.2512rem;
            height: 2.2512rem;
        }
        
        .activity {
            width: 92%;
            margin: 2% 4% 6%;
        }
        
        .pc_activity {
            display: flex;
        }
        
        .phone_activity {
            display: none;
        }
        
        .activity_left {
            width: 70%;
        }
        
        .left_flex_div {
            display: flex;
        }
        
        .left_flex_div img {
            width: 70%;
        }
        
        .left_flex_div div {
            padding: 3% 4%;
            position: relative;
            background: #F7F7F7;
            width: 30%;
        }
        
        .left_flex_div div img {
            width: 70%;
            position: absolute;
            bottom: 8%;
        }
        
        .left_time {
            font-family: SourceHanSansCN-Normal;
            font-size: .875rem;
            color: #303030;
            margin-bottom: 1%;
        }
        
        .left_title {
            font-family: SourceHanSansCN-Medium;
            font-size: 1.125rem;
            color: #303030;
            margin: 4% 0;
            display: -webkit-box;
            overflow: hidden;
            /*超出隐藏*/
            text-overflow: ellipsis;
            /*强制不换行*/
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
        
        .left_detail {
            flex-grow: 5;
            font-family: SourceHanSansCN-Normal;
            font-size: .875rem;
            color: #303030;
            letter-spacing: 0.008rem;
            text-align: justify;
            margin-bottom: 1%;
            display: -webkit-box;
            overflow: hidden;
            /*超出隐藏*/
            text-overflow: ellipsis;
            /*强制不换行*/
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            line-height: 1.5rem;
        }
        
        .activity_right {
            margin-left: 0.6%;
            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .Column {
            background: #F7F7F7;
            display: flex;
        }
        
        .right_item_img {
            width: 37%;
            padding-right: 0.625rem;
        }
        
        .right_flex_div {
            margin: auto;
            width: 60%;
        }
        
        .right_title {
            font-family: SourceHanSansCN-Medium;
            font-size: 1.125rem;
            color: #303030;
            margin-bottom: 1%;
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
        }
        
        .right_time {
            font-family: SourceHanSansCN-Normal;
            font-size: .875rem;
            color: #303030;
        }
        
        .right_item_arrow {
            width: 0.9rem;
            height: 0.9rem;
        }
        
        .swiper-slide .teacher-slider .swiper-slide-active {
            width: 50%;
        }
        
        @media only screen and (max-width: 1440px) {
            .teacher_detail {
                line-height: 1.3rem;
                -webkit-line-clamp: 4;
            }
            .left_detail {
                -webkit-line-clamp: 5;
                line-height: 1.5rem;
            }
            .left_title {
                margin: 4% 0;
            }
        }
        
        @media only screen and (max-width: 1200px) {
            .pc_activity {
                display: none;
            }
            .phone_activity {
                display: flex;
            }
            .activity_left {
                width: 100%;
            }
            .left_flex_div {
                margin-bottom: 2rem;
            }
            .left_detail {
                -webkit-line-clamp: 6;
            }
        }
        
        @media only screen and (max-width: 1070px) {
            .teacher_detail {
                line-height: 1.3rem;
                font-size: 0.8125rem;
                -webkit-line-clamp: 3;
            }
            .left_detail {
                -webkit-line-clamp: 6;
            }
        }
        
        @media only screen and (max-width: 985px) {
            .teacher_detail {
                line-height: 1.2rem;
                -webkit-line-clamp: 3;
            }
            .left_detail {
                -webkit-line-clamp: 6;
                line-height: 1.2rem;
                font-size: 0.875rem;
            }
            .left_time {
                font-size: 0.75rem;
            }
            .teacher_name {
                font-size: 1.625rem;
            }
            .more_btn {
                width: 1.8rem;
                height: 1.8rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .header_logo img {
                width: 25%;
            }
            .home_nav_ul li {
                font-size: 0.6875rem;
            }
            .home_nav_ul li:nth-child(1) {
                font-size: 0.6875rem;
            }
            .home_nav_ul li:hover {
                font-size: 0.6875rem;
                border: 0rem solid #121519;
            }
            .swiper-pagination {
                height: 15%;
            }
            .swiper-pagination-bullet {
                width: 0.4rem;
                height: 0.4rem;
            }
            .swiper-pagination-bullet-active {
                width: 0.4rem;
                height: 0.4rem;
            }
            .activity {
                flex-direction: column;
            }
            .left_flex_div img {
                width: 60%;
            }
            .left_flex_div div {
                width: 40%;
                padding: 1% 3%;
            }
            .left_time {
                font-size: 0.75rem;
                margin-bottom: 0%;
            }
            .left_title {
                font-size: 0.75rem;
                line-height: 0.9rem;
                margin: 1% 0 5% 0;
                /* margin: 1% 0; */
            }
            .left_detail {
                font-size: 0.75rem;
                line-height: 1.2rem;
                -webkit-line-clamp: 3;
            }
            .activity_right {
                width: 100%;
                margin-left: 0%;
                margin-top: 0.6%;
                flex-direction: row;
                justify-content: space-between;
            }
            .Column {
                background: #F7F7F7;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .right_item_img {
                width: 98%;
                padding-right: 0;
            }
            .right_title {
                font-size: 0.959rem;
            }
            .right_time {
                font-size: 0.959rem;
                margin: 3% 0;
            }
            .right_item_arrow {
                display: none;
            }
            .home_nav_ul li {
                padding: 0 1.6%;
            }
            .home_nav_ul li a {
                color: white;
            }
            .course_item {
                font-size: 0.875rem;
            }
            .teacher_title {
                font-size: 0.875rem;
            }
            .teacher_name {
                font-size: 1.125rem;
            }
            .teacher_detail {
                font-size: 0.9rem;
                -webkit-line-clamp: 6;
                line-height: 1.2rem;
            }
            .course_container {
                grid-template-columns: 50% 50%;
            }
        }
        
        @media only screen and (max-width: 545px) {
            .left_detail {
                -webkit-line-clamp: 3;
                font-size: 0.75rem;
                line-height: 0.9rem;
            }
            .teacher_detail {
                font-size: 0.875rem;
                -webkit-line-clamp: 3;
                line-height: 1.2rem;
            }
        }
    </style>
</head>


<body>
    <div class="header_logo">
        <img src="/static/Image/dark_logo.png">
    </div>
    <div class="home_nav">
        <ul class="home_nav_ul">
            <li class="home_nav_li">
                首页
            </li>
            <li class="home_nav_li">
                寻品介绍
            </li>
            <li class="home_nav_li">
                培训课程
            </li>
            <li class="home_nav_li">
                讲师介绍
            </li>
            <!-- <li class="home_nav_li">
                校区介绍
            </li> -->
            <li class="home_nav_li">
                活动资讯
            </li>
        </ul>
    </div>


    <div class="banner">
        <div class="swiper-container" id="swiper_banner">
            <div class="swiper-wrapper">
                <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): if( count($banner)==0 ) : echo "" ;else: foreach($banner as $key=>$value): ?>
                <div class="swiper-slide">
                    <a href="<?php echo url('/'.$value['url']); ?>" style="color:#4F94CD">
                        <img src="<?php echo htmlentities($value['img']); ?>" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
                        <!-- <img src="/static/Image/home_banner_test.jpg"> -->
                    </a>

                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <!-- 如果需要分页器-->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="base_detail">
        <div class="header_logo">
            <img src="/static/Image/home_activate.png" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
        </div>
        <div class="pc_activity activity">
            <div class="activity_left">
                <a href="<?php echo url('/activity/detail/'.$activity_left['id']); ?>">

                    <div class="left_flex_div">
                        <img src="<?php echo htmlentities($activity_left['img']); ?>" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
                        <div>
                            <p class="left_time"><?php echo htmlentities($activity_left['year']); ?>.<?php echo htmlentities($activity_left['month']); ?></p>
                            <p class="left_title"><strong><?php echo htmlentities($activity_left['title']); ?></strong></p>
                            <p class="left_detail"><?php echo htmlentities($activity_left['introduction']); ?></p>
                            <img src="/static/Image/look_more_test.png" alt="">
                        </div>
                    </div>
                </a>

            </div>

            <div class="activity_right">
                <?php if(is_array($activity_right) || $activity_right instanceof \think\Collection || $activity_right instanceof \think\Paginator): if( count($activity_right)==0 ) : echo "" ;else: foreach($activity_right as $key=>$value): ?>
                <a href="<?php echo url('/activity/detail/'.$value['id']); ?>">

                    <div class="Column">
                        <img class="right_item_img" src="<?php echo htmlentities($value['img']); ?>" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
                        <div class="right_flex_div">
                            <p class="right_title"><strong><?php echo htmlentities($value['title']); ?></strong></p>
                            <p class="right_time"><?php echo htmlentities($value['year']); ?>.<?php echo htmlentities($value['month']); ?></p>
                        </div>
                        <div style="width: 10%;margin: auto;text-align: center;">
                            <img class="right_item_arrow" src="/static/Image/home_arrow.png" alt="">
                        </div>
                    </div>
                </a>

                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="activity phone_activity">
            <div class="activity_left">
                <?php if(is_array($activity_right) || $activity_right instanceof \think\Collection || $activity_right instanceof \think\Paginator): if( count($activity_right)==0 ) : echo "" ;else: foreach($activity_right as $key=>$value): ?>
                <a href="<?php echo url('/activity/detail/'.$value['id']); ?>">

                    <div class="left_flex_div">
                        <img src="<?php echo htmlentities($value['img']); ?>" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
                        <div>
                            <p class="left_time"><?php echo htmlentities($value['year']); ?>.<?php echo htmlentities($value['month']); ?></p>
                            <p class="left_title"><?php echo htmlentities($value['title']); ?></p>
                            <p class="left_detail"><?php echo htmlentities($value['introduction']); ?></p>
                            <img src="/static/Image/look_more_test.png" alt="">
                        </div>
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="course ">
            <div class="header_logo">
                <img src="/static/Image/home_courses.png" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
            </div>
            <div class="course_container">
                <?php if(is_array($course) || $course instanceof \think\Collection || $course instanceof \think\Paginator): if( count($course)==0 ) : echo "" ;else: foreach($course as $key=>$value): ?>
                <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                    <div class="course_item">
                        <img style="width: 100%;" src="/static/Image/course_bg_<?php echo htmlentities($value['id']); ?>.png">
                        <p><strong><?php echo htmlentities($value['title']); ?></strong></p>
                    </div>
                </a>

                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
        <div class="teacher ">
            <div class="header_logo">
                <img src="/static/Image/home_teacher.png" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
            </div>
            <div class="swiper-container" id="swiper_teacher">
                <div class="swiper-wrapper">
                    <?php if(is_array($teacher) || $teacher instanceof \think\Collection || $teacher instanceof \think\Paginator): if( count($teacher)==0 ) : echo "" ;else: foreach($teacher as $key=>$value): ?>
                    <div class="swiper-slide">
                        <a href="<?php echo url('/teacher/detail/'.$value['id']); ?>">
                            <img class="avatar" src="<?php echo htmlentities($value['teacher_avatar']); ?>" alt="">
                            <p class="teacher_title">讲师介绍</p>
                            <p class="teacher_name"><strong><?php echo htmlentities($value['teacher_name']); ?></strong></p>
                            <p class="teacher_detail"><?php echo htmlentities($value['introduction']); ?></p>
                            <img class="more_btn" src="/static/Image/teacher_more.png" alt="">

                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <p class="bottom_slogn">Together, in discovering coffee.</p>

        <div style="position:relative;">
            <img class="bottom_logo" src="/static/Image/light_logo.png" alt="寻品咖啡学院,上海咖啡师培训,北京咖啡师培训,咖啡培训机构">
            <a href="https://www.xiaohongshu.com/user/profile/5f020827000000000101f8c0?xhsshare=WeixinSession&appuid=5b7e0cb0499cb00001289cf1&apptime=1656386964"><img class="bottom_redbook" src="/static/Image/redbook.png" alt=""></a>

            <img id="QR_code" class="bottom_wechat" src="/static/Image/wechat.png" alt="">

            <div class="back display" id="pop">
                <div class="pop_content">
                    <img src="/static/Image/jt_qr_code.png" alt="">
                </div>
            </div>

        </div>

        <div class="bottom_detail">
            <div class="bottom_detail_left">
                <p class="bottom_phone">联系电话：<?php echo htmlentities($bottom_phone); ?></p>

                <p class="bottom_address">北京校区：<?php echo htmlentities($bottom_bj); ?></p>
                <p class="bottom_address">上海校区：<?php echo htmlentities($bottom_sh); ?></p>
            </div>
            <ul class="bottom_ul">
                <li><a href="<?php echo url('/course/list'); ?>">培训课程</a></li>
                <li><a href="<?php echo url('/introduced'); ?>">寻品介绍</a></li>
                <li><a href="<?php echo url('/teacher/list'); ?>">讲师介绍</a></li>
                <!-- <li><a href="<?php echo url('/address/list'); ?>">校区介绍</a></li> -->
                <li><a href="<?php echo url('/activity/list/1'); ?>">活动资讯</a></li>
            </ul>
        </div>
        <div class="bottom_line"></div>
        <p class="copyright">Copyright © 2022-2023 北京寻品咖啡有限责任公司 All Rights Reserved. 版权备案号：京ICP备2022018085号</p>
    </div>
</body>
<script src="/static/js/jquery-2.1.1.min.js"></script>

<script>
    $(".copyright").on('click', function() {
        window.location.href = "https://beian.miit.gov.cn/";
    });
    $(".copyright").on('click', function() {
        window.location.href = "https://beian.miit.gov.cn/";
    });
    $('#QR_code').on('click', function() {
        $("#pop").removeClass("display");
    });
    $(".back").on('click', function() {
        $("#pop").addClass("display");
    });
    new Swiper('#swiper_banner', {
        loop: true,
        autoplay: true,

        pagination: {
            el: '.swiper-pagination',
            observer: true,
            observeParents: true
        }
    });
    let viewportWidth = window.innerWidth;
    // alert(viewportWidth);
    var slidersPer = 0;
    if (viewportWidth <= 768) {
        slidersPer = 1.1;
    } else {
        slidersPer = 1.9;
    }
    new Swiper('#swiper_teacher', {
        slidesPerView: slidersPer,
        scrollbar: {
            el: '.swiper-scrollbar',
        }
    });
    // $(".home_nav_li").bind("click", function() {

    //     alert($(this).text());

    // })
    $(".home_nav_li").bind('click', function(index) {

        var index = $(".home_nav_li").index($(this));
        setTimeout(() => {
            switch (index) {
                case 0:
                    window.location.href = "<?php echo url('/home'); ?>";
                    break;

                case 1:
                    window.location.href = "<?php echo url('/introduced'); ?>";
                    break;

                case 2:
                    window.location.href = "<?php echo url('/course/list'); ?>";
                    break;

                case 3:
                    window.location.href = "<?php echo url('/teacher/list'); ?>";
                    break;
                    // case 4:
                    //     window.location.href = "<?php echo url('/address/list'); ?>";
                    //     break;

                case 4:
                    window.location.href = "<?php echo url('/activity/list/1'); ?>";
                    break;

                default:
                    break;
            }
        }, 500);
    })
</script>

</html>
