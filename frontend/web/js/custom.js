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
$('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    nav:true,
    items:1,
    autoplay:true,
})
$(document).ready(function(){
    $('.venobox').venobox(); 
});

 var all_item_containers = $(".item_container");
var hasClicked = false;


$(document).on("click",".item_container", function () {
  var clickedItemID = $(this).attr('id');
  $(".item_container").removeClass("expanded");
  $(this).addClass("expanded");
  clearInterval(activeInterval);
});

$(".ul_container").hover(function(){
  clearInterval(activeInterval);
  console.log(activeInterval);
});

var active_container = 1;

var activeInterval;

function intervalStart() {
  activeInterval = setInterval(function(){ 
  $(".item_container").removeClass("expanded");
  
  $(all_item_containers[active_container]).addClass("expanded");
  
  active_container += 1;
  
  if(active_container == 10){
     active_container = 0
  }
}, 10000)};

intervalStart();


AOS.init({
  duration: 1200,
})


