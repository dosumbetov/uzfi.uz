<?
use yii\helpers\Url;
	foreach ($menu_sub as $menu_sub_item) {
		# code...
	}
	foreach ($rektorat as $rektorat_item) {
		# code...
	}
?>
<div class="container salyt">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-5" style="text-transform: uppercase; text-align: center;"><?=$menu_sub_item->name_uz?></h3>
				<img src="../<?=$rektorat ? $rektorat_item->img : ''?>" style="display: block;
			  margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
			  <h4 style="text-align: center;" class="mt-4"><?=$rektorat ? $rektorat_item->name_uz : ''?><br><span style="font-size: 18px;"><i><?=$rektorat ? $rektorat_item->lavozim_uz : ''?></i></span></h4>
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
				      <td><?=$rektorat ? $rektorat_item->qabul_vaqti_uz : ''?></td>
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
				      <td colspan="2"><?=$rektorat ? $rektorat_item->manzil_uz : ''?></td>
				    </tr>
				  </tbody>
				</table>
				<hr style="margin: 0px; margin-bottom: 20px;">
				<p style="color: black;"><?=$rektorat ? $rektorat_item->content_uz : ''?></p>
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


