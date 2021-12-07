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
			<img src="../<?=$allmaktab ? $allmaktab_item->img : ''?>" style="display: block;
  			margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
  			<hr style="margin: 0px; margin-top: 40px">
		  	<table class="table table-bordered mt-4">
			  <tbody>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Qabul vaqti')?></th>
			      <td><?=$maktab ? $maktab_item->ishkunlari_uz : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Biriktirlgan')?>:</th>
			      <td colspan="2"><?=$maktab ? $maktab_item->biriktirilgan_uz : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Tel')?>:</th>
			      <td colspan="2"><?=$maktab ? $maktab_item->tel : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Fax')?>:</th>
			      <td colspan="2"><?=$maktab ? $maktab_item->fax : ''?></td>
			    </tr>

			     <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
			      <td colspan="2"><?=$maktab ? $maktab_item->manzil_uz : ''?></td>
			    </tr>
			    
			  </tbody>
			</table>
			<hr style="margin: 0px;">
			
			<h3 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=Yii::t('app',"Umumiy ma'lumot")?></h3>
 			<hr style="margin: 0px;">
 			<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
			    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">103-guruh</button>
			  </li>
			  <li class="nav-item" role="presentation">
			    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">104-guruh</button>
			  </li>
			  <li class="nav-item" role="presentation">
			    <button class="nav-link" id="oga-tab" data-bs-toggle="tab" data-bs-target="#oga" type="button" role="tab" aria-controls="oga" aria-selected="false">105-guruh</button>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  	<div class="card mb-3" style="max-width: 100%;">
				  <div class="row g-0">
				    <div class="col-md-2 col-2">
				      <img src="../../images/4.jpg" class="img-fluid rounded-start" alt="...">
				    </div>
				    <div class="col-md-10 col-10">
				      <div class="card-body">
				        <span style="float: left;">Sanatshunoslik fakulteti Tasviriy sanat yonalishi 107-guruh talabasi Dosumbetov Ogabek</span>
				      </div>
				    </div>
				  </div>
				</div>
							  	<div class="card mb-3" style="max-width: 100%;">
				  <div class="row g-0">
				    <div class="col-md-2 col-2">
				      <img src="../../images/4.jpg" class="img-fluid rounded-start" alt="...">
				    </div>
				    <div class="col-md-10 col-10">
				      <div class="card-body">
				        <span style="float: left;">Sanatshunoslik fakulteti Tasviriy sanat yonalishi 107-guruh talabasi Dosumbetov Ogabek</span>
				      </div>
				    </div>
				  </div>
				</div>
							  	<div class="card mb-3" style="max-width: 100%;">
				  <div class="row g-0">
				    <div class="col-md-2 col-2">
				      <img src="../../images/4.jpg" class="img-fluid rounded-start" alt="...">
				    </div>
				    <div class="col-md-10 col-10">
				      <div class="card-body">
				        <span style="float: left;">Sanatshunoslik fakulteti Tasviriy sanat yonalishi 107-guruh talabasi Dosumbetov Ogabek</span>
				      </div>
				    </div>
				  </div>
				</div>
							  	<div class="card mb-3" style="max-width: 100%;">
				  <div class="row g-0">
				    <div class="col-md-2 col-2">
				      <img src="../../images/4.jpg" class="img-fluid rounded-start" alt="...">
				    </div>
				    <div class="col-md-10 col-10">
				      <div class="card-body">
				        <span style="float: left;">Sanatshunoslik fakulteti Tasviriy sanat yonalishi 107-guruh talabasi Dosumbetov Ogabek</span>
				      </div>
				    </div>
				  </div>
				</div>
			  </div>
			  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			  	
			  </div>
			  <div class="tab-pane fade" id="oga" role="tabpanel" aria-labelledby="oga-tab">
			  	
			  </div>
			</div> -->
 			<p class="mt-5"><?=$maktab ? $maktab_item->content_uz : ''?></p>
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
	.row .col-md-9 .middle ul li{
	     font-size: 18px;
	     color: black; 
	     font-weight: 400;
	    line-height: 24px;
	    list-style-type: disc !important;
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

