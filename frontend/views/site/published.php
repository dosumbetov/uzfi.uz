 <?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use backend\models\MenuSub;
use backend\models\Images;
$lang = Yii::$app->language;

foreach ($rektorats as $rektorat) {
  if ($lang == 'uz') {
      $rektorat_name = $rektorat->name_uz;
      $rektorat_lavozim = $rektorat->lavozim_uz;
      $rektorat_qabul = $rektorat->qabul_vaqti_uz;
      $rektorat_manzil = $rektorat->manzil_uz;
      $rektorat_vazifa = $rektorat->vazifasi_uz;
      $rektorat_tarjimaihol = $rektorat->tarjimaiyhol_uz;
    }elseif ($lang == 'en') {
      $rektorat_name = $rektorat->name_en;
      $rektorat_lavozim = $rektorat->lavozim_en;
      $rektorat_qabul = $rektorat->qabul_vaqti_en;
      $rektorat_manzil = $rektorat->manzil_en;
      $rektorat_vazifa = $rektorat->vazifasi_en;
      $rektorat_tarjimaihol = $rektorat->tarjimaiyhol_en;
    }elseif ($lang == 'ru') {
      $rektorat_name = $rektorat->name_ru;
      $rektorat_lavozim = $rektorat->lavozim_ru;
      $rektorat_qabul = $rektorat->qabul_vaqti_ru;
      $rektorat_manzil = $rektorat->manzil_ru;
      $rektorat_vazifa = $rektorat->vazifasi_ru;
      $rektorat_tarjimaihol = $rektorat->tarjimaiyhol_ru;
    }
  
}

$menu_sub = MenuSub::find()->Where(['id'=>$rektorat->rek_menu_sub_id])->all();
foreach ($menu_sub as $menu_sub_item) {
    if ($lang == 'uz') {
      $cmmenu_sub_item = $menu_sub_item->name_uz;
    }elseif ($lang == 'en') {
      $cmmenu_sub_item = $menu_sub_item->name_en;
    }elseif ($lang == 'ru') {
      $cmmenu_sub_item = $menu_sub_item->name_ru;
    }
}

  $idimg = $rektorat->image_id;
  $image = Images::find()->Where(['id'=>$idimg])->all();
  foreach ($image as $key) {
   
  }

$this->title = 'profile'
 ?>
 <div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <?
            echo Breadcrumbs::widget([
                'links' => [
                    ['label' => $cmmenu_sub_item, 'url' => ['site/rektorat', 'id' => $rektorat->rek_menu_sub_id]],
                    $this->title,
                ],
            ]); 
          ?>
        </div>
      </div>
    </div>
 </div>
 <style type="text/css">
  .breadcrumb {
    background-color: rgba(0, 0, 0, 0.5) !important;
  }
  .breadcrumb .breadcrumb-item a {
    color: white !important;
  }
  .breadcrumb .breadcrumb-item:hover a{
    color: blue !important;
  }
  .breadcrumb-item::before {
      float: left;
      padding-right: 0.5rem;
      color: white;
      content: "/";
  }
  .breadcrumb-item.active {
      color: white;
      opacity: 0.6;
  }
   .heros {
        width: 100%;
        background: url("../../images/jpa.jpg");
        position: relative;
        padding: 120px 0 0 0;
      }
       .heros:after {
        content: "";
        position: absolute;
          /*background-color: #0e14a2;*/
          height: 100vh;
          background-size: cover;
          background-position: center;
          z-index: 10;
        }
  }
  }
  }
 </style>
