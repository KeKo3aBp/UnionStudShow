$('.open-popup').click(function() {
    $('.popup-bg').fadeIn(600);
});
$('.close-popup').click(function() {
    $('.popup-bg').fadeOut(600);
});
$(document).ready(function () {
    $('.nav-link-collapse').on('click', function () {
        $('.nav-link-collapse').not(this).removeClass('nav-link-show');
        $(this).toggleClass('nav-link-show');
    });

});

