<?php /*a:1:{s:67:"/home/wwwroot/default/tp/app/teacher/view/index/teacher_detail.html";i:1665296675;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title> 寻品咖啡sca讲师<?php echo htmlentities($teacher_data['name']); ?> | 北京寻品咖啡有限责任公司 seek-gift,北京咖啡师培训，上海咖啡师培训</title>
    <meta name="keywords" content="寻品,寻品咖啡,寻品咖啡学院,咖啡师姜涛,上海咖啡师培训,北京咖啡师培训,咖啡培训机构,咖啡拉花培训,咖啡店加盟,中国sca咖啡认证培训">
    <meta name="description" content="seek-gift|寻品咖啡，位于北京和上海的咖啡培训，是一家专注于咖啡创业规划与咖啡从业者职业生涯规划的创新型咖啡培训机构。由sca认证老师授课，在SCA精品咖啡协会的认证技能课程体系中加入不同职岗的综合素质训练。">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/static/css/base.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/static/Image/icon.svg" />

    <style>
        .nav-item:nth-child(4) {
            color: white;
            background: #1B44DB;
            font-family: SourceHanSansCN-Medium;
            font-size: 0.875rem;
            padding: 0 1.25rem;
            border-radius: 0.937rem;
            margin: 0 1%;
        }
        
        .teacher_container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 3.6% 2.3% 2.9% 2.3%;
        }
        
        .teacher_introduce {
            margin: 5% 4.8% 6.25% 4.8%;
        }
        
        .teacher_title {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.375rem;
            color: #303030;
        }
        
        .teacher_avatar {
            float: right;
            width: 25%;
            overflow: hidden;
        }
        
        .teacher_name {
            font-family: SourceHanSansCN-Bold;
            font-size: 2.375rem;
            color: #303030;
            margin-top: 1%;
            margin-bottom: 1.5%;
        }
        
        .teacher_introduce ul {
            width: 70%;
        }
        
        .teacher_introduce li {
            font-family: SourceHanSansCN-Regular;
            font-size: 1.125rem;
            color: #474747;
            margin-bottom: 1%;
        }
        
        .teacher_introduce li span {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .teacher_detail {
            margin: 0 4.8% 5.5% 4.8%;
        }
        
        .line {
            width: 100%;
            border: .031rem solid #DDDDDD;
            margin-top: 1.3%;
            margin-bottom: 1.9%;
        }
        
        .content {
            word-wrap: break-word;
            word-break: break-all;
        }
        
        .content img {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        
        .teacher_course {
            margin: 0 4.8% 5.5% 4.8%;
        }
        
        .teacher_detail div {
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        .teacher_detail_div {
            border: 0.8% solid #00000000;
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #303030;
            margin-bottom: 5%;
            width: 30%;
        }
        
        .teacher_detail_div p {
            text-align: center;
        }
        
        .teacher_detail_div img {
            margin-bottom: 3%;
            width: 100%;
        }
        
        @media screen and (max-width: 1135px) {
            .teacher_name {
                font-size: 2.125rem;
            }
            .teacher_introduce li,
            .teacher_introduce li span {
                font-size: 1.125rem;
            }
            .teacher_title {
                font-size: 1.375rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .nav-item:nth-child(4) {
                font-family: SourceHanSansCN-Bold;
                margin: 2.5% 1rem;
                text-align: center;
                font-size: 1.375rem;
                color: white;
                border: 0rem solid white;
                border-radius: 0;
            }
            .teacher_name {
                font-size: 1.35rem;
            }
            .teacher_introduce li,
            .teacher_introduce li span {
                font-size: 0.875rem;
                margin-bottom: 0.8rem;
            }
            .teacher_title {
                font-size: 1.375rem;
            }
            .teacher_avatar {
                float: none;
                width: 50%;
                margin: 0.8rem 0;
            }
            .teacher {
                text-align: center;
            }
            .teacher_introduce ul {
                width: 100%;
            }
            .teacher_detail div {
                font-size: 0.875rem;
            }
            .teacher_detail_div {
                font-size: 1.125rem;
                color: #303030;
                text-align: center;
                width: 100%;
            }
            .teacher_container {
                justify-content: center;
            }
        }
    </style>
</head>


<body>
    <div class="nav" style="background-image: url(/static/Image/teacher_header.jpg);">
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
        <p class="nav_title">讲师介绍</p>
    </div>
    <div class="base_detail">

        <div class="teacher">
            <div class="teacher_introduce">
                <p class="teacher_title">讲师介绍</p>
                <div style="width: 100%;overflow: hidden;">
                    <img class="teacher_avatar" src="<?php echo htmlentities($teacher_data['avatar']); ?>" alt="">
                    <p class="teacher_name"><?php echo htmlentities($teacher_data['name']); ?></p>
                    <?php echo htmlspecialchars_decode($teacher_data['title']); ?>
                </div>
            </div>
            <div class="teacher_detail">
                <p class="teacher_title">详情介绍</p>
                <div class="line"></div>
                <div class="content">
                    <?php echo htmlspecialchars_decode($teacher_data['detail']); ?>
                </div>
            </div>
            <div class="teacher_course">
                <p class="teacher_title">相关课程</p>
                <div class="line"></div>
                <div class="teacher_container">
                    <?php if(is_array($course_data) || $course_data instanceof \think\Collection || $course_data instanceof \think\Paginator): if( count($course_data)==0 ) : echo "" ;else: foreach($course_data as $key=>$value): ?>

                    <div class="teacher_detail_div">
                        <a href="<?php echo url('/course/detail/'.$value['id']); ?>">
                            <img src="/static/Image/course_bg_<?php echo htmlentities($value['id']); ?>.png">
                            <p><strong><?php echo htmlentities($value['title']); ?></strong></p>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
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