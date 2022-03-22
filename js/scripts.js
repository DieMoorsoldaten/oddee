$(document).ready(function() {
    $('.header__burger').click(function() {
        $('.header').toggleClass('open-menu');
        $('.header').removeClass('open-menu-second');
    });
});

$(document).ready(function() {
    $('#menu-item-83').click(function(e) {
        e.preventDefault();
        $('.header').toggleClass('open-menu-second');
    });
});

$(document).ready(function() {
    $('#menuBtn').click(function(e) {
        e.preventDefault();
        $('.header').removeClass('open-menu-second');
    });
});

