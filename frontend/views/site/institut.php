<?
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

	foreach ($institut as $institut_item) {
		if ($lang == 'uz') {
	      $institut_content = $institut_item->content_uz;
	    }elseif ($lang == 'en') {
	    	$institut_content = $institut_item->content_en;
	    }elseif ($lang == 'ru') {
	    	$institut_content = $institut_item->content_ru;
	    }
	}

?>
<div class="topfon">asd</div>
<style type="text/css">
	.topfon {
		min-height: 192px;
		width: 100%;
		background-color: #2db6fa;
	}
</style>
<div class="container mt-4">
	<div class="row" style="padding: 15px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle mb-5">
				<h2 style="text-transform: uppercase; padding: 0px 20px; text-align: center;"><?=$cmmenu_sub?></h2>
				<hr style="margin: 0px;margin-bottom: 5%;">
				<p><?=$institut ? $institut_content : ''?></p>
			</div>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">
	p, li, a, span, table, tr, td, th, label {
     color: black; 
    font-weight: 400;
    line-height: 24px;
    list-style-type: none;
}
.row .col-md-8 .middle ul li{
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
		padding: 6%;
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

