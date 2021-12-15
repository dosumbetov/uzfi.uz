<?
use yii\helpers\Url;
$lang = Yii::$app->language;
	foreach ($menu_sub as $menu_sub_item) {
		if ($lang == 'uz') {
	      $cmmenu_sub = $menu_sub_item->name_uz;
	    }elseif ($lang == 'en') {
	    	$cmmenu_sub = $menu_sub_item->name_en;
	    }elseif ($lang == 'ru') {
	    	$cmmenu_sub = $menu_sub_item->name_ru;
	    }
	}
$lang = Yii::$app->language;
	foreach ($fakultet as $fakultet_item) {
		if ($lang == 'uz') {
	      $fakultet_name = $fakultet_item->name_uz;
	      $fakultet_faculty = $fakultet_item->faculty_uz;
	      $fakultet_rank = $fakultet_item->rank_uz;
	      $fakultet_date = $fakultet_item->qabul_date_uz;
	      $fakultet_adres = $fakultet_item->address_uz;
	      $cdfakultet_staff = $fakultet_item->staff_uz;
	      $fakultet_content = $fakultet_item->content_uz;
	    }elseif ($lang == 'en') {
	    	$fakultet_name = $fakultet_item->name_en;
	    	$fakultet_faculty = $fakultet_item->faculty_en;
	    	$fakultet_rank = $fakultet_item->rank_en;
	    	$fakultet_date = $fakultet_item->qabul_date_en;
	    	$fakultet_adres = $fakultet_item->address_en;
	    	$cdfakultet_staff = $fakultet_item->staff_en;
	    	$fakultet_content = $fakultet_item->content_en;
	    }elseif ($lang == 'ru') {
	    	$fakultet_name = $fakultet_item->name_ru;
	    	$fakultet_faculty = $fakultet_item->faculty_ru;
	    	$fakultet_rank = $fakultet_item->rank_ru;
	    	$fakultet_date = $fakultet_item->qabul_date_ru;
	    	$fakultet_adres = $fakultet_item->address_ru;
	    	$cdfakultet_staff = $fakultet_item->staff_ru;
	    	$fakultet_content = $fakultet_item->content_ru;
	    }
	}

?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
			<h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$menu_sub ? $cmmenu_sub : ''?></h3>
			<img src="../<?=$fakultet ? $fakultet_item->img : ''?>" style="display: block;
  			margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
  			<h4 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$fakultet ? $fakultet_name : ''?><br><i style="text-transform: capitalize;"><?=$fakultet ? $fakultet_faculty : ''?></i><br><i style="text-transform: lowercase;"><?=$fakultet ? $fakultet_rank : ''?></i></h4>
  			<?
				foreach ($fakultet_staff as $fakultet_staff_item) {
					if ($fakultet_staff_item->staff_name_uz==$fakultet_item->name_uz) {
						?>
							<a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>"><?=Yii::t('app', 'Shaxsiy kabinet')?></a>
						<?
					}
				}
			?>
  			<hr style="margin: 0px;">
		  	<table class="table table-bordered mt-4" style="color: black;">
			  <tbody>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app', 'Qabul vaqti')?></th>
			      <td><?=$fakultet ? $fakultet_date : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Tel')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->tel : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app', 'Fax')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->fax : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app', 'E-mail')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->email : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Telegram')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->telegram : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_adres : ''?></td>
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
			<h3 style="text-align: center;color: black; text-transform: uppercase;" class="mt-4"><?=$fakultet ? $cmmenu_sub : ''?> <?=$fakultet ? $cdfakultet_staff : ''?></h3>
			<hr style="margin: 0px;">
			<div class="row mb-5 mt-5">
				
					<?
					$lang = Yii::$app->language;
						foreach ($fakultet_staff as $fakultet_staff_item) {
							if ($lang == 'uz') {
						      $fakultet_staff_name = $fakultet_staff_item->staff_name_uz;
						      $fakultet_staff_rank = $fakultet_staff_item->staff_rank_uz;
						    }elseif ($lang == 'en') {
						    	$fakultet_staff_name = $fakultet_staff_item->staff_name_ru;
						    	$fakultet_staff_rank = $fakultet_staff_item->staff_rank_ru;
						    }elseif ($lang == 'ru') {
						    	$fakultet_staff_name = $fakultet_staff_item->staff_name_en;
						    	$fakultet_staff_rank = $fakultet_staff_item->staff_rank_en;
						    }
							if ($fakultet_staff_item->staff_name_uz!=$fakultet_item->name_uz) {
								?>
									<div class="col-md-4 d-flex align-items-stretch">
					                   <div class="card mb-5" style="width: 100%; text-align: center;">
										  <img src="<?=$fakultet_staff ? $fakultet_staff_item->staff_img : ''?>" class="card-img-top" alt="...">
										  <div class="card-body">
										    <h5 class="card-title"><?=$fakultet_staff ? $fakultet_staff_name : ''?></h5>
										    <p class="card-text"><?=$fakultet_staff ? $fakultet_staff_rank : ''?></p>
										    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										    <a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Shaxsiy kabinet')?></a>
										  </div>
										</div>
					                </div>
								<?
							}
						}
					?>
			</div>
			<hr style="margin: 0px;">
			<h3 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$menu_sub ? $cmmenu_sub : ''?> <?=Yii::t('app', 'Fakulteti haqida')?></h3>
 			<hr style="margin: 0px;">
 			<p class="mt-5"><?=$fakultet ? $fakultet_content : ''?></p>
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
	.row .col-md-8 .middle ul li{
         font-size: 18px;
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
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
	}
	.card-text {
		text-align: center;
	}
</style>

