<?
use yii\helpers\Url;
foreach ($emblems as $emblems) {
	# code...
}

?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-9 col-12 middle">
			<h2 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$emblems->name_uz?></h2>
			<?=$emblems->content_uz?>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">

	
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
		margin-left: -20px;
		margin-right: 40px;
		width: 830px;
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

