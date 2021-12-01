  <?php

use yii\bootstrap4\Carousel;
use yii\helpers\Url;


/* @var $this yii\web\View */

$this->title = "SAMARQAND DAVLAT UNIVERSITETINING O'ZBEKISTON-FINLANDIYA PEDAGOGIKA INSTITUTI";
?>

<?php
use kv4nt\owlcarousel\OwlCarouselWidget;

OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class'
    ],
    'pluginOptions'    => [
        'autoplay'          => true,
        'autoplayTimeout'   => 5000,
        'items'             => 1,
        'nav' => true,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<?php $i = 1; foreach ($slider as $slide) :?>
<div class="item-class"><img src="<?=$slider ? $slide->slider_img : ''?>" alt="<?= 'Image '.$i++ ?>"></div>
<?php endforeach;?>


<?php OwlCarouselWidget::end(); ?>

<!--    <div class="section">-->
<!--      <div class="owl-carousel owl-theme">-->
<!--        --><?//
//          foreach ($slider as $slider) {
//            ?>
<!--              <div class="item">-->
<!--                <h4><img src="--><?//=$slider ? $slider->slider_img : ''?><!--" class="rasm"></h4>-->
<!--              </div>-->
<!--            --><?//
//          }
//        ?>
<!--      </div>-->
<!--    </div>-->
<!--    <style type="text/css">-->
<!--      .rasm {-->
<!--          /*display: block;*/-->
<!--        object-fit: cover;-->
<!--        /*background-size: cover;*/-->
<!--        /*overflow:hidden;*/-->
<!--         width: 100%;-->
<!--         height: 100%;-->
<!--      }-->
<!--      .item {-->
<!--      height: 540px;-->
<!--      width: 1349px;-->
<!---->
<!--    }-->
<!--    </style>-->
    
    
      <!-- ======= Services Section ======= -->
 <!--    <section id="services" class="services mt-5 mb-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: center;">Tezkor ilovalar</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-file"></i></div>
              <h4 class="title"><a href="">Interaktiv xizmatlar</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-book-reader"></i></div>
              <h4 class="title"><a href="">Kutubxona</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
              <h4 class="title"><a href="">Markaz va bo'limlar</a></h4>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-graduation-cap"></i></div>
              <h4 class="title"><a href="">Masofaviy ta'lim</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-laptop-code"></i></div>
              <h4 class="title"><a href="">Virtual qabulxona</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-briefcase"></i></div>
              <h4 class="title"><a href="">Bo'sh ish o'rni</a></h4>
            </div>
          </div>

          
        </div>

      </div>
    </section> -->

    <div class="orqafon pt-5">
      <div class="container" style="padding-bottom: 50px;">
          <div class="section-title mb-5" data-aos="fade-up">
            <h1 style="text-align: center;">Tezkor ilovalar</h1>
          </div>
        <div class="row">
          <?
            foreach ($tezkor_havolalar as $tezkor_havola) {
              ?>
              <div class="col-md-4 col-12">
                <div class="block_havola">
                  <div class="box">
                      <?
                        if ($tezkor_havola->link_type == 1) {
                          ?>
                             <a href="<?=Url::to(["site/".$tezkor_havola->link, 'id'=>$tezkor_havola->tez_men__sub_id])?>" class="name"><?=$tezkor_havolalar ? $tezkor_havola->name_uz : ''?></a>
                          <?
                        }else{
                          ?>
                             <a target="_blank" href="<?=$tezkor_havolalar ? $tezkor_havola->link : ''?>" class="name"><?=$tezkor_havolalar ? $tezkor_havola->name_uz : ''?></a>
                          <?
                        }
                      ?>
                      <div class="circle"></div>
                      <img src="../<?=$tezkor_havola->img?>" height="<?=$tezkor_havola->height?>px;" class="product">
                  </div>
                </div>
              </div>
              <?
            }
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../images/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelector(".box"), {
        max: 25,
        speed: 400
    });
    
    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".box"));
    </script>
    <!-- End Services Section -->
  
    <!-- POPULAR COURSES -->
    <style type="text/css">
      .pop-cour{
        background-color: #3f78e0;
      }
      .pop-cour .container .row .col-md-3 p {
        color: white;
        font-size: 20px;
        font-weight: bold;
      }
      .natija1 {
        font-size: 50px !important;
      }
      .natija2 {
        font-size: 25px !important;
      }
      .pop-cour .container .row .col-md-3 i {
        color: white;
        font-size: 50px;
        margin-bottom: 15px;
      }
    </style>
    <div class="section-title mt-5" data-aos="fade-up">
      <h1 style="text-align: center;">Asosiy ko'rsatkichlar</h1>
    </div>
    <section class="pop-cour">
       <div class="container">
         <div class="row" style="text-align: center; padding: 25px;">
             <div class="col-md-3">
                 <i class="fa fa-graduation-cap"></i>
                 <p class="natija1 counter">5</p>
                 <p class="natija2">Fakultetlar</p>
             </div>
             <div class="col-md-3">
                <i class="fas fa-users"></i>
                <p class="natija1 counter">2925</p>
                 <p class="natija2">Talabalar</p>
             </div>
             <div class="col-md-3">
                 <i class="fas fa-chalkboard-teacher"></i>
                 <p class="natija1 counter">209</p>
                 <p class="natija2">O'qituvchilar</p>
             </div>
             <div class="col-md-3">
                 <i class="fa fa-briefcase" aria-hidden="true"></i>
                 <p class="natija1 counter">2</p>
                 <p class="natija2">Hamkorlar</p>
             </div>
         </div>
       </div>
    </section>
  <!--  <div class="container">
     <div class="row">
       <div class="col-md-4">
        <div class="Bxblog">
          <div class="box">
              <img src="../images/ev-bg2.jpg" class="imgBx">
              <div class="contextBx">
                  <h2>salom aleykum dostlar</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 </p>
              </div>
          </div>
        </div>
       </div>
     </div>
   </div> -->
   <!--  <script type="text/javascript">
       VanillaTilt.init(document.querySelector(".Bxblog"), {
        max: 25,
        speed: 400
    });
    
    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".Bxblog"));
    </script> -->
 <!--    <style type="text/css">
  .Bxblog {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 50px 0px;
      transform-style: preserve-3d;
  }
  .Bxblog .box {
      position: relative;
      width: 350px !important;
      height: 280px !important;
      margin: 60px 0px;
      transform-style: preserve-3d;
    }
    .Bxblog .box .imgBx {
      position: absolute;
      top: 0px;
      left: 0px;
       width: 350px !important;
      height: 280px !important;
      border-right: 10px;
      background-color: #fff;
      border-radius: 20px;
      transform-style: preserve-3d;
    }
    .Bxblog .box:hover {
      box-shadow: 0 50px 80px rgba(0,0,0,0.2)
    }
    .Bxblog .box .contextBx {
      position: absolute;
      top: 70%;
      left: 50px;
      right: 50px;
      background-color: #fff;
      transform: translateZ(20px) scaleY(0);
      /*padding: 40px 25px;*/
      transform-origin: top;
      transition: 0.5s;
      transform-style: preserve-3d;
      background-color: #fff;
      border-radius: 20px;
    }
    .Bxblog .box:hover .contextBx {
      transform: translateZ(20px) scaleY(1);
    }
     
  .Bxblog {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 50px 0px;
      transform-style: preserve-3d;
  }
  .Bxblog .box {
    position: relative;
    width: 450px;
    height: 300px;
    margin: 60px 0px;
    transform-style: preserve-3d;
  }
  .Bxblog .box .imgBx {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 650px;
    height: 450px;
    border-right: 10px;
    background-color: #fff;
    border-radius: 20px;
    transform-style: preserve-3d;
  }
  .Bxblog .box:hover {
    box-shadow: 0 50px 80px rgba(0,0,0,0.2)
  }
  .Bxblog .box .contextBx {
    position: absolute;
    top: 50%;
    left: 50px;
    right: 50px;
    background-color: #fff;
    transform: translateZ(20px) scaleY(0);
    padding: 40px 25px;
    transform-origin: top;
    transition: 0.5s;
    transform-style: preserve-3d;
    background-color: #fff;
    border-radius: 20px;
  }
  .Bxblog .box:hover .contextBx {
    transform: translateZ(20px) scaleY(1);
  }
   

    </style> -->
    <!-- Yangiliklar -->
    <div class="">
      <section id="more-services" class="more-services orqafon1" style="padding-top: 80px; padding-bottom: 40px;">
        <div class="container">

          <div class="section-title" data-aos="fade-up" style="padding-bottom: 30px;">
            <h1 style="text-align: center;" data-aos="fade-up">Yangiliklar</h1>
          </div>
          <div class="row">
        <?
          foreach ($news as $new) {
              ?>
                  <div class="col-md-4 d-flex align-items-stretch mb-4">
                      <div class="new_date">
                        <i class="fa fa-calendar"><?=$news ? $new->date : ''?></i>
                        <div><i class="fa fa-eye"><?=$news ? $new->views : ''?></i></div>
                      </div>
                      <div class="card" style='background-image: url("<?=$news ? $new->img : ''?>");' data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                          <a href="<?=Url::to(['site/pages', 'id'=>$new->id])?>" class="card-text"><?=yii\helpers\StringHelper::truncate($news ? $new->name_uz : '', 60, '...')?></a>
                          <!-- <div class="read-more"><a href=""><i class="icofont-arrow-right"></i>Batafsil</a></div> -->
                        </div>
                      </div>
                  </div>
              <?
          }
        ?>
         </div>
         <div style="text-align: center; font-size: 20px; margin-top: 40px;">
           <a href="<?=Url::to(['site/allpages', 'id'=>3])?>" class="btn btn-sm btn-primary rounded-pill">Barchasi</a>
         </div>
        </div>    
      </section>
    </div>
    <!-- End More Services Section -->

