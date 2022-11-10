<?php

use yii\bootstrap4\Carousel;
use yii\helpers\Url;


/* @var $this yii\web\View */

$this->title = "SAMARQAND DAVLAT UNIVERSITETINING O'ZBEKISTON-FINLANDIYA PEDAGOGIKA INSTITUTI";
?>

   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/menu/images/imageslider.jpg" class="d-block w-100 rasm" alt="...">
            <div class="carousel-caption d-none d-md-block" style="text-align: right;">
                <a target="_blank" href="https://360.openconference.us/uzfi/" class="btn btn-primary" style="font-size: 25px;">Virtual tour</a>
            </div>
          </div>
       <?
        foreach ($slider as $slide) {
          ?>
             <div class="carousel-item">
                <img src="arguments/slider/<?=$slide->slider_img?>" class="d-block w-100 rasm" alt="...">
                <div class="carousel-caption d-none d-md-block" style="text-align: right;">
                    <a target="_blank" href="https://360.openconference.us/uzfi/" class="btn btn-primary" style="font-size: 25px;">Virtual tour</a>
                </div>
              </div>
          <?
        }
       ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



<!--      <div class="orqafon1 tel-versiya" style="padding-top: 5%;">
      <div class="container" style="padding-bottom: 5%;">
          <section class="sect-title" data-aos="fade-up" style="margin-bottom: 6.7%;">
            <span class="qwert"><?=Yii::t('app','Qabul 2022')?></span>
            <span class="qwert"><?=Yii::t('app','Qabul 2022')?></span>
          </section>
        <section class="hero--area section-padding-80 mb-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 col-lg-6">
                        <img src="images/callcenter.jpg" style="width: 100%;">
                         <div class="charts">
                            <div class="chart">
                              <svg class="center-abs" width="100" height="100">
                                <circle class="outer" cx='50' cy='50' r='45'></circle>
                              </svg>
                              <div class="circle1 center-abs"></div>
                              <span class="text center-abs" id="days"></span>
                              <h3>Days</h3>
                            </div>

                            <div class="chart">
                              <svg class="center-abs" width="100" height="100">
                                <circle class="outer" cx='50' cy='50' r='45'></circle>
                              </svg>
                              <div class="circle1 center-abs"></div>
                              <span class="text center-abs" id="hours"></span>
                              <h3>Hours</h3>
                            </div>

                            <div class="chart">
                              <svg class="center-abs" width="100" height="100">
                                <circle class="outer" cx='50' cy='50' r='45'></circle>
                              </svg>
                              <div class="circle1 center-abs"></div>
                              <span class="text center-abs" id="minutes"></span>
                              <h3>Minutes</h3>
                            </div>

                            <div class="chart">
                              <svg class="center-abs" width="100" height="100">
                                <circle class="outer" cx='50' cy='50' r='45'></circle>
                              </svg>
                              <div class="circle1 center-abs"></div>
                              <span class="text center-abs" id="seconds"></span>
                              <h3>Seconds</h3>
                            </div>
                          </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6" style="padding: 20px;">
                      <h3>Mas'ul kotib: +99866 222-37-61</h3>
                      <h3>Call center</h3>
                      <div class="row">
                        <div class="col-md-6 col-6">
                          +998 95 410-80-11
                        </div>
                         <div class="col-md-6 col-6">
                          +998 95 410-80-12
                        </div>
                         <div class="col-md-6 col-6">
                          +998 95 410-80-13
                        </div>
                         <div class="col-md-6 col-6">
                          +998 95 410-80-14
                        </div>  
                      </div>
                    <p><hr style="height:1px;border-width:0;color:lightgrey;background-color:lightgrey"></p> 
                    <div class="row">
                      <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/56" class="qabul_button">
                              <span style="color:#000000">Call-markaz</span>
                            </a>
                        </p>  
                      </div>
                      <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                       <p>
                            <a href="https://uzfi.uz/uz/page/57" class="qabul_button">
                              <span style="color:#000000">Qabul nizomi</span>
                            </a>
                        </p>  
                      </div>
                       <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/60" class="qabul_button">
                              <span style="color:#000000">Imtihon fanlar ro'yxati</span>
                            </a>
                        </p>  
                      </div>
                      <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/59" class="qabul_button">
                              <span style="color:#000000">Hujjatlar to'plami</span>
                            </a>
                        </p>  
                      </div>
                       <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/64" class="qabul_button">
                              <span style="color:#000000">O'tish ballari</span>
                            </a>
                        </p>  
                      </div>
                         <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/58" class="qabul_button">
                              <span style="color:#000000">Qabul kvotasi</span>
                            </a>
                        </p>  
                      </div>
                      <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/73" class="qabul_button">
                              <span style="color:#000000">Eslatma</span>
                            </a>
                        </p>  
                      </div>
                      <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/74" class="qabul_button">
                              <span style="color:#000000">Imtiyozlar</span>
                            </a>
                        </p>  
                      </div>
                      <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://uzfi.uz/uz/page/62" class="qabul_button">
                              <span style="color:#000000">Qabul komissiyasi joylashuv o'rni</span>
                            </a>
                        </p>  
                      </div>
                       <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-2">
                        <p>
                            <a href="https://dtm.uz/info/textbooks" target="_blank" class="qabul_button">
                              <span style="color:#000000">Tavsiya etilgan darsliklar</span>
                            </a>
                        </p>  
                      </div>
                    </div>
                    </div>
                </div>
            </div>
               
          </section>    
      </div>
    </div> -->


