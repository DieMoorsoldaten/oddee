$(document).ready(function () {
    $('.header__burger').click(function () {
        $('.header').toggleClass('open-menu');
        $('.header').removeClass('open-menu-second');
    });
});

$(document).ready(function () {
    $('#menu-item-83').click(function (e) {
        e.preventDefault();
        $('.header').toggleClass('open-menu-second');
    });
});

$(document).ready(function () {
    $('#menuBtn').click(function (e) {
        e.preventDefault();
        $('.header').removeClass('open-menu-second');
    });
});


$(document).ready(function () {
    var btn = $('.to-up');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
});