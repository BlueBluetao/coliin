$(document).ready(function() {
    // 滚动动画
    function checkScroll() {
        $('.service-box, .material-box, .industry-box').each(function() {
            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();
            
            if (elementTop < windowBottom) {
                $(this).addClass('show');
            }
        });
    }

    // 初始检查和滚动监听
    checkScroll();
    $(window).scroll(checkScroll);

    // 行业滑块初始化
    $('.industry-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
}); 