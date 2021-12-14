 <?
use yii\helpers\Url;


  foreach ($tutor_info as $tutor_info_item) {
    # code...
  }
 ?>
<section class="orqarasm">
    <img src="../../images/pro-bg.jpg" width="100%;">
        <div class="pro-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <ul>
                            <li><a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_item->id])?>" class="pro-act">Shaxsiy kabinet</a></li>
                            <li><a href="<?=Url::to(['site/tutor_info', 'id'=>$tutor_info_item->id])?>">Umumiy malumot</a></li>
                            <li><a href="<?=Url::to(['site/tutor_vazifa', 'id'=>$tutor_info_item->id])?>">Tutorlar vazifasi</a></li>
                            <li><a href="<?=Url::to(['site/tutor_dars_jadvali', 'id'=>$tutor_info_item->id])?>">Kun tartibi</a></li>
                            <li><a href="<?=Url::to(['site/tutor_pupils', 'id'=>$tutor_info_item->id])?>">Biriktirilgan talabalari</a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
</section>
<div class="container ortafon">
    <div class="row">
            <div class="col-md-3 col-12 mb-4">
            <div class="left_bar_tea">
                <img src="../<?=$tutor_info ? $tutor_info_item->img : ''?>" class="img_teacher">
              <h3 class="mt-3" style="text-align: center;"><?=$tutor_info ? $tutor_info_item->name_uz : ''?></h3>
              <p style="text-align: center;"><?=$tutor_info ? $tutor_info_item->biriktirilgan_uz : ''?></p>
              <hr style="margin: 0px; margin-bottom: 20px;">
              <p><i class="fa fa-telegram"></i><?=$tutor_info ? $tutor_info_item->telegram : ''?></p>
              <p><i class="fa fa-facebook"></i> <?=$tutor_info ? $tutor_info_item->tel : ''?></p>
              <p><i class="fa fa-instagram"></i><?=$tutor_info ? $tutor_info_item->email : ''?></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
              <h4 style="color: black;"><img src="../../images/icon/tutor.ico" alt="" />Biriktirilgan talabalar</h4>
               <hr style="margin: 0px; margin-bottom: 20px;">
               <?=$tutor_info ? $tutor_info_item->content_uz : ''?>
          </div>
        </div>
    </div>
</div>

<style type="text/css">
    p, li, a, span, table, tr, td, th, label {
         font-size: 18px;
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: none;
    }
    .row .col-md-9 .middle_bar_tea ul li{
         font-size: 18px;
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
    }
      ul li a {
      font-size: 18px;
    }
    .left_bar_tea p i {
        margin-right: 20px;
        font-size: 20px;
        font-size: 18px;
        color: black;
    } 
       .left_bar_tea p {
        padding: 0px 20px;
        font-size: 18px;
        color: black;
    } 
    .img_teacher {
        position: relative;
        width: 100%;
       /* border: 2px solid #fff;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        border: 1px solid #F3F2F2;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border-width: 3px 3px 3px;
        border-style: solid solid none;
        border-color: #F3F2F2 #F3F2F2 -moz-use-text-color;
        border-image: none;
        z-index: 2; 
    }
   .left_bar_tea {
        width: 98%;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        max-height: 96% !important;
    }
    .middle_bar_tea {
        position: relative;
        width: 98%;
        padding: 20px;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        margin-bottom: 30px;
        margin-top: 35px;
    }
    .orqarasm {
        position: relative;
        display: inline-block;
        background-color: #f7f8f9;
        /*z-index: 1;*/
    }
    .ortafon {
        background-color: #fff;
         box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
         border: 1px solid #F3F2F2;
        transform-style: preserve-3d;
        margin-bottom: 40px;
    }
       .pro-menu{
     background: #3f78e0;
     box-shadow: 0px 4px 10px hsla(0, 0%, 0%, 0.08);
     position: relative;
     /*z-index: 0;*/
}
 .pro-menu ul{
     margin-bottom: 0px;
    /* margin: 0 auto;
     */
     display: table;
     /*margin-left: 25px;*/
}
 .pro-menu ul li{
     display: inline-block;
}
 .pro-act{
     color: #fff !important;
}
 .pro-menu ul li a{
     padding: 10px 14px;
     line-height: 40px;
     color: #fff;
     font-weight: 500;
     text-decoration: none;
     border-left: 1px solid #405d7d;
}
 .pro-menu ul li a:hover{
     background: #225fd0;
     color: #fff;
}
</style>

 
  
  