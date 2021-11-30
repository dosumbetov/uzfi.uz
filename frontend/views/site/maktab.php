<?
use yii\helpers\Url;
	foreach ($allmaktab as $allmaktab_item) {
		# code...
	}

	foreach ($maktab as $maktab_item) {
		# code...
	}
	foreach ($menu_sub as $menu_sub_item) {
		# code...
	}

?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h2 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$allmaktab_item->name_uz?></h2>
			<img src="../<?=$allmaktab_item ? $allmaktab_item->img : ''?>" style="display: block;
  			margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
  			<hr style="margin: 0px; margin-top: 40px">
		  	<table class="table table-bordered mt-4">
			  <tbody>
			    <tr>
			      <th scope="row" class="table_first">Qabul vaqti</th>
			      <td><?=$maktab_item ? $maktab_item->ishkunlari_uz : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first">Biriktirlgan:</th>
			      <td colspan="2"><?=$maktab_item ? $maktab_item->biriktirilgan_uz : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first">Tel:</th>
			      <td colspan="2"><?=$maktab_item ? $maktab_item->tel : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first">Fax:</th>
			      <td colspan="2"><?=$maktab_item ? $maktab_item->fax : ''?></td>
			    </tr>

			     <tr>
			      <th scope="row" class="table_first">Manzil:</th>
			      <td colspan="2"><?=$maktab_item ? $maktab_item->manzil_uz : ''?></td>
			    </tr>
			    
			  </tbody>
			</table>
			<hr style="margin: 0px;">
			
			<h3 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$menu_sub_item->name_uz?> Ma'lumot</h3>
 			<hr style="margin: 0px;">
 			<p class="mt-5"><?=$maktab_item ? $maktab_item->content_uz : ''?></p>
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
	
	.fakultet_btn {
		padding: 5px;
		text-align: center;
		margin-left: 65px;

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
	
	.table_first {
		font-weight: bold;
	}
	.card-body {
		padding: 10px !important;
	}
	.card-title {
		color: black;
		padding: 0px;
	}
	.card-text {
		text-align: center;
	}
</style>

