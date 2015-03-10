jQuery(document).ready(function($) {


  $('.Slider').bxSlider({
    mode: 'fade',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 1,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 8000,
    auto: true,
    speed: 5000,
    infiniteLoop: true,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: true,
    controls: true,
    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');
    }
  });
});
