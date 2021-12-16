<?
use yii\helpers\Url;
$lang = Yii::$app->language;

?>
<div class="container">
		<div class="middle">
			<h2 class="mb-5 text-center" style="color: black; text-transform: uppercase;">Tyutorlar</h2>
			<div class="row">
				<?
					foreach ($tutor_info as $tutor_info_item) {
						?>
							<div class="col-md-4 d-flex align-items-stretch">
				               <div class="card mb-5" style="width: 100%; text-align: center;">
								  <img src="../<?=$tutor_info ? $tutor_info_item->img : ''?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title"><?=$tutor_info ? $tutor_info_item->name_uz : ''?></h5>
								    <p class="card-text"><?=$tutor_info ? $tutor_info_item->biriktirilgan_uz : ''?></p>
								    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
								    <a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Batafsil')?></a>
								  </div>
								</div>
				            </div>
						<?
					}
				?>
			</div>
			<div class="row">
	            <?
	                echo \yii\widgets\LinkPager::Widget([
	                    'pagination'=>$tutor_info_number,
	                ]);
	            ?>
	        </div>
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
	.card-text {
		text-align: center;
		color: black;
	}
	/*.card-img-top {
		height: 70%;
	}*/
	.card-body {
		padding: 10px !important;
	}
	.card-title {
		color: black;
		padding: 0px;
	}
	.card-text {
		margin-top: -10px;
		text-align: center;
	}

	   .pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}
.pagination li a, .pagination .disabled {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.pagination li a:hover {
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.pagination li a:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.pagination li a:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.pagination li:first-child a {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.pagination li:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination li.active a {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.pagination li.disabled a {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
} 
</style>