<style type="text/css">
  .qabul_button {
    width: 300px;
    height: 50px;
    text-decoration: none;
    padding: 10px;
    color: black;
    border: 0;
    letter-spacing: 3px;
    background: white;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: -6px 0px 0px 0px #0d6efd;
  }
svg {
     margin-left: 0px !important; 
}
.center-abs {
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: absolute;

}

.charts {
  display: flex;
}
.chart {
  position: relative;
  width: 25%;
  height: 260px;
}

.chart h3 {
  color: #fff;
  font-size: 1.5em;
  position: absolute;
  bottom: 90px;
  text-align: center;;
  width: 100%;
  /*text-shadow: 1px 1px 10px #000;*/
}

.chart svg {
  z-index: 2;
}


.circle1 {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
  border: 10px #baeaff solid;
}
.text {
  z-index: 3;
  text-align: center;
  width: 100%;
  font-size: 2em;
  font-weight: 700;
  color: #0096da;
}

.outer {
  fill: transparent;
  stroke: #0096da;
  stroke-width: 10;
  stroke-dasharray: 289;
  transform: rotate(270deg) translate(-100px, 0);
}


</style>











<!-- 

<script type="text/javascript">
  // Set the date we're counting down to
var countDownDate = new Date("July 27, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  effectCircle(days, hours, minutes, seconds);

}, 1000);

