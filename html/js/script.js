jQuery(document).ready(function ($) {

  //slider
  var swiperStep = new Swiper(".step-slider", {
    speed:700,
    allowTouchMove:false,
    touchRatio: 1,
    noSwiping: false,
    autoHeight: true,
    preventClicks :true,
    a11y: false,
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


  $('.input-wrap-name input').on('keyup blur', function () {
    if ($(this).val().length > 2) {
      $('.swiper-slide-1 .btn-wrap').addClass('is-go-next')
    } else {
      $(this).removeClass('is-go-next')
    }
  });

  $('.input-wrap-tel input').on('keyup blur', function () {
    if ($(this).val().length > 6) {
      $('.swiper-slide-4 .btn-wrap').addClass('is-go-next')
    } else {
      $(this).removeClass('is-go-next')
    }
  });

  $.validator.addMethod('emailtld', function(val, elem){
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!filter.test(val)) {
      return false;
    } else {
      return true;
    }
  }, 'Please enter your email');


  $('.form-select').validate({
    rules: {
      email: {
        minlength: 7,
        required: true,
        emailtld: true
      },
    },
    messages: {
      email:{
        minlength: "Please enter your email",
      },
    }
  });


  $('.input-wrap-email input').on('keyup blur', function () {
    if ($('.form-select').valid()) {
      $('.swiper-slide-2 .btn-wrap').addClass('is-go-next')
    } else {
      $(this).removeClass('is-go-next')
    }
  });

  var animation1 = bodymovin.loadAnimation({
    container: document.getElementById('anim-01'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'lottie/quiz-1.json',
  });

  var animation2 = bodymovin.loadAnimation({
    container: document.getElementById('anim-02'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'lottie/mail-1.json',
  });

  var animation3 = bodymovin.loadAnimation({
    container: document.getElementById('anim-03'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'lottie/mail-2.json',
  });
});