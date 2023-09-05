<?php /*a:1:{s:63:"/home/wwwroot/default/tp/app/course/view/index/course_list.html";i:1665296675;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title> 寻品咖啡课程 | 北京寻品咖啡有限责任公司 seek-gift,北京咖啡师培训，上海咖啡师培训</title>
    <meta name="keywords" content="寻品,寻品咖啡,寻品咖啡学院,咖啡师姜涛,上海咖啡师培训,北京咖啡师培训,咖啡培训机构,咖啡拉花培训,咖啡店加盟,中国sca咖啡认证培训">
    <meta name="description" content="seek-gift|寻品咖啡，位于北京和上海的咖啡培训，是一家专注于咖啡创业规划与咖啡从业者职业生涯规划的创新型咖啡培训机构。由sca认证老师授课，在SCA精品咖啡协会的认证技能课程体系中加入不同职岗的综合素质训练。">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/static/css/base.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/static/Image/icon.svg" />

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
        
        .course_time {
            margin: -2% 2%;
        }
        
        .course_title {
            margin-top: 4%;
            padding-bottom: 2%;
            font-family: SourceHanSansCN-Bold;
            font-size: 1.375rem;
            color: #303030;
        }
        
        .course_container {
            margin: 1.5% 3.3% 3.7% 3.3%;
            display: grid;
            grid-gap: 2.5%;
            grid-template-columns: 31.6% 31.6% 31.6%;
            grid-template-rows: auto;
            grid-auto-flow: row dense;
        }
        
        .course_item {
            padding-right: 1.6%;
            font-family: SourceHanSansCN-Normal;
            color: #303030;
            text-align: center;
            font-size: 1.125rem;
            margin: 1% 0 5%;
        }
        
        .course_item img {
            margin-bottom: 3%;
            width: 50%;
        }
        
        .time_title {
            font-family: SourceHanSansCN-Medium;
            font-size: 1.25rem;
            color: #303030;
            padding: 1% 2%;
            background: rgb(247, 247, 247);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 0rem;
        }
        
        .time_detail_dark {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgb(247, 247, 247);
            padding: 3%;
            border-radius: 1.25rem;
        }
        
        .time_detail {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            /* min-height: 100%; */
            padding: 3%;
        }
        
        .time_detail_title {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.75rem;
            color: #3B65FF;
        }
        
        .time_detail_price {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.75rem;
            color: #303030;
        }
        
        .time_detail_days {
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #303030;
        }
        
        .detail_schedule {
            font-family: SourceHanSansCN-Normal;
            font-size: 1.0625rem;
        }
        
        .detail_schedule p {
            margin-bottom: 0.3125rem;
        }
        
        .phone_schedule {
            display: none;
        }
        
        .pc_schedule {
            display: block;
        }
        
        .more_btn {
            width: 1.5625rem;
            height: 1.5625rem;
            margin-bottom: 1.5%;
        }
        
        @media screen and (max-width: 1135px) {
            .course_title {
                font-size: 1.625rem;
            }
            .course_item {
                font-size: 1.25rem;
            }
            .time_title {
                font-size: 1.125rem;
            }
            .time_detail_title {
                font-size: 1.625rem;
            }
            .time_detail_price {
                font-size: 1.625rem;
            }
            .time_detail_days {
                font-size: 1rem;
            }
            .detail_schedule {
                font-size: 0.9375rem;
            }
        }
        
        @media only screen and (max-width: 900px) {
            .more_btn {
                width: 1.25rem;
                height: 1.25rem;
            }
            .time_detail_title {
                font-size: 1.5rem;
            }
        }
        
        @media only screen and (max-width: 830px) {
            .course_title {
                margin-top: 0%;
                padding-bottom: 0%;
                font-family: SourceHanSansCN-Bold;
                font-size: 1.375rem;
                color: #303030;
            }
            .time_detail_title {
                font-size: 1.125rem;
            }
            .time_detail_price {
                font-size: 0.9375rem;
            }
            .time_detail_days {
                font-size: 0.9375rem;
            }
            .course_item {
                font-size: 1.125rem;
                margin: 1% 0 5%;
            }
            .phone_schedule {
                display: block;
            }
            .phone_schedule .time_detail_dark {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 1% 2%;
                border-radius: 0rem;
            }
            .phone_schedule .time_detail {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 1% 2%;
                border-radius: 0rem;
            }
            .pc_schedule {
                display: none;
            }
            .detail_schedule {
                font-size: 0.875rem;
            }
            .course_container {
                grid-template-columns: 100%;
                grid-gap: 1%;
            }
            .time_detail div {
                margin-bottom: 0.3125rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .nav-item:nth-child(3) {
                font-family: SourceHanSansCN-Bold;
                margin: 2.5% 1rem;
                text-align: center;
                font-size: 1.375rem;
                color: white;
                border: 0rem solid white;
                border-radius: 0;
            }
            .course_title {
                margin-top: 20%;
                padding-bottom: 0%;
                font-family: SourceHanSansCN-Bold;
                font-size: 1.25rem;
                color: #303030;
                padding: 0 2%;
            }
            .time_detail_title {
                font-size: 1.125rem;
            }
            .time_detail_price {
                font-size: 0.9375rem;
            }
            .time_detail_days {
                font-size: 0.9375rem;
            }
            .course_item {
                font-size: 1.125rem;
                margin: 1% 0 5%;
            }
            .phone_schedule {
                display: block;
            }
            .phone_schedule .time_detail_dark {
                display: block;
                padding: 4%;
            }
            .phone_schedule .time_detail {
                display: block;
                padding: 4%;
            }
            .phone_schedule .course_title {
                margin-top: 0%;
                padding-bottom: 0%;
                font-family: SourceHanSansCN-Bold;
                font-size: 1.25rem;
                color: #303030;
                padding: 0 2%;
            }
            .pc_schedule {
                display: none;
            }
            .detail_schedule {
                font-size: 0.7rem;
            }
            .course_container {
                grid-template-columns: 100%;
                grid-gap: 1%;
            }
            .time_detail div {
                margin: 0 auto 0.3125rem;
            }
            .time_detail_dark div {
                margin: 0 auto 0.3125rem;
            }
        }
    </style>
</head>


<body>
    <div class="nav" style="background-image: url(/static/Image/course_header.jpg);">
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
    </div>
    <div class="base_detail">

        <div class="course_time">
            <h1 class="course_title">寻品技能课程</h1>
            <div class="course_container">
                <?php if(is_array($skills) || $skills instanceof \think\Collection || $skills instanceof \think\Paginator): if( count($skills)==0 ) : echo "" ;else: foreach($skills as $key=>$value): ?>
                <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                    <div class="course_item">
                        <img style="width: 100%;" src="/static/Image/course_bg_<?php echo htmlentities($value['id']); ?>.png">
                        <p><strong><?php echo htmlentities($value['title']); ?></strong></p>
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <h1 class="course_title">寻品商业课程</h1>
            <div class="course_container">
                <?php if(is_array($business) || $business instanceof \think\Collection || $business instanceof \think\Paginator): if( count($business)==0 ) : echo "" ;else: foreach($business as $key=>$value): ?>
                <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                    <div class="course_item">
                        <img style="width: 100%;" src="/static/Image/course_bg_<?php echo htmlentities($value['id']); ?>.png">
                        <p><strong><?php echo htmlentities($value['title']); ?></strong></p>
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="pc_schedule">
                <h1 class="course_title">2022年排课计划</h1>

                <ul>
                    <li class="time_title">
                        <p>时间&地点</p>
                        <p>课程名称&费用</p>
                    </li>
                    <?php if(is_array($time) || $time instanceof \think\Collection || $time instanceof \think\Paginator): $k = 0; $__LIST__ = $time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($k % 2 );++$k;if($k%2 == 0): ?>
                    <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                        <li class="time_detail_dark"><?php else: ?>
                            <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                                <li class="time_detail"><?php endif; ?>

                                    <div class="detail_schedule"><?php echo htmlspecialchars_decode($schedule[$value['id']]["pc_time"]); ?></div>
                                    <div style="text-align: right;">
                                        <p class="time_detail_title"><strong><?php echo htmlentities($value['title']); ?></strong><span>                            
                                            <img class="more_btn" src="/static/Image/teacher_more.png" alt="">
                                        </span></p>

                                        <span class="time_detail_price"><?php echo htmlentities($value['price']); ?></span><span class="time_detail_days"> / <?php echo htmlentities($value['days']); ?>天</span>
                                    </div>
                                </li>
                            </a>

                            <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="phone_schedule">
                <ul>
                    <li class="time_title">
                        <h1 class="course_title">2022年排课计划</h1>

                    </li>
                    <?php if(is_array($time) || $time instanceof \think\Collection || $time instanceof \think\Paginator): $k = 0; $__LIST__ = $time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($k % 2 );++$k;if($k%2 == 0): ?>
                    <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                        <li class="time_detail_dark"><?php else: ?>
                            <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                                <li class="time_detail"><?php endif; ?>
                                    <div>
                                        <span class="time_detail_title"><?php echo htmlentities($value['title']); ?></span>
                                        <span class="time_detail_price"><?php echo htmlentities($value['price']); ?></span><span class="time_detail_days"> / <?php echo htmlentities($value['days']); ?>天</span>
                                    </div>
                                    <div class="detail_schedule"><?php echo htmlspecialchars_decode($schedule[$value['id']]["pc_time"]); ?></div>
                                </li>
                            </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
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