$(function() {
    $.fatNav();
});


$('.slider').slick();

$('.slide_01').slick({
  autoplay: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  customPaging: function(slider, i) {
    return $('<button type="button" />').text(i + 1);
  },
  prevArrow: '<img src="./wp-content/themes/korekara/lib/images/top/slide/arrow_l.png" class="slide-arrow prev-arrow">',
  nextArrow: '<img src="./wp-content/themes/korekara/lib/images/top/slide/arrow_r.png" class="slide-arrow next-arrow">',
  responsive: [{
    breakpoint: 1045,
    settings: {
      slidesToShow: 1,
      centerMode:true,
    }
  }]
});

$(".ac dt").on("click", function() {
  $(this).next().slideToggle();
});
