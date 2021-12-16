<?
use yii\helpers\Url;
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
	foreach ($rektorat as $rektorat_item) {
	  if ($lang == 'uz') {
        $rektorat_name = $rektorat_item->name_uz;
        $rektorat_lavozim = $rektorat_item->lavozim_uz;
        $rektorat_qabulvaqti = $rektorat_item->qabul_vaqti_uz;
        $rektorat_manzil = $rektorat_item->manzil_uz;
        $rektorat_content = $rektorat_item->content_uz;
      }elseif ($lang == 'en') {
        $rektorat_name = $rektorat_item->name_en;
        $rektorat_lavozim = $rektorat_item->lavozim_en;
        $rektorat_qabulvaqti = $rektorat_item->qabul_vaqti_en;
        $rektorat_manzil = $rektorat_item->manzil_en;
        $rektorat_content = $rektorat_item->content_en;
      }elseif ($lang == 'ru') {
        $rektorat_name = $rektorat_item->name_ru;
        $rektorat_lavozim = $rektorat_item->lavozim_ru;
        $rektorat_qabulvaqti = $rektorat_item->qabul_vaqti_ru;
        $rektorat_manzil = $rektorat_item->manzil_ru;
        $rektorat_content = $rektorat_item->content_ru;
      }
	}
?>
<div class="container salyt">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-5" style="text-transform: uppercase; text-align: center;"><?=$menu_sub_name?></h3>
				<img src="../<?=$rektorat ? $rektorat_item->img : ''?>" style="display: block;
			  margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
			  <h4 style="text-align: center;" class="mt-4"><?=$rektorat ? $rektorat_name : ''?><br><span style="font-size: 18px;"><i><?=$rektorat ? $rektorat_lavozim : ''?></i></span></h4>
			  <?
			  	foreach ($fakultet_staff as $fakultet_staff_item) {
			  		?>
			  			<a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>"><?=Yii::t('app',"Profilga o'tish")?></a>
			  		<?
			  	}
			  ?>

			  <hr style="margin: 0px; margin-bottom: 20px; margin-top: 40px;">
				<table class="table table-bordered mt-4" style="color: black;">
				  <tbody>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Qabul vaqti')?></th>
				      <td><?=$rektorat ? $rektorat_qabulvaqti : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','Tel')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat_item->tel : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Fax')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat_item->fax : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'E-mail')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat_item->email : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','Telegram')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat_item->telegram : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
				      <td colspan="2"><?=$rektorat ? $rektorat_manzil : ''?></td>
				    </tr>
				  </tbody>
				</table>
				<hr style="margin: 0px; margin-bottom: 20px;">
				<p style="color: black;"><?=$rektorat ? $rektorat_content : ''?></p>
			</div>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">
 li, a, span, table, tr, td, th, label {
   		 /*font-size: 18px;*/
   		 color: black; 
   		 font-weight: 400;
   		line-height: 24px;
    	/*list-style-type: circle !important;*/
	}
	/*.row .col-md-8 .middle ul li{
		float: left;
   		 font-size: 18px;
   		 color: black; 
   		 font-weight: 400;
   		line-height: 24px;
    	list-style-type: disc !important;
	}*/
		.row .col-md-8 .middle ul li{
         /*font-size: 18px;*/
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
    }
	.middle {
		background-color: white;
		position: relative;
		display: block;
		border-radius: 10px;
		padding: 40px;
		box-shadow: 2px 10px 15px #888888;
		/*margin-left: -20px;*/
		/*margin-right: 40px;*/
		width: 99%;
		margin-bottom: 30px;
	}
	
	.table_first {
		font-weight: bold;
	}