effectCircle = function(d, h, m, s){
  const max_sec = 60;
  const max_min = 60;
  const max_hour = 24;
  const max_day = 30;

  const strokeDashoffset = 289;

  var chart = document.getElementsByClassName('chart');

  var valPerDay = strokeDashoffset / max_day;
  var size = strokeDashoffset - (valPerDay * d);
  chart[0].style.strokeDashoffset = size;


   var valPerHour = strokeDashoffset / max_hour;
  var size = strokeDashoffset - (valPerHour * h);
  chart[1].style.strokeDashoffset = size;

   var valPerMin = strokeDashoffset / max_min;
  var size = strokeDashoffset - (valPerMin * m);
  chart[2].style.strokeDashoffset = size;

   var valPerSecond = strokeDashoffset / max_sec;
  var size = strokeDashoffset - (valPerSecond * s);
  chart[3].style.strokeDashoffset = size;


}
</script> -->




















    <style type="text/css">
      /*section {
        background-color: grey;
        display: flex;
        min-height: 100vh;
        justify-content: center;
        align-items: center;
      }*/
      .rasm {
        position: relative;
        height: 100vh;
        width: 100vh;
        object-fit: cover;
        background-position: center;
      }
      .sect-title {
        text-align: center;
      }
      .sect-title .qwert{
        line-height: 104px !important;
        color: white;
        font-size: 3em;
        position: absolute;
        transform: translate(-50%, -50%);
      }
      .sect-title .qwert:nth-child(1){
        color: transparent;
        -webkit-text-stroke:1px #0d6efd;
      }
      .sect-title .qwert:nth-child(2){
        color: #0d6efd;
        animation: wave 2s infinite;

      }
      @keyframes wave{
        0%, 100% {
          clip-path: polygon(
            0% 45%,
            41% 44%,
            33% 50%,
            54% 60%,
            70% 61%,
            84% 59%,
            100% 52%,
            100% 100%,
            0% 100%
          );
        }
        50% {
          clip-path: polygon(
            0% 60%,
            15% 65%,
            34% 66%,
            51% 62%,
            67% 50%,
            84% 45%,
            100% 46%,
            100% 100%,
            0% 100%
          );  
        }
      }
      @media all and (max-width: 992px) {
        .sect-title .qwert {
          font-size: 1.7em;
          line-height: 25px !important;
        }
        .sticky-wrapper {
          height: 35.14px !important;
        }
        .natija1 {
          font-size: 25px;
        }
        .natija2 {
          font-size: 20px;
        }
        .pop-cour .container .row .col-md-3 i{
          font-size: 25px;
        }
        .vbox-overlay {
          position: relative;
          width: 100vh;
          width: 100vh;
          background-position: center;
        }
        .rasm {
          height: 100vh;
        width: 100vh;
            object-fit: cover;
        background-position: center;*/
        }
        .block_havola .box .name {
          font-size: 15px;
        }
       
      } 
     /* .tel-versiya {
        position: 
        width: 100vh;
        height: 100vh;
      }*/
    </style>
    <div class="orqafon1 tel-versiya" style="padding-top: 5%;">
      <div class="container" style="padding-bottom: 5%;">
          <section class="sect-title" data-aos="fade-up" style="margin-bottom: 6.7%;">
            <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
            <span class="qwert"><?=Yii::t('app','Tezkor ilovalar')?></span>
            <span class="qwert"><?=Yii::t('app','Tezkor ilovalar')?></span>
          </section>
        <div class="row">
          <?
          $lang = Yii::$app->language;
            foreach ($tezkor_havolalar as $tezkor_havola) {
              if ($lang == 'uz') {
                $tezkor_havolalar_name = $tezkor_havola->name_uz;
              }elseif ($lang == 'en') {
                $tezkor_havolalar_name = $tezkor_havola->name_en;
              }elseif ($lang == 'ru') {
                $tezkor_havolalar_name = $tezkor_havola->name_ru;
              }
              ?>
              <div class="col-md-4 col-12">
                <div class="block_havola">
                  <div class="box">
                      <?
                        if ($tezkor_havola->link_type == 1) {
                          ?>
                             <a href="<?=Url::to(["site/".$tezkor_havola->link, 'id'=>$tezkor_havola->tez_men__sub_id])?>" class="name"><?=$tezkor_havolalar ? $tezkor_havolalar_name : ''?></a>
                          <?
                        }else{
                          ?>
                             <a target="_blank" href="<?=$tezkor_havolalar ? $tezkor_havola->link : ''?>" class="name"><?=$tezkor_havolalar ? $tezkor_havolalar_name : ''?></a>
                          <?
                        }
                      ?>
                      <div class="circle"></div>
                      <img src="../<?=$tezkor_havola->img?>" class="product">
                  </div>
                </div>
              </div>
              <?
            }
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../images/vanilla-tilt.min.js"></script>
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
        font-size: 35px !important;
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
    <section class="sect-title mb-5 mt-5" data-aos="fade-up">
      <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
      <span class="qwert"><?=Yii::t('app',"Asosiy ko'rsatkichlar")?></span>
      <span class="qwert"><?=Yii::t('app',"Asosiy ko'rsatkichlar")?></span>
    </section>
    <section class="pop-cour">
       <div class="container">
         <div class="row" style="text-align: center; padding: 25px;">
             <div class="col-md-3">
                 <i class="fa fa-graduation-cap"></i>
                 <p class="natija1 counter">5</p>
                 <p class="natija2"><?=Yii::t('app', 'Fakultetlar')?></p>
             </div>
             <div class="col-md-3">
                <i class="fas fa-users"></i>
                <p class="natija1 counter">3857</p>
                 <p class="natija2"><?=Yii::t('app','Talabalar')?></p>
             </div>
             <div class="col-md-3">
                 <i class="fas fa-chalkboard-teacher"></i>
                 <p class="natija1 counter">235</p>
                 <p class="natija2"><?=Yii::t('app', "O'qituvchilar")?></p>
             </div>
             <div class="col-md-3">
                 <i class="fa fa-briefcase" aria-hidden="true"></i>
                 <p class="natija1 counter">3</p>
                 <p class="natija2"><?=Yii::t('app','Hamkorlar')?></p>
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
      <section id="more-services" class="more-services orqafon1" style="padding-top: 2.5%; padding-bottom: 2.5%;">
        <div class="container">
          <section class="sect-title mb-5 mt-3" data-aos="fade-up" style="padding-bottom: 30px;">
            <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
            <span class="qwert"><?=Yii::t('app',"Yangiliklar")?></span>
            <span class="qwert"><?=Yii::t('app',"Yangiliklar")?></span>
          </section>
          <div class="row">
        <?
        $lang = Yii::$app->language;
          foreach ($news as $new) {
            if ($lang == 'uz') {
                $news_name = $new->name_uz;
              }elseif ($lang == 'en') {
                $news_name = $new->name_en;
              }elseif ($lang == 'ru') {
                $news_name = $new->name_ru;
              }
              ?>
                  <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="new_date">
                        <i class="fa fa-calendar"><?=$news ? $new->date : ''?></i>
                        <div><i class="fa fa-eye"><?=$news ? $new->views : ''?></i></div>
                      </div>
                      <div class="card" style='background-image: url("arguments/dr_sl_img/<?=$news ? $new->img : ''?>");' data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                          <a href="<?=Url::to(['site/pages', 'id'=>$new->id])?>" class="card-text"><?=yii\helpers\StringHelper::truncate($news ? $news_name : '', 60, '...')?></a>
                          <!-- <div class="read-more"><a href=""><i class="icofont-arrow-right"></i>Batafsil</a></div> -->
                        </div>
                      </div>
                  </div>
              <?
          }
        ?>
         </div>
         <div style="text-align: center; font-size: 20px; margin-top: 40px;">
           <a href="<?=Url::to(['site/allpages', 'id'=>3])?>" class="btn btn-sm btn-primary rounded-pill"><?=Yii::t('app','Barchasi')?></a>
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

