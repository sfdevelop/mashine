// основной слайдер
$(document).ready(function () {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        autoplay: true,
        autoplaySpeed: 5000
    });
});

$(document).ready(function () {
    wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       false,       // default
        live:         true        // default
      })
      wow.init();
});

// Кнопка вверх
$(document).ready(function(){   
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

$().alert('close')