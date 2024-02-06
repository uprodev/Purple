jQuery(document).ready(function ($) {

  //slider
  var swiperStep = new Swiper(".step-slider", {
    speed:700,
    allowTouchMove:false,
    touchRatio: 1,
    noSwiping: false,
    autoHeight: true,
    pagination: {
      el: ".step-pagination",
      type: "progressbar",
    },

  });

  //next slide
  $(document).on('click', '.btn-next', function (e){
    e.preventDefault();
    swiperStep.slideNext();
  });

  //prev slide
  $(document).on('click', '.prev-btn a', function (e){
    e.preventDefault();
    swiperStep.slidePrev();
  });

  //btn +/-
  $(".btn-count-plus").click(function () {
    var e = $(this).parent().find("input");
    return e.val(parseInt(e.val()) + 1), e.change(), !1
  }), $(".btn-count-minus").click(function () {
    var e = $(this).parent().find("input"), t = parseInt(e.val()) - 1;
    return t = t < 1 ? 1 : t, e.val(t), e.change(), !1
  });

  //next slider if
  $('.line input').on('change', function(){
    let item1 = $('.line-1').find('input:checked'),
        item2 = $('.line-3').find('input:checked');

    if(item1.length >0 && item2.length > 0){
      setTimeout(function() {
        swiperStep.slideNext();
      }, 1000);

    }
  });

  //last slide
  swiperStep.on('slideChange', function () {
    setTimeout(function() {
      if($('.swiper-slide-5').hasClass('swiper-slide-active')){

        $('.steps').addClass('is-end');

      }
    }, 710);

  });


  $('.marquee').marquee({
    duration: 35000,
    gap:0,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    loop:true,
    startVisible: true,
  });
});