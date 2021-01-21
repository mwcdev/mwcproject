// hero slider
$('.hero-slider').slick({
  infinite: false,
});

$(window).on('load resize',()=>{
  $(".hero-slider").css("padding-top", $("header").outerHeight());
});


// Services slider
// var serviceSwiper = new Swiper('.swiper-container', {
//   direction: 'vertical',
//   slidesPerView: 1,
//   spaceBetween: 30,
//   mousewheel: true,
//   speed: 1000,
//   spaceBetween: 0,
//   pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//   },
// });


// serviceSwiper.mousewheel.disable();


// $("body").mousewheel(function(event, delta) {


//   var firstSlideActive =  $(".first-slide").hasClass("swiper-slide-active");
//   var lastSlideActive =  $(".last-slide").hasClass("swiper-slide-active");

//   if(firstSlideActive == false && lastSlideActive == false){
//     $('html, body').animate({
//         scrollTop: $(".swiper-container").offset().top
//     }, 500);
//   }

//   if((firstSlideActive == true && delta>0) || (lastSlideActive == true && delta<0)){
//     serviceSwiper.mousewheel.disable();
//   }else{
//     serviceSwiper.mousewheel.enable();
//   }

//   serviceSwiper.mousewheel.disable();

// });


// on projects mockup
$(".screen-frame").mouseover(function(){
  var screenH =  $(this).outerHeight();
  var screenImg = $(this).find('img');
  var screenImgH = screenImg.outerHeight();
  var scrollUp = screenImgH - screenH;
  console.log(scrollUp);
  screenImg.css({
    transform: "matrix(1, 0, 0, 1, 0, "+ -scrollUp +")"
  });
}).mouseleave(function() {
  var screenImg = $(this).find('img');
  screenImg.css("transform","matrix(1, 0, 0, 1, 0, 0)");
});


// client review 
$('.client-review').slick();

// client review 
// $('.client-review').slick();


// client logo 
$('.client-logo').slick({
  infinite: true,
  dots: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
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
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


// client logo 
$('.projects').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
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
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// modal large

$(document).ready(function() {
  $('#modal-booking').apFullscreenModal({
    openSelector: '#open-modal-booking',
    closeSelector: '.close-modal-booking, #send-booking, .close-modal'
  });
  $('.datepicker').pickadate()
  $('.timepicker').pickatime()
});


