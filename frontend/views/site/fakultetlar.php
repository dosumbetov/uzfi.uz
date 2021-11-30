<?
use yii\helpers\Url;
	foreach ($menu_sub as $menu_sub_item) {
		# code...
	}

	foreach ($fakultet as $fakultet_item) {
		# code...
	}

?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
							<h2 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$menu_sub_item->name_uz?></h2>
			<img src="../<?=$fakultet_item ? $fakultet_item->img : ''?>" style="display: block;
  			margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
  			<h3 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$fakultet_item ? $fakultet_item->name_uz : ''?><br><i style="text-transform: capitalize;"><?=$fakultet_item ? $fakultet_item->faculty_uz : ''?></i><br><i style="text-transform: lowercase;"><?=$fakultet_item ? $fakultet_item->rank_uz : ''?></i></h3>
  			<hr style="margin: 0px;">
		  	<table class="table table-bordered mt-4" style="color: black;">
			  <tbody>
			    <tr>
			      <th scope="row" class="table_first">Qabul vaqti</th>
			      <td><?=$fakultet_item ? $fakultet_item->qabul_date_uz : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first">Tel:</th>
			      <td colspan="2"><?=$fakultet_item ? $fakultet_item->tel : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first">Fax:</th>
			      <td colspan="2"><?=$fakultet_item ? $fakultet_item->fax : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first">E-mail:</th>
			      <td colspan="2"><?=$fakultet_item ? $fakultet_item->email : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first">Telegram:</th>
			      <td colspan="2"><?=$fakultet_item ? $fakultet_item->telegram : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first">Manzil:</th>
			      <td colspan="2"><?=$fakultet_item ? $fakultet_item->address_uz : ''?></td>
			    </tr>
			  </tbody>
			</table>
			<style type="text/css">
				p, li, a, span, table, tr, td, th, label {
			   		 font-size: 18px;
			   		 color: black; 
			   		 font-weight: 400;
			   		line-height: 24px;
			    	list-style-type: none;
				}
			</style>
			<hr style="margin: 0px;">
			<h3 style="text-align: center;color: black; text-transform: uppercase;" class="mt-4"><?=$menu_sub_item ? $menu_sub_item->name_uz : ''?> <?=$fakultet_item ? $fakultet_item->staff_uz : ''?></h3>
			<hr style="margin: 0px;">
			<div class="row mb-5 mt-5">
				
					<?
						foreach ($fakultet_staff as $fakultet_staff_item) {
							?>
							<div class="col-md-6 col-12 mb-5">
								<div class="card">
								    <img class="card-img-top" src="../images/<?=$fakultet_staff_item->staff_img?>" alt="Card image">
								    <div class="card-body">
								      <h4 class="card-title"><?=$fakultet_staff_item ? $fakultet_staff_item->staff_name_uz : ''?></h4>
								      <p class="card-text"><?=$fakultet_staff_item ? $fakultet_staff_item->staff_rank_uz : ''?></p>
								      <a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>" class="btn btn-primary mt-2 fakultet_btn">See Profile</a>
								    </div>
							    </div>
							</div>
							<?
						}
					?>
				
			</div>
			<hr style="margin: 0px;">
			<h3 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$menu_sub_item ? $menu_sub_item->name_uz : ''?> Fakulteti haqida</h3>
 			<hr style="margin: 0px;">
 			<p class="mt-5"><?=$fakultet_item ? $fakultet_item->content_uz : ''?></p>
			</div>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">

	
	.fakultet_btn {
		padding: 5px;
		text-align: center;
		margin-left: 35%;

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

