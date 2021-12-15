 <?
use yii\helpers\Url;
$lang = Yii::$app->language;
  foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
    if ($lang == 'uz') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_uz;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_uz;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_uz;
        $kafedra_oqituvchilari_manzil = $kafedra_oqituvchilari_item->manzil_uz;
        $kafedra_oqituvchilari_content = $kafedra_oqituvchilari_item->content_uz;
      }elseif ($lang == 'en') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_en;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_en;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_en;
        $kafedra_oqituvchilari_manzil = $kafedra_oqituvchilari_item->manzil_en;
        $kafedra_oqituvchilari_content = $kafedra_oqituvchilari_item->content_en;
      }elseif ($lang == 'ru') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_ru;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_ru;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_ru;
        $kafedra_oqituvchilari_manzil = $kafedra_oqituvchilari_item->manzil_ru;
        $kafedra_oqituvchilari_content = $kafedra_oqituvchilari_item->content_ru;
      }
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
                            <li><a href="<?=Url::to(['site/kafedra', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>" class="pro-act"><?=Yii::t('app','Shaxsiy kabinet')?></a></li>
                            <li><a href="<?=Url::to(['site/kafedra_info', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>"><?=Yii::t('app',"Umumiy ma'lumot")?></a></li>
                            <li><a href="<?=Url::to(['site/kafedra_book', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>"><?=Yii::t('app','Ilmiy faoliyat')?></a></li>
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
                <img src="../<?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->img : ''?>" class="img_teacher">
                <h2 class="mt-3" style="text-align: center;"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_name : ''?></h2>
                <p style="text-align: center;"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_lavozim : ''?>, <br><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_daraja : ''?></p>
                <hr style="margin: 0px; margin-bottom: 20px;">
                <p><i class="fa fa-telegram"></i><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->telegram : ''?></p>
                <p><i class="fa fa-envelope"></i> <?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->email : ''?></p>
                <p><i class="fa fa-phone"></i><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->tel : ''?></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
              <h4 style="color: black;"><img src="../../images/icon/db1.png" alt="" /><?=Yii::t('app','Tarjimai hol')?></h4>
               <hr style="margin: 0px; margin-bottom: 20px;">
               <?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_content : ''?>
          </div>
        </div>
    </div>
</div>

<style type="text/css">
    p, li, a, span, table, tr, td, th, label {
         /*font-size: 18px;*/
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: none;
    }
    .row .col-md-9 .middle_bar_tea ul li{
         /*font-size: 18px;*/
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
        /*font-size: 20px;*/
        /*font-size: 18px;*/
        color: black;
    } 
       .left_bar_tea p {
        padding: 0px 20px;
        /*font-size: 18px;*/
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

 
  
  