<?php /*a:1:{s:65:"/home/wwwroot/default/tp/app/course/view/index/course_detail.html";i:1665296675;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title> <?php echo htmlentities($data['title']); ?> | 北京寻品咖啡有限责任公司 seek-gift,北京咖啡师培训，上海咖啡师培训</title>
    <meta name="keywords" content="寻品,寻品咖啡,寻品咖啡学院,咖啡师姜涛,上海咖啡师培训,北京咖啡师培训,咖啡培训机构,咖啡拉花培训,咖啡店加盟,中国sca咖啡认证培训">
    <meta name="description" content="seek-gift|寻品咖啡，位于北京和上海的咖啡培训，是一家专注于咖啡创业规划与咖啡从业者职业生涯规划的创新型咖啡培训机构。由sca认证老师授课，在SCA精品咖啡协会的认证技能课程体系中加入不同职岗的综合素质训练。">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="/static/Image/icon.svg" />

    <link rel="stylesheet" href="/static/css/base.css" type="text/css">
    <style>
        .nav-item:nth-child(3) {
            color: white;
            background: #1B44DB;
            font-family: SourceHanSansCN-Medium;
            font-size: 0.875rem;
            padding: 0 1.25rem;
            border-radius: 0.9375rem;
            margin: 0 1%;
        }
        
        .nav {
            padding-top: 7rem;
            padding-bottom: 4rem;
        }
        /* .nav_title {
                margin-top: 0rem;
            } */
        
        .nav_title {
            font-family: SourceHanSansCN-Heavy;
            font-size: 2.5rem;
            color: #FFFFFF;
            text-align: center;
            margin-top: 0%;
        }
        
        .nav_course_title {
            text-align: center;
            font-family: SourceHanSansCN-Heavy;
            font-size: 3.25rem;
            color: #FFFFFF;
            margin: 0;
        }
        
        .nav_course_day {
            font-family: SourceHanSansCN-Heavy;
            font-size: 2.5rem;
            color: #FFFFFF;
            text-align: center;
        }
        
        .nav_subtitle {
            text-align: center;
            font-family: SourceHanSansCN-Heavy;
            font-size: 1.75rem;
            color: #FFFFFF;
            margin: 0;
        }
        
        .big_box {
            margin: 1.66rem;
            border: 0.0625rem solid #979797;
            border-radius: 2.14rem;
            overflow: hidden;
        }
        
        .course_title {
            background: #efefef;
            border-bottom: 0.0625rem solid #979797;
            padding: 1.6625rem 3.325rem;
        }
        
        .e_title {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.375rem;
            line-height: 1.5rem;
            color: #303030;
        }
        
        .c_title {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.625rem;
            color: #1B44DB;
        }
        
        .learning_object_detail {
            padding: 5%;
            display: flex;
            gap: 1.25rem;
            flex-wrap: wrap;
            /* justify-content: space-between; */
        }
        
        .learning_object_detail_item {
            display: flex;
            width: 23%;
        }
        
        .learning_object_detail_item img {
            width: 4.1125rem;
            height: 4.1125rem;
        }
        
        .learning_object_detail_item p {
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #303030;
            margin-left: 1.6875rem;
        }
        
        .course_objectives_basics {
            display: flex;
            padding: 3.85rem 1.575rem 0;
            flex-wrap: wrap;
            gap: 2%;
        }
        
        .basics_item {
            width: 23.5%;
            margin-bottom: 3.85rem;
            position: relative;
        }
        
        .basics_item_title {
            position: absolute;
            top: -0.72rem;
            padding: .12rem 1.56rem;
            background: #231916;
            color: white;
            border-radius: 1.57rem;
            font-family: SourceHanSansCN-Bold;
            font-size: 1.2rem;
            color: #FFFFFF;
        }
        
        .basics_item_detail {
            padding: 1.6875rem;
            background: #F7F7F7;
            border-radius: 1.4rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .course_objectives_advanced {
            display: flex;
            padding: 0rem 1.575rem 0;
            flex-wrap: wrap;
            gap: 2%;
        }
        
        .advanced_item {
            width: 23.5%;
            margin-bottom: 3.85rem;
            position: relative;
        }
        
        .advanced_item_title {
            position: absolute;
            top: -0.72rem;
            padding: .12rem 1.56rem;
            background: #1B43DB;
            color: white;
            border-radius: 1.57rem;
            font-family: SourceHanSansCN-Bold;
            font-size: 1.2rem;
            color: #FFFFFF;
        }
        
        .advanced_item_detail {
            padding: 1.6875rem;
            background: #F7F7F7;
            border-radius: 1.4625rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        h1 {
            margin: 2.25rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        h2 {
            margin: 2.25rem 2.25rem 0em 2.25rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .certificate_detail {
            display: flex;
            justify-content: space-evenly;
            margin: 2.25rem;
        }
        
        .certificate_detail_item {
            text-align: center;
        }
        
        .certificate_detail_item p {
            height: 7.5rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1rem;
        }
        
        .certificate_detail_item img:first-child {
            width: 40%;
        }
        
        .certificate_detail_item img:last-child {
            width: 90%;
        }
        
        .sample_certificate {
            width: 0.0625rem;
        }
        
        .welfare_detail {
            margin-top: 2.625rem;
            display: flex;
            justify-content: space-evenly;
        }
        
        .welfare_detail_item {
            text-align: center;
        }
        
        .welfare_detail_item p {
            margin: 1.443rem 0 2.812rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .welfare_detail_item img {
            width: 4.593rem;
            height: 4.593rem;
        }
        
        .pc_syllabus {
            display: block;
        }
        
        .phone_syllabus {
            display: none;
        }
        
        .outline_item {
            padding: 2.45rem;
        }
        
        .outline_item table {
            border: 0.0625rem solid #AFAFAF;
            width: 100%
        }
        
        .outline_item table tr {
            border: 0.0625rem solid #AFAFAF;
            text-align: center;
        }
        
        .outline_item_day {
            border: 0.0625rem solid #AFAFAF;
            width: 30%;
            padding: 1.125rem 0;
            font-family: SourceHanSansCN-Bold;
            font-size: 1.125rem;
            color: #303030;
        }
        
        .outline_item_detail {
            border: 0.0625rem solid #AFAFAF;
            width: 70%;
            padding: 1.125rem 1.125rem;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .about_instructor_detail {
            padding: 5.25rem 3.5rem 4.375rem 3.5rem;
        }
        
        .teacher_avatar {
            width: 25%;
            text-align: right;
            float: right;
        }
        
        .teacher_avatar img {
            width: 60%;
            margin-bottom: 5%;
        }
        
        .teacher_name {
            font-family: SourceHanSansCN-Bold;
            font-size: 2.9rem;
            color: #303030;
            margin-bottom: 1.19rem;
        }
        
        .about_instructor_detail_item {
            width: 100%;
        }
        
        .about_instructor_detail_item li {
            font-family: SourceHanSansCN-Regular;
            font-size: 1.125rem;
            color: #474747;
            margin-bottom: 1.125rem;
        }
        
        .about_instructor_detail_item li span {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .teacher_line {
            width: 90%;
            height: 0.0625rem;
            margin: 2% 5%;
            background: #DDDDDD;
        }
        
        .course_price {
            background: url(/static/Image/course_price_bg.png) no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: SourceHanSansCN-Bold;
            font-size: 1.75rem;
            color: #FFFFFF;
            padding: 1.1% 2.2%;
        }
        
        @media screen and (max-width: 1135px) {
            .nav_title {
                font-size: 2rem;
            }
            .nav_course_title {
                font-size: 2.75rem;
            }
            .nav_course_day {
                font-size: 2rem;
            }
        }
        
        @media only screen and (max-width: 1255px) {
            .course_price {
                font-size: 1.125rem;
            }
            .learning_object_detail_item {
                width: 46%;
            }
        }
        
        @media only screen and (max-width: 920px) {
            .course_price {
                font-size: 1rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .nav {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
            .nav_title {
                font-size: 1.5rem;
                margin-bottom: 0%;
            }
            .nav_course_title {
                font-size: 2.25rem;
            }
            .nav_course_day {
                font-size: 1.5rem;
            }
            .nav-item:nth-child(3) {
                font-family: SourceHanSansCN-Bold;
                margin: 2.5% 1rem;
                text-align: center;
                font-size: 1.375rem;
                color: white;
                border: 0rem solid white;
                border-radius: 0;
            }
            .big_box {
                margin: 0.831rem;
                border-radius: 0.831rem;
            }
            .course_title {
                padding: 0.7rem 1.6625rem 0.2rem 1.6625rem;
            }
            .e_title {
                font-size: 1rem;
                line-height: 1rem;
            }
            .c_title {
                font-size: 1rem;
                font-size: 1rem;
            }
            .learning_object_detail {
                padding: 0.831rem;
                gap: 1.55rem;
                flex-wrap: wrap;
            }
            .learning_object_detail_item {
                width: 100%;
            }
            .learning_object_detail_item img {
                width: 2.056rem;
                height: 2.056rem;
            }
            .learning_object_detail_item p {
                margin: auto 0 auto 0.6rem;
                font-size: 0.875rem;
            }
            .course_objectives_basics {
                padding: 1.925rem 0.7875rem 0;
            }
            .basics_item {
                width: 100%;
                margin-bottom: 1.925rem;
            }
            .basics_item_title {
                top: -0.6rem;
                padding: 0.0025rem 0.6rem;
                border-radius: 0.7875rem;
                font-size: 0.875rem;
            }
            .basics_item_detail {
                padding: 1.5rem 1.5rem 1rem;
                border-radius: 0.7312rem;
                font-size: 0.875rem;
            }
            .course_objectives_advanced {
                padding: 0em 0.7875rem 0;
            }
            .advanced_item {
                width: 100%;
                margin-bottom: 1.925rem;
            }
            .advanced_item_title {
                top: -0.6rem;
                padding: 0.0025rem 0.6rem;
                border-radius: 0.7875rem;
                font-size: 0.875rem;
            }
            .advanced_item_detail {
                padding: 1.5rem 1.5rem 1rem;
                border-radius: 0.7312rem;
                font-size: 0.875rem;
            }
            h1 {
                margin: 0.875rem;
                font-size: 0.875rem;
            }
            h2 {
                font-size: 0.875rem;
            }
            .certificate_detail {
                flex-wrap: wrap;
                margin: 0 1.75rem 1.75rem;
            }
            .certificate_detail_item {
                width: 100%;
                margin-bottom: 4.375rem;
            }
            .certificate_detail_item p {
                margin-bottom: 1.675rem;
                font-size: 0.875rem;
                height: 2.5rem;
            }
            .certificate_detail_item img {
                width: 80%;
            }
            .welfare_detail {
                flex-wrap: wrap;
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
            .welfare_detail_item {
                width: 100%;
            }
            .welfare_detail_item p {
                margin: 0.39rem 0 .75rem;
                font-size: 0.875rem;
            }
            .welfare_detail_item img {
                width: 2.296rem;
                height: 2.296rem;
            }
            .pc_syllabus {
                display: none;
            }
            .phone_syllabus {
                display: block;
            }
            .outline_item {
                padding: 1.225rem;
            }
            .outline_item_day {
                padding: 0.3rem 0;
                font-size: 0.875rem;
            }
            .outline_item_detail {
                padding: 0.3rem 0.875rem;
                font-size: 0.875rem;
            }
            .about_instructor_detail {
                flex-direction: column;
                padding: 1.625rem 1.75rem 2.187rem 1.75rem;
            }
            .about_instructor_detail img {
                margin-bottom: 0.8rem;
                float: none;
            }
            .teacher_name {
                font-size: 1.35rem;
                margin-bottom: 1rem;
            }
            .about_instructor_detail_item li {
                font-size: 0.875rem;
                margin-bottom: 0.8rem;
            }
            .about_instructor_detail_item li span {
                font-size: 0.875rem;
            }
            .about_instructor_detail_item {
                width: 100%;
                text-align: center;
            }
            .teacher_avatar {
                width: 50%;
            }
            .course_price {
                background: #1B43DB;
                font-size: 0.875rem;
            }
        }
    </style>
</head>


<body>
    <div class="nav" style="background-image: url(/static/Image/course_header_<?php echo htmlentities($course_id); ?>.jpg);">
        <div class="nav_detail">
            <div class="pc_nav">
                <img src="/static/Image/dark_logo.png">
            </div>
            <div class="phone_nav">
                <a href="<?php echo url('/home'); ?>">
                    <img src="/static/Image/dark_logo.png">
                </a>
                <button class="btn-nav">
                  <span class="icon-bar top"></span>
                  <span class="icon-bar middle"></span>
                  <span class="icon-bar bottom"></span>
                </button>
            </div>

            <div class="nav-content hideNav hidden">
                <ul class="nav-list">
                    <li class="nav-item" style="">
                        <span class="item_skin">首页</span>
                    </li>
                    <li class="nav-item">
                        <span class="item_skin">寻品介绍</span>
                    </li>
                    <li class="nav-item">
                        <span class="item_skin">培训课程</span>
                    </li>
                    <li class="nav-item">
                        <span class="item_skin">讲师介绍</span>
                    </li>
                    <!-- <li class="nav-item">
                        <span class="item_skin">校区介绍</span>
                    </li> -->
                    <li class="nav-item">
                        <span class="item_skin">活动资讯</span>
                    </li>
                </ul>
            </div>
        </div>
        <p class="nav_title">课程培训</p>
        <p class="nav_course_title"><strong><?php echo htmlentities($data['title']); ?></strong></p>
        <p class="nav_course_day">(全日制)</p>
    </div>
    <div class="base_detail">

        <div class="course_price">
            <p>课程人数 <?php echo htmlentities($data['num']); ?>人</p>
            <p>学费 ￥<?php echo htmlentities($data['price']); ?>（<?php echo htmlentities($data['days']); ?>天）</p>
        </div>
        <div class="big_box">
            <div class="course_title">
                <p class="e_title">LEARNING</p>
                <p class="e_title">OBJECT</p>
                <p class="c_title">学习对象 ★</p>
            </div>
            <div class="learning_object_detail">
                <?php echo htmlspecialchars_decode($data['learning_object']); ?>
            </div>
        </div>
        <?php if($data['course_objectives'] != ''): ?>
        <div class="big_box">
            <div class="course_title">
                <p class="e_title">COURSE</p>
                <p class="e_title">OBJECTIVES</p>
                <p class="c_title">课程目标 ★</p>
            </div>
            <div>
                <?php echo htmlspecialchars_decode($data['course_objectives']); ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="big_box" style="display: flex;">
            <div style="width: 50%;">
                <div class="course_title">
                    <p class="e_title">LEARNING</p>
                    <p class="e_title">FORM</p>
                    <p class="c_title">学习形式 ★</p>
                </div>
                <div>
                    <h1><?php echo htmlentities($data['learning_form']); ?></h1>
                </div>
            </div>
            <div style="width: 50%;border-left: 0.0625rem solid #979797;">
                <div class="course_title">
                    <p class="e_title">LEARNING</p>
                    <p class="e_title">CYCLE</p>
                    <p class="c_title">学习周期 ★</p>
                </div>
                <div>
                    <h1><?php echo htmlentities($data['learning_cycle']); ?></h1>
                </div>
            </div>
        </div>
        <div class="big_box ">
            <div class="course_title">
                <p class="e_title">TUITION</p>
                <p class="e_title">INCLUDES</p>
                <p class="c_title">学费包含 ★</p>
            </div>
            <div>
                <h1>
                    <?php echo htmlspecialchars_decode($data['tuition_includes']); ?>
                </h1>
            </div>
        </div>
        <?php if($data['about_certificates'] != ''): ?>
        <div class="big_box ">
            <div class="course_title">
                <p class="e_title">ABOUT</p>
                <p class="e_title">CERTIFICATES</p>
                <p class="c_title">关于证书 ★</p>
            </div>
            <div>
                <?php echo htmlspecialchars_decode($data['about_certificates']); ?>
            </div>
        </div><?php endif; ?>
        <div class="big_box">
            <div class="course_title">
                <p class="e_title">SYLLABUS</p>
                <p class="c_title">课程大纲 ★</p>
            </div>
            <div class="outline_item pc_syllabus">
                <?php echo htmlspecialchars_decode($syllabus_pc); ?>
            </div>
            <div class="outline_item phone_syllabus">
                <?php echo htmlspecialchars_decode($syllabus_phone); ?>
            </div>
        </div>
        <?php if($data['course_benefits'] != ''): ?>
        <div class="big_box">
            <div class="course_title">
                <p class="e_title">COURSE</p>
                <p class="e_title">BENEFITS</p>
                <p class="c_title">课程福利 ★</p>
            </div>
            <div>
                <?php echo htmlspecialchars_decode($data['course_benefits']); ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="big_box">
            <div class="course_title">
                <p class="e_title">ABOUT</p>
                <p class="e_title">INSTRUCTOR</p>
                <p class="c_title">讲师介绍 ★</p>
            </div>
            <?php if(is_array($teacher_data) || $teacher_data instanceof \think\Collection || $teacher_data instanceof \think\Paginator): $k = 0; $__LIST__ = $teacher_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($k % 2 );++$k;if($k != '1'): ?>
            <div class="teacher_line"></div>
            <?php endif; ?>
            <div class="about_instructor_detail">
                <div class="about_instructor_detail_item">
                    <img class="teacher_avatar" src="<?php echo htmlentities($value['teacher_avatar']); ?>" alt="">
                    <p class="teacher_name"><?php echo htmlentities($value['teacher_name']); ?></p>
                    <?php echo htmlspecialchars_decode($value['teacher_title']); ?>
                </div>
                <!-- <div class="teacher_avatar"><img src="<?php echo htmlentities($value['teacher_avatar']); ?>" alt=""></div> -->
            </div>
            <div style="clear: both;"></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

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
    $('#QR_code').on('click', function() {
        $("#pop").removeClass("display");
    });
    $(".back").on('click', function() {
        $("#pop").addClass("display");
    });
    $(window).load(function() {
        $('.btn-nav').on('click tap', function() {
            $('.nav-content').toggleClass('showNav hideNav').removeClass('hidden');
            $(this).toggleClass('animated');
            var is_animated = $(".animated").length;
            if (is_animated) {
                $('.phone_nav img').attr('src', '/static/Image/light_logo.png');

            } else {
                $('.phone_nav img').attr('src', '/static/Image/dark_logo.png');


            }
        });
    });
    $(".item_skin").bind('click', function(index) {
        $('.btn-nav').click();

        var index = $(".item_skin").index($(this));
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