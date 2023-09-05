<?php /*a:1:{s:66:"/home/wwwroot/default/tp/app/teacher/view/index/teachers_list.html";i:1665296675;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title> 寻品咖啡sca讲师 | 北京寻品咖啡有限责任公司 seek-gift,北京咖啡师培训，上海咖啡师培训</title>
    <meta name="keywords" content="寻品,寻品咖啡,寻品咖啡学院,咖啡师姜涛,上海咖啡师培训,北京咖啡师培训,咖啡培训机构,咖啡拉花培训,咖啡店加盟,中国sca咖啡认证培训">
    <meta name="description" content="seek-gift|寻品咖啡，位于北京和上海的咖啡培训，是一家专注于咖啡创业规划与咖啡从业者职业生涯规划的创新型咖啡培训机构。由sca认证老师授课，在SCA精品咖啡协会的认证技能课程体系中加入不同职岗的综合素质训练。">
    <meta name="referrer" content="no-referrer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        
        .teacher {
            margin: 3.6% 2.3% 4.7% 4.1%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .teacher_big_item {
            width: 49%;
            margin-bottom: 1%;
        }
        
        .teacher_item {
            width: 100%;
            margin-right: 1.8%;
            margin-bottom: 1.8%;
            display: flex;
            justify-content: space-between;
            position: relative;
            background: #F7F7F7;
        }
        
        .detail {
            width: 48%;
        }
        
        .avatar {
            width: 45%;
        }
        
        .avatar img {
            width: 100%;
        }
        
        .teacher_title {
            font-family: SourceHanSansCN-Medium;
            font-size: .875rem;
            color: #656565;
            margin-top: 13%;
            margin-left: 12%;
        }
        
        .teacher_name {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.75rem;
            color: #1B44DB;
            margin-left: 12%;
        }
        
        .teacher_detail {
            font-family: SourceHanSansCN-Normal;
            font-size: .875rem;
            color: #656565;
            margin-left: 12%;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            overflow: hidden;
            line-height: 1.3rem;
        }
        
        .more_btn {
            position: absolute;
            bottom: 8%;
            left: 5%;
            width: 2.5rem;
            height: 2.5rem;
        }
        
        @media only screen and (max-width: 1320px) {
            .teacher_detail {
                -webkit-line-clamp: 5;
            }
            .more_btn {
                width: 2.187rem;
                height: 2.187rem;
            }
        }
        
        @media only screen and (max-width: 1210px) {
            .teacher_detail {
                -webkit-line-clamp: 4;
            }
            .more_btn {
                width: 2.187rem;
                height: 2.187rem;
            }
        }
        
        @media screen and (max-width: 1135px) {
            .teacher_title {
                font-size: 0.75rem;
            }
            .teacher_name {
                font-size: 1.625rem;
            }
            .teacher_detail {
                font-size: 0.625rem;
                -webkit-line-clamp: 4;
                line-height: 1.3rem;
            }
        }
        
        @media only screen and (max-width: 1010px) {
            .teacher_name {
                font-size: 1.5rem;
            }
            .teacher_detail {
                -webkit-line-clamp: 3;
                line-height: 1rem;
            }
            .more_btn {
                width: 1.875rem;
                height: 1.875rem;
            }
        }
        
        @media only screen and (max-width: 944px) {
            .more_btn {
                width: 1.562rem;
                height: 1.562rem;
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
            .teacher_big_item {
                width: 100%;
            }
            .teacher_detail {
                -webkit-line-clamp: 5;
                font-size: 1.125rem;
                line-height: 1.5rem;
            }
            .teacher_name {
                font-size: 2.25rem;
            }
            .teacher_title {
                font-size: 0.959rem;
            }
            .more_btn {
                width: 1.562rem;
                height: 1.562rem;
            }
        }
        
        @media only screen and (max-width: 650px) {
            .teacher_title {
                font-size: 0.625rem;
            }
            .teacher_name {
                font-size: 1.25rem;
                line-height: 1.6rem;
            }
            .teacher_detail {
                -webkit-line-clamp: 4;
                line-height: 1.125rem;
                font-size: 0.875rem;
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
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$value): ?>
            <div class="teacher_big_item">
                <a href="<?php echo url('/teacher/detail/'.$value['id']); ?>">

                    <div class="teacher_item">
                        <div class="detail">
                            <p class="teacher_title">讲师介绍</p>
                            <p class="teacher_name"><strong><?php echo htmlentities($value['teacher_name']); ?></strong></p>
                            <p class="teacher_detail"><?php echo htmlentities($value['Introduction']); ?></p>
                            <img class="more_btn" src="/static/Image/teacher_more.png" alt="">
                        </div>
                        <div class="avatar"><img src="<?php echo htmlentities($value['teacher_avatar']); ?>" alt=""></div>
                    </div>
                </a>
            </div>

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