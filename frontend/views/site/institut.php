<?
	foreach ($menu_sub as $menu_sub_item) {
		# code...
	}

	foreach ($institut as $institut_item) {
		# code...
	}

?>
<div class="container">
	<div class="row" style="padding: 15px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle mb-5">
				<h2 style="text-transform: uppercase; padding: 0px 20px; text-align: center;"><?=$menu_sub_item->name_uz?></h2>
				<hr style="margin: 0px;margin-bottom: 20px;">
				<p><?=$institut ? $institut_item->content_uz : ''?></p>
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
		/*margin-left: -20px;*/
		/*margin-right: 40px;*/
		width: 99%;
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

