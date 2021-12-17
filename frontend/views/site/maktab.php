 <?
use yii\helpers\Url;
foreach ($maktab as $maktab_item) {
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
                            <li><a href="<?=Url::to(['site/maktab', 'id'=>$maktab_item->id])?>" class="pro-act"><?=Yii::t('app',"Umumiy ma'lumot")?></a></li>
                            <li><a href="<?=Url::to(['site/maktab_profile', 'id'=>$maktab_item->id])?>">Maktab tarixi</a></li>
                            <li><a href="<?=Url::to(['site/maktab_passpord', 'id'=>$maktab_item->id])?>">Maktab passporti</a></li>
                            <li><a href="<?=Url::to(['site/maktab_togaraklari', 'id'=>$maktab_item->id])?>">Maktab to'garaklari</a></li>
                            <li><a href="<?=Url::to(['site/maktab_oqituvchilari', 'id'=>$maktab_item->id])?>">Maktab o'qituvchilari</a></li>
                             <li><a href="<?=Url::to(['site/maktab_talabalari', 'id'=>$maktab_item->id])?>">Maktab o'quvchilari</a></li>
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
                <img src="../<?=$maktab ? $maktab_item->img : ''?>" class="img_teacher">
              <h3 class="mt-3" style="text-align: center;"><?=$maktab ? $maktab_item->name_uz : ''?></h3>
              <p style="text-align: center;"><?=$maktab ? $maktab_item->kimga_biriktirilgan_uz : ''?></p>
              <hr style="margin: 0px; margin-bottom: 20px;">
              <p><i class="fa fa-phone"></i> <?=$maktab ? $maktab_item->tel : ''?></p>
              <p><i class="fa fa-fax"></i><?=$maktab ? $maktab_item->fax : ''?></p>
              <p><i class="fa fa-envelope"></i><?=$maktab ? $maktab_item->email : ''?></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
              <h4 style="color: black;"><img src="../../images/icon/maktab.ico" alt="" /><?=Yii::t('app',"Umumiy ma'lumot")?></h4>
               <hr style="margin: 0px; margin-bottom: 20px;">
               <table class="table table-bordered mt-4" style="color: black;">
              <tbody>
                <tr>
                  <th scope="row" class="table_first">Maktab nomi</th>
                  <td><?=$maktab ? $maktab_item->name_uz : ''?></td>
                </tr>
                <tr>
                  <th scope="row" class="table_first"><?=Yii::t('app','E-mail')?>:</th>
                  <td colspan="2"><?=$maktab ? $maktab_item->email : ''?></td>
                </tr>
                 <tr>
                  <th scope="row" class="table_first">Sektor:</th>
                  <td colspan="2"><?=$maktab ? $maktab_item->sektor_uz : ''?></td>
                </tr>
                 <tr>
                  <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
                  <td colspan="2"><?=$maktab ? $maktab_item->manzil_uz : ''?></td>
                </tr>
              </tbody>
            </table>
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
        max-height: 100% !important;
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

 
  
  