<?
use yii\helpers\Url;
foreach ($emblems as $emblems_item) {
	# code...
}

?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h2 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$emblems ? $emblems_item->name_uz : ''?></h2>
				<?=$emblems ? $emblems_item->content_uz : ''?>
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
	.row .col-md-8 .middle ul li{
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