<style type="text/css">

  .back {
    background-color: blue;
    min-height: 700px;
  }
  .card-body a .card-text{
    line-height: 12px;
  }
  .back-to-top i:hover {
  background: #3e9bdd;
  color: #fff;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #2487ce;
  border-top-color: #fff;
  border-bottom-color: #fff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}
</style>
<!-- little slider -->
 <section class="pop-cour mt-5">
       <div class="container">
          <div style="margin-top: 40px; margin-bottom: 20px;">
               <div class="row">
                   <?
                    foreach ($dr_slider_img as $dr_slider) {
                        ?>
                            <div class="col-md-8" style="font-size: 28px !important;text-align: center; color: white !important;vertical-align: middle;">
                          <?=$dr_slider_img ? $dr_slider->content_uz : ''?>
                           <p style="font-size: 18px; color: white; float: right; font-weight: bold; margin-top: 20px;"><?=$dr_slider_img ? $dr_slider->name_uz : ''?> <br><span style="font-size: 16px; color: white; float: right; font-weight: bold;"><?=$dr_slider_img ? $dr_slider->field_uz : ''?></span></p>
                           </div>
                           <div class="col-md-4">
                                <img src="<?=$dr_slider_img ? $dr_slider->img : ''?>" style="border-radius: 50%;" height="200px;" width ="200px;">
                           </div>
                        <?
                    }
                   ?>
               </div>
          </div>
       </div>
    </section>

     <!-- Events -->
    <section id="more-services" class="more-services mb-5 orqafon1" style="padding-top: 80px; padding-bottom: 40px;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h1 style="text-align: center;" data-aos="fade-up">E'lonlar</h1>
        </div>
        <div class="row">
    <?
        foreach ($event as $events) {
            ?>
                <div class="col-md-4 d-flex align-items-stretch mb-4">
                    <div class="new_date">
                      <i class="fa fa-calendar"><?=$event ? $events->date : ''?></i>
                      <div><i class="fa fa-eye"><?=$event ? $events->views : ''?></i></div>
                    </div>
                    <div class="card" style='background-image: url("<?=$event ? $events->img : ''?>");' data-aos="fade-up" data-aos-delay="100">
                      <div class="card-body">
                        <a href="<?=Url::to(['site/pages', 'id'=>$events->id])?>" class="card-text"><?=yii\helpers\StringHelper::truncate($event ? $events->name_uz : '', 60, '...')?></a>
                      </div>
                    </div>
                </div>
            <?
        }
    ?>
        </div>
         <div style="text-align: center; font-size: 20px; margin-top: 40px;">
           <a href="<?=Url::to(['site/allpages', 'id'=>4])?>" class="btn btn-sm btn-primary rounded-pill">Barchasi</a>
         </div>
      </div>
    </section>

   
 <!-- video -->
     <section class="orqafon">
       <div class="container">
        <div class="section-title mt-5" data-aos="fade-up">
          <h1 style="text-align: center;">Video Lavha </h1>
        </div>
              <!-- <a href="https://www.youtube.com/watch?v=jaTQAQLgxJM" class="venobox play-btn mb-4" data-vbtype="inline" data-autoplay="true"></a> -->
             
              <div class="row videonew">
                 <a class="venobox play-btn mb-4" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=fLeJJPxua3E"></a>
              <!-- <a href="#inline-content" class="venobox play-btn mb-4" data-vbtype="inline" data-autoplay="true"></a> -->
                    <img src="../../images/videorasm.jpg">
              </div>
       </div>
       <!--  <div id="inline-content" style="display:none; margin-bottom: 30px;">
            <video controls width="100%" height="100%">
              <source src="../images/best.mp4" type="video/mp4">
            </video>
        </div> -->
     </section>
   
   

  <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="fade-up">
        <h1 style="text-align: center;">Foydali saytlar </h1>
      </div>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <?
            foreach ($supporters as $supporter) {
              ?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="supporter-logo">
                    <a target="_blank" href="<?=$supporters ? $supporter->link : ''?>"><img src="<?=$supporters ? $supporter->img : ''?>" class="img-fluid" alt=""></a>
                  </div>
                </div>
              <?
            }
          ?>
        </div>
      </div>
    </section>
    <!-- End Sponsors Section -->

  <div id="preloader"></div>