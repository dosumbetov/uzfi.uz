<?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use backend\models\Images;
$lang = Yii::$app->language;
	foreach ($menu_sub as $menu_sub_item) {
	  if ($lang == 'uz') {
        $menu_sub_name = $menu_sub_item->name_uz;
      }elseif ($lang == 'en') {
        $menu_sub_name = $menu_sub_item->name_en;
      }elseif ($lang == 'ru') {
        $menu_sub_name = $menu_sub_item->name_ru;
      }
	}
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

    $this->title = $menu_sub_name;
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    // ['label' => 'Tutorlar', 'url' => ['site/tutor', 'id' => 13]],
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
        padding: 150px 0 0 0;
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
<div class="container salyt">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-5" style="text-transform: uppercase; text-align: center;"><?=$menu_sub_name?></h3>
        <?
          $idimg = $rektorat->image_id;
          $image = Images::find()->Where(['id'=>$idimg])->all();
          foreach ($image as $key) {
            ?>
            <img src="/frontend/web/arguments/rek_img/<?=$key->img?>" style="display: block;
              margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
            <?
          }
        ?>
				
			  <h4 style="text-align: center;" class="mt-4"><?=$rektorats ? $rektorat_name : ''?><br><span style="font-size: 18px;"><i><?=$rektorat ? $rektorat_lavozim : ''?></i></span></h4>


        <div class="profile">
          <a href="<?=Url::to(['site/teacher', 'id'=>$rektorat->id])?>">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <?=Yii::t('app',"Profilga o'tish")?>
          </a>
        </div>

			  <hr style="margin: 0px; margin-bottom: 5%; margin-top: 6%;">
				<table class="table table-bordered mt-4" style="color: black;">
				  <tbody>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Qabul vaqti')?></th>
				      <td><?=$rektorats ? $rektorat_qabul : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','Tel')?>:</th>
				      <td colspan="2"><?=$rektorats ? $rektorat->tel : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Fax')?>:</th>
				      <td colspan="2"><?=$rektorats ? $rektorat->fax : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'E-mail')?>:</th>
				      <td colspan="2"><?=$rektorats ? $rektorat->email : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','Telegram')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat->telegram : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat_manzil : ''?></td>
				    </tr>
				  </tbody>
				</table>
				<hr style="margin: 0px; margin-bottom: 5%;">
        <h3 class="text-center">Vazifalari</h3>
        <div class="text-justify"><?=$rektorat ? $rektorat_vazifa : ''?></div>
				
			</div>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">

		.row .col-md-8 .middle ul li{
         /*font-size: 18px;*/
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
    }
    body {
      background-color: #f4f4f5;
    }
	.middle {
		background-color: white;
		position: relative;
		display: block;
		border-radius: 10px;
		padding: 6%;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
		width: 99%;
		margin-bottom: 5%;
	}
	
	.table_first {
		font-weight: bold;
	}


.profile a{
    position: relative;
    display: inline-block;
    padding: 10px 10px;
    color: blue;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 2px;
    overflow: hidden;
    /*margin-right: 50px;*/
   
}
.profile a:hover{
    background: #3f78e0;
    color: white;
    box-shadow: 0 0 5px #3f78e0,
                0 0 25px #3f78e0,
                0 0 30px #3f78e0,
                0 0 500px #3f78e0;
}
.profile a:nth-child(1){
    filter: hue-rotate(10deg);
}
.profile a:nth-child(2){
    filter: hue-rotate(10deg);
}
.profile a span{
    position: absolute;
    display: block;
}
.profile a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#3f78e0);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
.profile a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#3f78e0);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
.profile a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#3f78e0);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}

 .middle span,p,th,div{
      color: black;
      font-family: "Times New Roman", Times, serif !important;
      font-size: 16px !important;
    }
.profile a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#03e9f4);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}

}


</style>