$(document).ready(function(){
  // console.log('aici');

  var $window = $(window);
  var concurs_sticky = $(".section_benefits .sticky");

  $window.scroll(function () {
    concurs_sticky.css({"position": "fixed", "top": "50%"});
      if ($window.scrollTop() == 0)
          concurs_sticky.css({"position": "absolute", "top": "-8px"});
      // else if ($win.height() + $win.scrollTop() == $(document).height()) {
      //     concurs_sticky.css({"position": "absolute", "top": "-8px"});
      // }
  });

  var $slider = $('.section_slider');

  if ($slider.length) {
    var currentSlide;
    var slidesCount;
    var sliderCounter = document.createElement('div');
    sliderCounter.classList.add('slider__counter');

    var activeSlide = document.createElement('div');
    activeSlide.classList.add('slider__current');

    var totalSlides = document.createElement('div');
    totalSlides.classList.add('sliders__total');

    sliderCounter.append(activeSlide);
    sliderCounter.append(totalSlides);

    var updateSliderCounter = function(slick, currentIndex) {

      currentSlide = slick.slickCurrentSlide() + 1;
      slidesCount = slick.slideCount;
      //$(sliderCounter).text(currentSlide + '/' +slidesCount);
      $(activeSlide).text('0'+currentSlide);
      $(totalSlides).text('0'+slidesCount);
      //$(sliderCounter).append(activeSlide + '/' + slidesCount);
    };

    $slider.on('init', function(event, slick) {
      $slider.append(sliderCounter);
      updateSliderCounter(slick);
    });

    $slider.on('afterChange', function(event, slick, currentSlide) {
      updateSliderCounter(slick, currentSlide);
    });

    $('.section_slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      arrows: true,
      prevArrow:'<div type="button" data-role="none" class="slick-prev"></div>',
      nextArrow:'<div type="button" data-role="none" class="slick-next"></div>',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
});
