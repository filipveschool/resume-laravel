jQuery(document).ready(function ($) {

    var windowObj = $(window);
    var body = $('body');
    var bodyOffsetBottom = $(window).scrollTop() + $(window).height();
    //var bodyOffsetBottom     = windowObj.scrollBottom();             // 1
    var bodyHeightAdjustment = body.height() - bodyOffsetBottom;     // 2
    var bodyHeightAdjusted = body.height() - bodyHeightAdjustment; // 3
    var scrollTopAnchor = $('.scroll-top');

    function sizingUpdate() {
        var bodyOffsetTop = windowObj.scrollTop();
        if (bodyOffsetTop > (bodyHeightAdjusted * 75 / 100)) {
            scrollTopAnchor.addClass('in');
        } else {
            scrollTopAnchor.removeClass('in');
        }
    }

    windowObj.bind('scroll', sizingUpdate).resize(sizingUpdate);
    sizingUpdate();

    scrollTopAnchor.click(function () {
        $('html,body').animate({scrollTop: 0}, 850, 'easeInOutExpo');
        return false;
    });
});

