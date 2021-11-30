<?
use yii\helpers\Url;
	foreach ($menu_sub as $menu_sub_item) {
		# code...
	}
	foreach ($rektorat as $rektorat_item) {
		# code...
	}
?>
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 class="mb-5" style="text-transform: uppercase; text-align: center;"><?=$menu_sub_item->name_uz?></h3>
				<img src="../<?=$rektorat_item ? $rektorat_item->img : ''?>" style="display: block;
			  margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
			  <h4 style="text-align: center;" class="mt-4"><?=$rektorat_item ? $rektorat_item->name_uz : ''?><br><span style="font-size: 18px; text-transform: lowercase;"><i><?=$rektorat_item ? $rektorat_item->lavozim_uz : ''?></i></span></h4>
			  <?
			  	foreach ($fakultet_staff as $fakultet_staff_item) {
			  		?>
			  			<a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>">Profilga o'tish</a>
			  		<?
			  	}
			  ?>
			  <hr style="margin: 0px; margin-bottom: 20px; margin-top: 40px;">
			  	<table class="table table-bordered mt-4" style="color: black;">
				  <tbody>
				    <tr>
				      <th scope="row" class="table_first">Qabul vaqti</th>
				      <td><?=$rektorat_item ? $rektorat_item->qabul_vaqti_uz : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first">Tel:</th>
				      <td colspan="2"><?=$rektorat_item ? $rektorat_item->tel : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first">Fax:</th>
				      <td colspan="2"><?=$rektorat_item ? $rektorat_item->fax : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first">E-mail:</th>
				      <td colspan="2"><?=$rektorat_item ? $rektorat_item->email : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first">Telegram:</th>
				      <td colspan="2"><?=$rektorat_item ? $rektorat_item->telegram : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first">Manzil:</th>
				      <td colspan="2"><?=$rektorat_item ? $rektorat_item->manzil_uz : ''?></td>
				    </tr>
				  </tbody>
				</table>
				<style type="text/css">
					p, li, a, span, table, tr, td, th, label {
				   		 font-size: 18px;
				   		 color: black; 
				   		 font-weight: 400;
				   		line-height: 12px;
				    	list-style-type: none;
					}
				</style>
				<hr style="margin: 0px; margin-bottom: 20px;">
				<p style="color: black;"><?=$rektorat_item ? $rektorat_item->content_uz : ''?></p>
				<!-- <h3 style="text-align: center; margin-bottom: 40px;" class="mt-4">Chop etilgan kitoblar</h3>
				<div class="row">
					<div class="col-md-3 col-6 mt-4">
						<section>
					      <div class="book">
					        <img src="../images/cover.jpg">
					      </div>
					    </section>
					<h5 style="text-align: center; margin-bottom: 40px;" class="mt-4"><a href="">Sahifa</a></h5>
					</div>
					<div class="col-md-3 col-6 mt-4">
						<section>
					      <div class="book">
					        <img src="../images/cover.jpg">
					      </div>
					    </section>
					    <h5 style="text-align: center;" class="mt-4"><a href="">Sahifa</a></h5>
					</div>
					<div class="col-md-3 col-6 mt-4">
						<section>
					      <div class="book">
					        <img src="../images/cover.jpg">
					      </div>
					    </section>
					    <h5 style="text-align: center;" class="mt-4"><a href="">Sahifa</a></h5>
					</div>	
					<div class="col-md-3 col-6 mt-4">
						<section>
					      <div class="book">
					        <img src="../images/cover.jpg">
					      </div>
					    </section>
					    <h5 style="text-align: center;" class="mt-4"><a href="">Sahifa</a></h5>
					</div>	
				</div> -->
			</div>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">

	



	.middle {
		background-color: white;
		position: relative;
		display: block;
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



section .book {
  position: relative;
  width: 157px;
  height: 190px;
  box-shadow: 20px 20px 20px rgba(0,0,0,0.2);
  transform-style: preserve-3d;
  transition: 0.5s;

}
section .book:hover {
  transform: rotateY(35deg);
  box-shadow: 0px 20px 20px rgba(0,0,0,0.2);

}
section .book:active {
  transform: rotateY(180deg);
  
}
section .book:before {
  content: '';
  position: absolute;
  width: 60px;
  height: 100%;
  transform-origin: left;
  background: url(../images/side.jpg);
  background-position: center;
  transform: rotateY(90deg);
}
section .book:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  transform-origin: center;
  background: url(../images/back.jpg);
  background-position: center;
  transform: rotateY(180deg) translateZ(60px);
}
section .book img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

</style>
<script type="text/javascript">
	const book = document.querySelector(".book");
	const firstHalf = document.querySelector(".first-half");
	const secondHalf = document.querySelector(".second-half");

	book.addEventListener("click", () => {
	  book.classList.toggle("flip");
	});

	firstHalf.addEventListener("mouseenter", () => {
	  book.classList.add("rotateLeft");
	});

	firstHalf.addEventListener("mouseout", () => {
	  book.classList.remove("rotateLeft");
	});

	secondHalf.addEventListener("mouseenter", () => {
	  book.classList.add("rotateRight");
	});

	secondHalf.addEventListener("mouseout", () => {
	  book.classList.remove("rotateRight");
	});
</script>