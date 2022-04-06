
 <?
use yii\helpers\Url;

$lang = Yii::$app->language;
  foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
    if ($lang == 'uz') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_uz;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_uz;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_uz;
        $kafedra_oqituvchilari_manzil = $kafedra_oqituvchilari_item->manzil_uz;
      }elseif ($lang == 'en') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_en;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_en;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_en;
        $kafedra_oqituvchilari_manzil = $kafedra_oqituvchilari_item->manzil_en;
      }elseif ($lang == 'ru') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_ru;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_ru;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_ru;
        $kafedra_oqituvchilari_manzil = $kafedra_oqituvchilari_item->manzil_ru;
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
              <h4 class="mt-3" style="text-align: center; text-transform: uppercase;"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_name : ''?></h4>
              <p style="text-align: center;"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_lavozim : ''?>, <br><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_daraja : ''?></p>
              <hr style="margin: 0px; margin-bottom: 5%;">
              <p><i class="fa fa-telegram"></i><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->telegram : ''?></p>
              <p><i class="fa fa-envelope"></i> <?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->email : ''?></p>
              <p><i class="fa fa-phone"></i><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->tel : ''?></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
              <h4 style="color: black;"><img src="../../images/icon/db4.png" alt="" /><?=Yii::t('app','Shaxsiy kabinet')?></h4>
             <hr style="margin: 0px; margin-bottom: 5%;">
            <table class="table table-bordered mt-4" style="color: black;">
              <tbody>
                <tr>
                  <th scope="row" class="table_first"><?=Yii::t('app','Ism')?></th>
                  <td><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_name : ''?></td>
                </tr>
                <tr>
                  <th scope="row" class="table_first"><?=Yii::t('app','E-mail')?>:</th>
                  <td colspan="2"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->email : ''?></td>
                </tr>
                 <tr>
                  <th scope="row" class="table_first"><?=Yii::t('app','Tel')?>:</th>
                  <td colspan="2"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->tel : ''?></td>
                </tr>
                 <tr>
                  <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
                  <td colspan="2"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_manzil : ''?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
        </div>
    </div>
</div>


<style type="text/css">
    table, tr, td, th {
      /*font-size: 18px;*/
      color: black;
    }
    ul li a {
      /*font-size: 18px;*/
    }
    .left_bar_tea p i {
        margin-right: 20px;
        /*font-size: 20px;*/
        /*font-size: 18px;*/
        color: black;
    } 
    .left_bar_tea p {
        padding: 0px 20px;
        color: black;
        /*font-size: 18px;*/
    } 
    .img_teacher {
        position: relative;
        width: 100%;
        /*height: 280px;*/
       /* border: 2px solid #fff;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        border: 1px solid #F3F2F2;
        /*margin-top: -50%;*/
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border-width: 3px 3px 3px;
        border-style: solid solid none;
        border-color: #F3F2F2 #F3F2F2 -moz-use-text-color;
        border-image: none;
        z-index: 2; 
    }
    .table-bordered>:not(caption)>*>* {
      padding: 8px;
    }
    .left_bar_tea {
        width: 98%;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        min-height: 100% !important;
    }
    body {
      background-color: #f4f4f5;
    }
    .middle_bar_tea {
        position: relative;
        width: 98%;
        padding: 5%;
        background-color: #fff;
        transform-style: preserve-3d;
        /*box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border: 1px solid #F3F2F2;
        margin-bottom: 5%;
        margin-top: 5%;
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
     cursor: pointer;
}
</style>