<section class="orqarasm">
    <!-- <img src="../../images/pro-bg.jpg" width="100%;"> -->
        <div class="pro-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <ul>
                             <li><a href="<?=Url::to(['site/teacher', 'id'=>$rektorat->id])?>" class="pro-act"><?=Yii::t('app','Shaxsiy kabinet')?></a></li>
                            <li><a href="<?=Url::to(['site/dbprofile', 'id'=>$rektorat->id])?>"><?=Yii::t('app',"Umumiy ma'lumot")?></a></li>
                            <li><a href="<?=Url::to(['site/published', 'id'=>$rektorat->id])?>"><?=Yii::t('app','Ilmiy faoliyat')?></a></li>
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
                <img src="/frontend/web/arguments/rek_img/<?=$key->img?>" class="img_teacher">
              <h5 class="mt-3" style="text-align: center;"><?=$rektorat ? $rektorat_name : ''?></h5>
              <p style="text-align: center; font-style: italic;"> <?=$rektorat ? $rektorat_lavozim : ''?></p>
              <hr style="margin: 0px; margin-bottom: 5%;">
              <p><i class="fa fa-telegram"> <?=$rektorat ? $rektorat->telegram : ''?></i></p>
              <p><i class="fa fa-facebook"> <?=$rektorat ? $rektorat->fax : ''?></i></p>
              <p><i class="fa fa-envelope"> <?=$rektorat ? $rektorat->email : ''?></i></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
              <h4 style="color: black;"><img src="../../images/icon/db2.png" alt="" /><?=Yii::t('app','Chop etilgan kitoblar')?></h4>
           <hr style="margin: 0px; margin-bottom: 2% !important;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?=Yii::t('app','Kitob nomi')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan joy')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan sana')?></th>
                </tr>
              </thead>
              <tbody>
                 
                  <?
                    foreach ($kitoblar as $kitob) {
                      $i=1;
                      if ($lang == 'uz') {
                        $kitob_nomi = $kitob->name_uz;
                        $kitob_publish = $kitob->published_place_uz;
                      }elseif ($lang == 'en') {
                        $kitob_nomi = $kitob->name_en;
                        $kitob_publish = $kitob->published_place_en;
                      }elseif ($lang == 'ru') {
                        $kitob_nomi = $kitob->name_ru;
                        $kitob_publish = $kitob->published_place_ru;
                      }
                      ?>
                        <tr>
                          <th scope="row"><?=$i;?></th>
                          <td><?=$kitoblar ? $kitob_nomi : ''?></td>
                          <td><?=$kitoblar ? $kitob_publish : ''?></td>
                          <td><?=$kitoblar ? $kitob->date : ''?></td>
                        </tr> 
                      <?
                      $i=$i+1;
                    }
                  ?>
               
              </tbody>
            </table>
            <h4 style="color: black;"><img src="../../images/icon/article.ico" alt="" /><?=Yii::t('app','Maqolalar')?></h4>
           <hr style="margin: 0px; margin-bottom: 2%!important;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?=Yii::t('app','Maqola nomi')?></th>
                  <th scope="col"><?=Yii::t('app','Maqola darajasi')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan sana')?></th>
                </tr>
              </thead>
              <tbody>
               
                    <?
                      foreach ($maqollar as $maqola) {
                        $i=1;
                        if ($lang == 'uz') {
                          $maqola_nomi = $maqola->name_uz;
                          $maqola_publish = $maqola->published_place_uz;
                        }elseif ($lang == 'en') {
                          $maqola_nomi = $maqola->name_en;
                          $maqola_publish = $maqola->published_place_en;
                        }elseif ($lang == 'ru') {
                          $maqola_nomi = $maqola->name_ru;
                          $maqola_publish = $maqola->published_place_ru;
                        }
                        ?>
                          <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?=$maqollar ? $maqola_nomi : ''?></td>
                            <td><?=$maqollar ? $maqola_publish : ''?></td>
                            <td><?=$maqollar ? $maqola->date : ''?></td>
                          </tr> 

                        <?
                        $i=$i+1;
                      }
                    ?>
                
              </tbody>
            </table>
          </div>
        </div>
    </div>
        </div>
    </div>
</div>


<style type="text/css">
  .table thead tr th {
    font-weight: bold;
  }
    .middle_bar_tea span,p,th,div{
      color: black;
      font-family: "Times New Roman", Times, serif;
      font-size: 16px !important;
    }
    .left_bar_tea p i {
        margin-right: 20px;
        color: black;
    } 
    .left_bar_tea p {
        padding: 0px 20px;
        color: black;
    } 
    .img_teacher {
        position: relative;
        width: 100%;
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
        background-color: #f4f4f5;
        transform-style: preserve-3d;
        box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
        border: 1px solid #F3F2F2;
        max-height: 100% !important;
    }
    body {
      background-color: #f4f4f5;
    }
    .middle_bar_tea {
        position: relative;
        width: 98%;
        padding: 20px;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border: 1px solid #F3F2F2;
        margin-bottom: 30px;
        margin-top: 35px;
    }
    .orqarasm {
        position: relative;
        display: inline-block;
        background-color: #f7f8f9;
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
    }
    .pro-menu ul{
         margin-bottom: 0px;
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
  