</style>
<!-- little slider -->
 <section class="pop-cour">
       <div class="container">
          <div style="margin-top: 40px; margin-bottom: 20px;">
               <div class="row">
                   <?
                    $lang = Yii::$app->language;
                    foreach ($dr_slider_img as $dr_slider) {
                       if ($lang == 'uz') {
                          $dr_slider_img_name = $dr_slider->name_uz;
                          $dr_slider_img_content = $dr_slider->content_uz;
                          $dr_slider_img_field = $dr_slider->field_uz;
                        }elseif ($lang == 'en') {
                          $dr_slider_img_name = $dr_slider->name_en;
                          $dr_slider_img_content = $dr_slider->content_en;
                          $dr_slider_img_field = $dr_slider->field_en;
                        }elseif ($lang == 'ru') {
                          $dr_slider_img_name = $dr_slider->name_ru;
                          $dr_slider_img_content = $dr_slider->content_ru;
                          $dr_slider_img_field = $dr_slider->field_ru;
                        }
                        ?>
                            <div class="col-md-8 direktor_slider">
                          <?=$dr_slider_img ? $dr_slider_img_content : ''?>
                           <p style="font-size: 18px; color: white; float: right; font-weight: bold; margin-top: 20px;"><?=$dr_slider_img ? $dr_slider_img_name : ''?> <br><span style="font-size: 16px; color: white; float: right; font-weight: bold;"><?=$dr_slider_img ? $dr_slider_img_field : ''?></span></p>
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
    <section id="more-services" class="more-services orqafon1" style="padding-top: 3%; padding-bottom: 3%;">
      <div class="container">
        <section class="sect-title mb-5 mt-3" data-aos="fade-up" style="padding-bottom: 30px;">
          <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
          <span class="qwert"><?=Yii::t('app',"E'lonlar")?></span>
          <span class="qwert"><?=Yii::t('app',"E'lonlar")?></span>
        </section>
        <div class="row">
    <?
    $lang = Yii::$app->language;
        foreach ($event as $events) {
           if ($lang == 'uz') {
              $event_name = $events->name_uz;
            }elseif ($lang == 'en') {
              $event_name = $events->name_en;
            }elseif ($lang == 'ru') {
              $event_name = $events->name_ru;
            }
            ?>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="new_date">
                      <i class="fa fa-calendar"><?=$event ? $events->date : ''?></i>
                      <div><i class="fa fa-eye"><?=$event ? $events->views : ''?></i></div>
                    </div>
                    <div class="card" style='background-image: url("arguments/dr_sl_img/<?=$event ? $events->img : ''?>");' data-aos="fade-up" data-aos-delay="100">
                      <div class="card-body">
                        <a href="<?=Url::to(['site/pages', 'id'=>$events->id])?>" class="card-text"><?=yii\helpers\StringHelper::truncate($event ? $event_name : '', 60, '...')?></a>
                      </div>
                    </div>
                </div>
            <?
        }
    ?>
        </div>
         <div style="text-align: center; font-size: 20px; margin-top: 40px;">
           <a href="<?=Url::to(['site/allpages', 'id'=>4])?>" class="btn btn-sm btn-primary rounded-pill"><?=Yii::t('app','Barchasi')?></a>
         </div>
      </div>
    </section>

   
 <!-- video -->
     <section class="orqafon" style="padding-top: 3%; padding-bottom: 1%;">
       <div class="container">
           <section class="sect-title mb-5" data-aos="fade-up" style="padding-bottom: 5px;">
            <span class="qwert"><?=Yii::t('app',"Video Lavha")?></span>
            <span class="qwert"><?=Yii::t('app',"Video Lavha")?></span>
          </section>
          <section class="hero--area section-padding-80 mb-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="tab-content">
                          <?
                            $i=1;
                            $lang = Yii::$app->language;
                            foreach ($video_gallery as $video_gallery_key) {
                              if ($lang == 'uz') {
                                $video_gallery_key_name = $video_gallery_key->name_uz;
                                $video_gallery_key_type = $video_gallery_key->type_uz;
                              }elseif ($lang == 'en') {
                                $video_gallery_key_name = $video_gallery_key->name_en;
                                $video_gallery_key_type = $video_gallery_key->type_en;
                              }elseif ($lang == 'ru') {
                                $video_gallery_key_name = $video_gallery_key->name_ru;
                                $video_gallery_key_type = $video_gallery_key->type_ru;
                              }
                              ?>
                                  <div class="tab-pane fade <?if($i==1){?> show active<?$i=2;}?>" id="post-<?=$video_gallery_key->id?>" role="tabpanel" aria-labelledby="post-<?=$video_gallery_key->id?>-tab">
                                <!-- Single Feature Post -->
                                    <div class="single-feature-post video-post bg-img" style="background-image: url(<?=$video_gallery_key->img?>);">
                                        <!-- Play Button -->
                                     
                                        <a class="venobox play-btn mb-4" data-autoplay="true" data-vbtype="video" href="<?=$video_gallery_key->link?>"></a>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-cata"><?=$video_gallery_key_type?></a>
                                            <a href="" class="post-title"><?=$video_gallery_key_name?></a>
                                        </div>

                                        <!-- Video Duration -->
                                        <span class="video-duration"><?=$video_gallery_key->video_duration?></span>
                                    </div>
                                  </div>
                              <?
                            }
                          ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 col-lg-4">
                        <ul class="nav" id="boxscroll" role="tablist">
                          <?
                            $i=1;
                            foreach ($video_gallery as $video_gallery_key) {
                              ?>
                                <li class="nav-item">
                                    <a class="nav-link<?if($i==1){?> active<?$i=2;}?>" id="post-<?=$video_gallery_key->id?>-tab" data-toggle="pill" href="#post-<?=$video_gallery_key->id?>" role="tab" aria-controls="post-<?=$video_gallery_key->id?>" aria-selected="true">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post style-2 d-flex align-items-center">
                                            <div class="post-thumbnail">
                                                <img src="<?=$video_gallery_key->img?>" alt="">
                                            </div>
                                            <div class="post-content">
                                                <span class="post-title"><?=yii\helpers\StringHelper::truncate($video_gallery ? $video_gallery_key->name_uz : '', 45, '...')?></span>
                                                <div class="post-meta d-flex justify-content-between">
                                                    <?=$video_gallery_key->type_uz?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                              <?
                            }
                          ?>
                        </ul>
                    </div>
                </div>
            </div>
          </section>    
       </div>
     </section>
     

    <style type="text/css">
      #boxscroll {
  position: relative;
  z-index: 1;
  background-color: #393c3d;
  width: 100%;
  height: 500px;
  overflow: auto; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    #boxscroll {
      height: 400px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    #boxscroll {
      height: 350px; } }
  @media only screen and (max-width: 767px) {
    #boxscroll {
      height: 300px; } }
  #boxscroll .nav-link {
    padding: 0;
    padding: 15px 20px;
    border-left: 4px solid transparent; }
    #boxscroll .nav-link.active {
      display: inline-block;
      
      background-color: #4d5051;
      border-left-color: #0d0dfd; }


