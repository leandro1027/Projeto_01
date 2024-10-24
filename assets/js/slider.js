$(function () {
    var delay = 5;
    var currentSlide = 0;
    var maxSlide = $('.banner-single').length - 1;

    initSlider();
    changeSlider();

    function initSlider() {
        $('.banner-single').hide();
        $('.banner-single').eq(currentSlide).show();

        for (var i = 0; i < maxSlide + 1; i++) {
            var content = $('.bullets').html();

            if (i == 0) {
                content += '<span class="active-slider"> </span>';
            } else {
                content += '<span></span>'
            }
            $('.bullets').html(content);
        }
    }

    function changeSlider() {
        setInterval(function () {
            $('.banner-single').eq(currentSlide).fadeOut(3000);
            currentSlide++;

            if (currentSlide > maxSlide)
                currentSlide = 0;

            $('.banner-single').eq(currentSlide).fadeIn(2000);

        }, delay * 1000);
    }
})