<?
	use backend\models\Pages;
	use yii\helpers\Url;
	$news = Pages::find()->Where(['page_menu_sub_id'=>3])->orderBy(['id'=>SORT_DESC])->limit(10)->all();

?>
	
		<div class="col-md-4 col-12 ">
			<div class="container right1">
				<nav>
					<ul class="mcd-menu1">
						<h3 style="color: black; text-align: center;">So'ngi yangiliklar</h3>
						<?
							foreach ($news as $news) {
								?>
									<li>
										<a href="<?=Url::to(['site/pages', 'id'=>$news->id])?>" style="min-height: 75px;">
											<i class="fa fa-calendar" style="font-size: 12px;"><?=$news ? $news->date : ''?></i><br>
											<strong style="margin-top: -10px; text-transform: none;"><?=yii\helpers\StringHelper::truncate($news ? $news->name_uz : '', 40, '...')?></strong>
										</a>
									</li>
								<?
							}
						?>
						
					</ul>
				</nav>
			</div>
		</div>

<style type="text/css">


/*right 1*/
.right1 ul li a{
	display: block;
	list-style-type: none;
	font-size: 30px !important;
	padding: 10px;
	border-radius: 8px;
	transition: all 0.3s ease-in-out;

}
.right1 {
	background-color: white;
	border-radius: 10px;
	padding: 20px;
	box-shadow: 2px 10px 15px #888888;
	width: 99%;
}

.mcd-menu1 {
  list-style: none;
  padding: 0px !important;
  margin: 0px !important;
  background: #FFF;
  border-radius: 2px;
}
.mcd-menu1 li {
  position: relative;
  padding-bottom: 10px;
}
.mcd-menu1 li a {
  display: block;
  text-decoration: none;
  color: #777;
  
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
}
.mcd-menu1 li a i {
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  
}
.mcd-menu1 li a {
	width: 100%;

}

.mcd-menu1 li a strong {
  display: block;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: normal;
}


.mcd-menu1 li a i, .mcd-menu1 li a strong {
  position: relative;
  transition: all 300ms linear;
}
.mcd-menu1 li:hover > a i {
    opacity: 1;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu1 li:hover a strong {
    opacity: 1;
    animation: moveFromLeft 300ms ease-in-out;
}


.mcd-menu1 li:hover > a {
  color: #777;
}
.mcd-menu1 li a:hover {
  position: relative;
  color: #777;
  border:0;
  box-shadow: 0 0 15px #DDD;
  /* == */
  border-left: 4px solid #3f78e0;
  border-right: 4px solid #3f78e0;
  margin: 0 -4px;
  /* == */
}
.mcd-menu1 li a:hover:before {
  content: "";
  position: absolute;
  
  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #3f78e0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
}

/* == */
.mcd-menu1 li a:hover:after {
  content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #3f78e0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
}
/* == */

@-webkit-keyframes moveTop {
    from {
        opacity: 0;
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveLeft {
    from {
        opacity: 0;
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveRight {
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

