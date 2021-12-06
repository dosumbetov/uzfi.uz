<?
use yii\helpers\Url;
	foreach ($kafedralar as $kafedralar_item) {
		# code...
	}

	foreach ($com_kafedra as $com_kafedra_item) {
		# code...
	}


?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-2 text-center" style="color: black; text-transform: uppercase;"><?=$kafedralar ? $kafedralar_item->name_uz : ''?></h3>
 				<hr style="margin: 0px; margin-bottom: 20px;">
 				<img src="../<?=$com_kafedra ? $com_kafedra_item->img : ''?>" style="display: block;
  				margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
	  			<h3 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4">
	  				<?=$com_kafedra ? $com_kafedra_item->name_uz : ''?><br>
	  				<i style="text-transform: capitalize;"><?=$com_kafedra ? $com_kafedra_item->lavozim_uz : ''?></i><br>
	  				<i style="text-transform: lowercase;"><?=$com_kafedra ? $com_kafedra_item->darajasi_uz : ''?></i>
	  			</h3>
  				<hr style="margin: 0px;">
	  			<table class="table table-bordered mt-4" style="color: black;">
				  <tbody>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Qabul vaqti')?></th>
				      <td><?=$com_kafedra ? $com_kafedra_item->qabul_uz : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','E-mail')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->email_uz : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Tel')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->tel : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Telegram')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->telegram : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Manzil')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->manzil_uz : ''?></td>
				    </tr>
				  </tbody>
				</table>
				<h3 style="text-align: center; text-transform: uppercase;"><?=$com_kafedra ? $com_kafedra_item->kafedra_hodim_uz : ''?></h3>
				<hr style="margin: 0px;">
				<div class="row mb-5 mt-5">
				<?
					foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
						?>
							<div class="col-md-6 d-flex align-items-stretch">
			                   <div class="card mb-5" style="width: 100%; text-align: center;">
								  <img src="<?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->img : ''?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->name_uz : ''?></h5>
								    <p class="card-text"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->lavozimi_uz : ''?></p>
								    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
								    <a href="<?=Url::to(['site/kafedra', 'id'=>$kafedra_oqituvchilari_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Shaxsiy kabinet')?></a>
								  </div>
								</div>
			                </div>
						<?
					}
				?>
				</div>
				<h3 style="text-align: center; text-transform: uppercase;"><?=Yii::t('app', 'kafedra tarixi haqida')?></h3>
				<hr style="margin: 0px; margin-bottom: 20px;">
				<p><?=$com_kafedra ? $com_kafedra_item->content_uz : ''?></p>
			</div>
		</div>
		<?=include 'right_bar.php';?>
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
	
	.table-bordered>:not(caption)>*>* {
		padding: 8px;
	}
	.middle {
		background-color: white;
		border-radius: 10px;
		padding: 40px;
		box-shadow: 2px 10px 15px #888888;
		width: 99%;
		margin-bottom: 30px;
	}
	.card-text {
		text-align: center;
	}
	.table_first {
		font-weight: bold;
	}
	.card-body {
		padding: 10px !important;
	}
	.card-title {
		color: black;
		padding: 0px;
		text-transform: uppercase;
	}
	.card-text {
		text-align: center;
	}
</style>