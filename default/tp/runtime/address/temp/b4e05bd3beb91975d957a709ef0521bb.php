<?php /*a:1:{s:67:"/home/wwwroot/default/tp/app/address/view/index/address_detail.html";i:1665296675;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title> 寻品咖啡北京、上海地址 | 北京寻品咖啡有限责任公司 seek-gift,北京咖啡师培训，上海咖啡师培训</title>
    <meta name="keywords" content="寻品,寻品咖啡,寻品咖啡学院,咖啡师姜涛,上海咖啡师培训,北京咖啡师培训,咖啡培训机构,咖啡拉花培训,咖啡店加盟,中国sca咖啡认证培训">
    <meta name="description" content="seek-gift|寻品咖啡，位于北京和上海的咖啡培训，是一家专注于咖啡创业规划与咖啡从业者职业生涯规划的创新型咖啡培训机构。由sca认证老师授课，在SCA精品咖啡协会的认证技能课程体系中加入不同职岗的综合素质训练。">
    <meta name="referrer" content="no-referrer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="/static/Image/icon.svg" />

    <link rel="stylesheet" href="/static/css/base.css" type="text/css">

    <style>
        .nav-item:nth-child(5) {
            color: white;
            background: #1B44DB;
            font-family: SourceHanSansCN-Medium;
            font-size: 0.875rem;
            padding: 0 1.25rem;
            border-radius: 0.9375rem;
            margin: 0 0.937rem;
        }
        
        .address {
            margin: 5% 7.5% 5.5% 7.5%;
        }
        
        .address img {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        
        h1 {
            font-family: SourceHanSansCN-Bold;
            font-size: 2.375rem;
            color: #303030;
            /* letter-spacing: 0.33px; */
            margin-bottom: 5%;
        }
        
        h2 {
            font-family: SourceHanSansCN-Bold;
            font-size: 1.375rem;
            color: #303030;
            margin-bottom: 2%;
        }
        
        h3 {
            font-family: SourceHanSansCN-Normal;
            font-size: 1.125rem;
            color: #474747;
        }
        
        h3 img {
            margin-bottom: 5%;
        }
        
        @media screen and (max-width: 1135px) {
            h1 {
                font-size: 2.125rem;
            }
            h2 {
                font-size: 1.375rem;
            }
            h3 {
                font-size: 1.125rem;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .nav-item:nth-child(5) {
                font-family: SourceHanSansCN-Bold;
                margin: 2.5% 1rem;
                text-align: center;
                font-size: 1.375rem;
                color: white;
                border: 0rem solid white;
                border-radius: 0;
            }
            h1 {
                font-size: 1.375rem;
            }
            h2 {
                font-size: 1.125rem;
            }
            h3 {
                font-size: 0.875rem;
            }
            .address img {
                margin-bottom: 1.25rem;
                width: 100%;
            }
        }
    </style>
</head>


<body>
    <div class="nav" style="background-image: url(/static/Image/address_header.jpg);">
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
        <p class="nav_title">校区介绍</p>
    </div>
    <div class="base_detail">
        <div class="address">
            <h1><?php echo htmlentities($address_detail['name']); ?></h1>
            <h2>地址：<?php echo htmlentities($address_detail['address']); ?></h2>
            <h2>电话：<?php echo htmlentities($address_detail['phone']); ?></h2>
            <h2>邮编：<?php echo htmlentities($address_detail['zip_code']); ?></h2>
            <img src="<?php echo htmlentities($address_detail['address_img']); ?>" alt="">
            <h2>校区介绍</h2>
            <h3><?php echo htmlspecialchars_decode($address_detail['detail']); ?></h3>
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