.single-blog-post {
  position: relative;
  z-index: 1;
  margin-bottom: 20px; }
  .single-blog-post:last-child {
    margin-bottom: 0; }
  .single-blog-post .post-thumbnail {
    position: relative;
    z-index: 1;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100px;
    flex: 0 0 100px;
    max-width: 100px;
    width: 100px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-blog-post .post-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .single-blog-post .post-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px; } }
    @media only screen and (max-width: 767px) {
      .single-blog-post .post-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px; } }
    .single-blog-post .post-thumbnail img {
      width: 100%; }
  .single-blog-post .post-content {
    position: relative;
    z-index: 1;
    padding-left: 20px; }
    .single-blog-post .post-content .post-title {
      color: #ffffff;
      margin-bottom: 5px;
      display: block;
      /*font-size: 15px;*/
      font-weight: 700; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-blog-post .post-content .post-title {
          font-size: 12px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-blog-post .post-content .post-title {
          font-size: 10px; } }
      @media only screen and (max-width: 767px) {
        .single-blog-post .post-content .post-title {
          font-size: 10px; } }
      .single-blog-post .post-content .post-title:hover, .single-blog-post .post-content .post-title:hover {
        color: #db4437; }
    .single-blog-post .post-content .post-meta a {
      display: inline-block;
      color: #595959;
      font-size: 12px; }
      .single-blog-post .post-content .post-meta a:hover, .single-blog-post .post-content .post-meta a:hover {
        color: #ffffff; }
  .single-blog-post.style-2 {
    margin-bottom: 0; }
    .single-blog-post.style-2 .post-thumbnail {
      position: relative;
      z-index: 1;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 110px;
      flex: 0 0 110px;
      max-width: 110px;
      width: 110px; }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-blog-post.style-2 .post-thumbnail {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 80px;
          flex: 0 0 80px;
          max-width: 80px;
          width: 80px; } }
      @media only screen and (max-width: 767px) {
        .single-blog-post.style-2 .post-thumbnail {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 80px;
          flex: 0 0 80px;
          max-width: 80px;
          width: 80px; } }
      .single-blog-post.style-2 .post-thumbnail img {
        width: 100%; }
    .single-blog-post.style-2 .post-content {
      position: relative;
      z-index: 1;
      padding-left: 20px; }
      .single-blog-post.style-2 .post-content .post-title {
        color: #ffffff;
        margin-bottom: 10px;
        display: block;
        font-weight: 700;
        font-size: 13px;
        line-height: 1.5; }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .single-blog-post.style-2 .post-content .post-title {
            font-size: 14px; } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .single-blog-post.style-2 .post-content .post-title {
            font-size: 13px; } }
        @media only screen and (max-width: 767px) {
          .single-blog-post.style-2 .post-content .post-title {
            font-size: 13px; } }
      .single-blog-post.style-2 .post-content .post-meta span {
        display: inline-block;
        color: #a6a6a6;
        font-size: 12px; }
  .single-blog-post.style-3 {
    margin-bottom: 0; }
    .single-blog-post.style-3 .post-thumbnail {
      position: relative;
      z-index: 1;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 140px;
      flex: 0 0 140px;
      max-width: 140px;
      width: 140px; }
      @media only screen and (max-width: 767px) {
        .single-blog-post.style-3 .post-thumbnail {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 100px;
          flex: 0 0 100px;
          max-width: 100px;
          width: 100px; } }
    .single-blog-post.style-3 .post-content .post-title {
      color: #ffffff;
      margin-bottom: 15px;
      display: block;
      font-weight: 700;
      font-size: 16px;
      line-height: 1.5; }
      @media only screen and (max-width: 767px) {
        .single-blog-post.style-3 .post-content .post-title {
          font-size: 14px; } }
      .single-blog-post.style-3 .post-content .post-title:hover, .single-blog-post.style-3 .post-content .post-title:hover {
        color: white; }
    .single-blog-post.style-3 .post-content .post-meta span {
      display: inline-block;
      color: #a6a6a6;
      font-size: 12px; }

.single-feature-post.video-post {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 500px; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-feature-post.video-post {
      height: 400px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-feature-post.video-post {
      height: 350px; } }
  @media only screen and (max-width: 767px) {
    .single-feature-post.video-post {
      height: 320px; } }
  .single-feature-post.video-post::before {
    content: "";
    position: absolute;
    height: 50%;
    width: 100%;
    z-index: 5;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%); }
  .single-feature-post.video-post .play-btn {
    position: absolute;
    margin-top: -30px;
    margin-left: -30px;
    top: 50%;
    left: 50%;
    width: 60px;
    height: 60px;
    font-size: 24px;
    /*background-color: #db4437;*/
    border-radius: 50%;
    color: #ffffff;
    line-height: 60px;
    text-align: center;
    padding: 0 0 0 3px;
    z-index: 99; }
    @media only screen and (max-width: 767px) {
      .single-feature-post.video-post .play-btn {
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 20px; } }
  .single-feature-post.video-post .post-content {
    position: absolute;
    left: 30px;
    bottom: 30px;
    z-index: 59;
    width: 80%; }
    @media only screen and (max-width: 767px) {
      .single-feature-post.video-post .post-content {
        left: 15px;
        bottom: 15px; } }
    .single-feature-post.video-post .post-content .post-title {
      font-size: 20px;
      display: block;
      color: #ffffff;
      margin-bottom: 10px; }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-feature-post.video-post .post-content .post-title {
          font-size: 15px; } }
      @media only screen and (max-width: 767px) {
        .single-feature-post.video-post .post-content .post-title {
          font-size: 15px; } }
      .single-feature-post.video-post .post-content .post-title:hover, .single-feature-post.video-post .post-content .post-title:focus {
        color: white; }
    .single-feature-post.video-post .post-content .post-meta {
      position: relative;
      z-index: 1; }
      .single-feature-post.video-post .post-content .post-meta a {
        display: inline-block;
        margin-right: 30px;
        color: #ffffff; }
        .single-feature-post.video-post .post-content .post-meta a:hover, .single-feature-post.video-post .post-content .post-meta a:focus {
          color: #0d0dfd; }
  .single-feature-post.video-post .video-duration {
    display: inline-block;
    position: absolute;
    right: 30px;
    bottom: 30px;
    background-color: #0f1112;
    padding: 6px 12px;
    border-radius: 2px;
    font-size: 14px;
    color: #ffffff;
    line-height: 1;
    z-index: 79; }


.bg-img {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat; }

.bg-transparent {
  background-color: transparent !important; }


    </style>
   
   

  <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg orqafon1">

      <div class="container" data-aos="fade-up">
       <section class="sect-title mb-5" data-aos="fade-up" style="padding-bottom: 30px;">
        <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
        <span class="qwert"><?=Yii::t('app',"Foydali saytlar")?></span>
        <span class="qwert"><?=Yii::t('app',"Foydali saytlar")?></span>
      </section>
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


  <link href="../and/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->

    <!-- Template Stylesheet -->
    <link href="../and/css/style.css" rel="stylesheet">



        <!-- Screenshot Start -->
        <div class="container-xxl py-5 orqafon1">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4 text-center">O'zbekiston-Finlandiya pedagogika institutining rasmiy mobil ilovasi</h4>
                       <div class="row g-4">
                            <div class="col-sm-6 col-6 wow fadeIn mb-4" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                   <div class="qr">
                                     <img src="../images/qr.png">
                                   </div>
                                <a href="https://play.google.com/store/apps/details?id=uzfi.uz" class="d-flex bg-primary-gradient rounded py-2 px-2">
                                    <i class="fa fa-apple fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3" style="margin-left: 5%;">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">App Store</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-6 wow fadeIn mb-4" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                                   <div class="qr">
                                     <img src="../images/qr.png">
                                   </div>
                                <a href="https://play.google.com/store/apps/details?id=uzfi.uz" class="d-flex bg-secondary-gradient rounded py-2 px-2">
                                    <i class="fa fa-android fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3" style="margin-left: 5%;">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">Play Store</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel">
                            <!-- <img class="img-fluid" src="img/screenshot-1.png" alt=""> -->
                            <img class="img-fluid" src="and/img/imhg.png" alt="">
                            <img class="img-fluid" src="and/img/Screenshot_1655377225.png" alt="">
                            <img class="img-fluid" src="and/img/Screenshot_1655380187.png" alt="">
                            <img class="img-fluid" src="and/img/Screenshot_1655380237.png" alt="">
                            <img class="img-fluid" src="and/img/Screenshot_1655380246.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot End -->
        <!-- Screenshot End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../and/lib/wow/wow.min.js"></script>
    <script src="../and/lib/counterup/counterup.min.js"></script>
    <script src="../and/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../and/js/main.js"></script>


<style type="text/css">
  .qr img {
    width: 50%;
    margin-bottom: 20px;
    margin-left: 25%;
  }
</style>



  <!-- <div id="preloader"></div> -->
  <style type="text/css">
    .direktor_slider p span>span {
      font-size: 20px;
      background-color: #3f78e0 !important;
      color: white;
      /*text-align: center !important;*/
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>

  <script type="text/javascript">
    $(function){
      $(.carousel).carousel({
        interval:2000,
        pause: false,
        wrap: false,
        keyboard: true
      })
    }
  </script>


