 // $('.owl-carousel').owlCarousel({
 //        loop:true,
 //        margin:10,
 //        nav:true,
 //        responsive:{
 //            0:{
 //                items:1
 //            },
 //            600:{
 //                items:3
 //            },
 //            1000:{
 //                items:5
 //            }
 //        }
 //    })
	

$(document).ready(function(){
    $('.venobox').venobox(); 
});

AOS.init({
  duration: 1200,
})
$(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});
$('.scrollup').click(function (){
    $("html,body").animate({
        scrollTop: 0
    }, 1000);
    return false;
});

$('.counter').counterUp({
    delay: 10,
    time: 1000
});


  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(1000).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });
