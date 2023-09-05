$(window).load(function() {
    $('.btn-nav').on('click tap', function() {
        $('.nav-content').toggleClass('showNav hideNav').removeClass('hidden');
        $(this).toggleClass('animated');
    });
});
$(".item_skin").bind('click', function(index) {
    $('.btn-nav').click();

    var index = $(".item_skin").index($(this));
    setTimeout(() => {
        switch (index) {
            case 0:
                window.location.href = "{:url('/home')}";
                break;

            case 1:
                window.location.href = "#";
                break;

            case 2:
                window.location.href = "#";
                break;

            case 3:
                window.location.href = "{:url('/teacher/list')}";
                break;
            case 4:
                window.location.href = "{:url('/address/list')}";
                break;

            case 5:
                window.location.href = "{:url('/activity/list/1')}";
                break;

            default:
                break;
        }
    }, 500);
})