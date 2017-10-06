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


/*---------------------
     TOP Menu Stick
     --------------------- */
var s   = $("#site-navigation");
var pos = s.position();
/*$(window).scroll(function () {
    var windowpos = $(window).scrollTop();
    if (windowpos > pos.top) {
        s.addClass("sticky");
    } else {
        s.removeClass("sticky");
    }
});*/
/*

// hide our element on page load
$('#element-to-animate').css('opacity', 0);

$('#element-to-animate').waypoint(function() {
    $('#element-to-animate').addClass('fadeInLeft');
}, { offset: '50%' });*/



/*----------------------------------------------------*/
/* Smooth Scrolling
 ------------------------------------------------------ */

$('.smoothscroll').on('click', function (e) {
    e.preventDefault();

    var target  = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 800, 'swing', function () {
        window.location.hash = target;
    });

});
/* Wow Animations
    -------------------------------------------------------*/

var wow = new WOW({
    offset: 50,
    mobile: false
});

wow.init();
