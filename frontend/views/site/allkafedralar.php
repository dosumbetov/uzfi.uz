<?
use yii\helpers\Url;
$lang = Yii::$app->language;
foreach ($menu_sub as $menu_sub_item) {
    if ($lang == 'uz') {
      $cmmenu_sub_item = $menu_sub_item->name_uz;
    }elseif ($lang == 'en') {
      $cmmenu_sub_item = $menu_sub_item->name_en;
    }elseif ($lang == 'ru') {
      $cmmenu_sub_item = $menu_sub_item->name_ru;
    }
}

?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$menu_sub ? $cmmenu_sub_item : ''?></h3>
  			<hr style="margin: 0px;">
			<div class="container mt-5">
				<nav>
		          <ul class="mcd-menu2">
		            <?
                  $lang = Yii::$app->language;
		              foreach ($kafedralar as $kafedralar_item) {
                    if ($lang == 'uz') {
                      $cmkafedralar_item = $kafedralar_item->name_uz;
                    }elseif ($lang == 'en') {
                      $cmkafedralar_item = $kafedralar_item->name_en;
                    }elseif ($lang == 'ru') {
                      $cmkafedralar_item = $kafedralar_item->name_ru;
                    }
		                ?>
		                  <li>
		                    <a href="<?=Url::to(['site/comma_kafedra', 'id'=>$kafedralar_item->id])?>" class="active">
		                      <i class="fa fa-users"></i>
		                      <strong><?=$kafedralar ? $cmkafedralar_item : ''?></strong>
		                    </a>
		                  </li>
		                <?
		              }
		            ?>
		          </ul>
		        </nav>
			</div>	
			</div>	
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">

	
	
.middle {
	background-color: white;
	border-radius: 10px;
	padding: 40px;
	box-shadow: 2px 10px 15px #888888;
	width: 99%;
	margin-bottom: 30px;
}
	
.mcd-menu2 {
  list-style: none;
  padding: 0px !important;
  margin: 0px !important;
  background: #FFF;
  border-radius: 2px;
}
.mcd-menu2 li {
  position: relative;
  padding-bottom: 10px;
}
.mcd-menu2 li a {
  display: block;
  text-decoration: none;
  color: blue;
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
}
.mcd-menu2 li a i {
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  padding: 10px;
}
.mcd-menu2 li a {
  width: 100% !important;
}

.mcd-menu2 li a strong {
  display: block;
  font-size: 15px;
  text-transform: uppercase;
  padding: 10px;
}


.mcd-menu2 li a i, .mcd-menu2 li a strong {
  position: relative;
  transition: all 300ms linear;
}
.mcd-menu2 li:hover > a i {
    opacity: 1;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu2 li:hover a strong {
    opacity: 1;
    animation: moveFromLeft 300ms ease-in-out;
}


.mcd-menu2 li:hover > a {
  color: #777;
}
.mcd-menu2 li a:hover {
  position: relative;
  color: #777;
  border:0;
  box-shadow: 0 0 15px #DDD;
  /* == */
 
}

@-webkit-keyframes moveFromTop {
    from {
        opacity: 0;
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveFromLeft {
    from {
        opacity: 0;
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveFromRight {
    from {
        opacity: 0;
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}
</style>

