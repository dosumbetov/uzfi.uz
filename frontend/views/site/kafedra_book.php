 <?
use yii\helpers\Url;

foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
    # code...
}
 ?>

<section class="orqarasm">
    <img src="../../images/pro-bg.jpg" width="100%;">
        <div class="pro-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <ul>
                            <li><a href="<?=Url::to(['site/kafedra', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>" class="pro-act"><?=Yii::t('app','Shaxsiy kabinet')?></a></li>
                            <li><a href="<?=Url::to(['site/kafedra_info', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>"><?=Yii::t('app',"Umumiy ma'lumot")?></a></li>
                            <li><a href="<?=Url::to(['site/kafedra_book', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>"><?=Yii::t('app','Ilmiy faoliyat')?></a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
            
</section>
<div class="container ortafon">
    <div class="row">
        <div class="col-md-3 col-12 mb-4">
            <div class="left_bar_tea">
              <img src="../<?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->img : ''?>" class="img_teacher">
              <h3 class="mt-3" style="text-align: center;"><?=$kafedra_oqituvchilari_item ? $kafedra_oqituvchilari_item->name_uz : ''?></h3>
              <p style="text-align: center;"><?=$kafedra_oqituvchilari_item ? $kafedra_oqituvchilari_item->lavozimi_uz : ''?>, <br><?=$kafedra_oqituvchilari_item ? $kafedra_oqituvchilari_item->darajasi_uz : ''?></p>
              <hr style="margin: 0px; margin-bottom: 20px;">
              <p><i class="fa fa-telegram"></i><?=$kafedra_oqituvchilari_item ? $kafedra_oqituvchilari_item->telegram : ''?></p>
              <p><i class="fa fa-facebook"></i> <?=$kafedra_oqituvchilari_item ? $kafedra_oqituvchilari_item->email : ''?></p>
              <p><i class="fa fa-instagram"></i><?=$kafedra_oqituvchilari_item ? $kafedra_oqituvchilari_item->tel : ''?></p>                  
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
                     <h4 style="color: black;"><img src="../../images/icon/db2.png" alt="" /><?=Yii::t('app','Chop etilgan kitoblar')?></h4>
           <hr style="margin: 0px; margin-bottom: 20px;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?=Yii::t('app','Kitob nomi')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan joy')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan sana')?></th>
                </tr>
              </thead>
              <tbody>
                 <?
                  foreach ($books as $books_item) {
                    ?>
                      <tr>
                        <th scope="row"><?=$books_item ? $books_item->number : ''?></th>
                        <td><?=$books_item ? $books_item->name_uz : ''?></td>
                        <td><?=$books_item ? $books_item->chop_etilgan_joy_uz : ''?></td>
                        <td><?=$books_item ? $books_item->date : ''?></td>
                      </tr>
                    <?
                  }
                ?>
              </tbody>
            </table>
            <h4 style="color: black;"><img src="../../images/icon/article.ico" alt="" /><?=Yii::t('app','Maqolalar')?></h4>
           <hr style="margin: 0px; margin-bottom: 20px;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?=Yii::t('app','Maqola nomi')?></th>
                  <th scope="col"><?=Yii::t('app','Maqola darajasi')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan sana')?></th>
                </tr>
              </thead>
              <tbody>
                <?
                  foreach ($articles as $articles_item) {
                    ?>
                      <tr>
                        <th scope="row"><?=$articles_item ? $articles_item->number : ''?></th>
                        <td><?=$articles_item ? $articles_item->name_uz : ''?></td>
                        <td><?=$articles_item ? $articles_item->article_degree_uz : ''?></td>
                        <td><?=$articles_item ? $articles_item->date : ''?></td>
                      </tr>
                    <?
                  }
                ?>
              </tbody>
            </table>
            <!-- <div class="row">
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
    </div>
        </div>
    </div>
</div>


<style type="text/css">
   table, tr, td, th {
      font-size: 18px;
      color: black;
    }
    ul li a {
      font-size: 18px;
    } 
  .table thead tr th {
    font-weight: bold;
  }
    .left_bar_tea p i {
        margin-right: 20px;
        font-size: 20px;
        font-size: 18px;
        color: black;
    } 
     .left_bar_tea p {
        padding: 0px 20px;
        font-size: 18px;
        color: black;
    } 
    .img_teacher {
        position: relative;
        width: 100%;
       /* border: 2px solid #fff;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        border: 1px solid #F3F2F2;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border-width: 3px 3px 3px;
        border-style: solid solid none;
        border-color: #F3F2F2 #F3F2F2 -moz-use-text-color;
        border-image: none;
        z-index: 2; 
    }
    .left_bar_tea {
        width: 98%;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        min-height: 96% !important;
    }
    .middle_bar_tea {
        position: relative;
        width: 98%;
        padding: 20px;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        margin-bottom: 30px;
        margin-top: 35px;
    }
    .orqarasm {
        position: relative;
        display: inline-block;
        background-color: #f7f8f9;
        /*z-index: 1;*/
    }
    .ortafon {
        background-color: #fff;
         box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
         border: 1px solid #F3F2F2;
        transform-style: preserve-3d;
        margin-bottom: 40px;
    }
    .pro-menu{
     background: #3f78e0;
     box-shadow: 0px 4px 10px hsla(0, 0%, 0%, 0.08);
     position: relative;
     /*z-index: 0;*/
}
 .pro-menu ul{
     margin-bottom: 0px;
    /* margin: 0 auto;
     */
     display: table;
     /*margin-left: 25px;*/
}
 .pro-menu ul li{
     display: inline-block;
}
 .pro-act{
     color: #fff !important;
}
 .pro-menu ul li a{
     padding: 10px 14px;
     line-height: 40px;
     color: #fff;
     font-weight: 500;
     text-decoration: none;
     border-left: 1px solid #405d7d;
}
 .pro-menu ul li a:hover{
     background: #225fd0;
     color: #fff;
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
    // IMPROVED JAVASCRIPT & ADDED A FEW CHANGES
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