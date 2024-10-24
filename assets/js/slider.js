$(function () {
    var delay = 5;
    var currentSlide = 0;
    var maxSlide = $('.banner-single').length - 1;

    initSlider();
    changeSlider();

    function initSlider() {
        $('.banner-single').hide();
        $('.banner-single').eq(currentSlide).show();
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