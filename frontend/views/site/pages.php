<?

?>

<div class="container">
	<div class="row" style="padding: 30px 0px 0px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-5" style="color: black;"><?=$pages->name_uz?></h3>
				<div class="new_date1">
	              <i class="fa fa-calendar"><?=$pages->date?></i>
	              <i class="fa fa-eye"><?=$pages->views?></i>
	            </div>
				<img src="../images/<?=$pages->img?>" width="100%" style="  display: block;
	  			margin-left: auto;margin-right: auto;border-radius: 20px;">
			  	<p class="mt-5 mb-5" style="font-size: 18px;"><?=$pages->content_uz?></p>
			</div>
		</div>
		<?=include 'right_barnew.php';?>
	</div>
</div>
<style type="text/css">

	



	
	.middle {
		background-color: white;
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
</style>
