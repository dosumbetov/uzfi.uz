<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
$this->title = Yii::t('app', 'Aloqa')?>;

?>

<div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    // ['label' => 'Tutorlar', 'url' => ['site/tutor', 'id' => 13]],
                    $this->title,
                ],
            ]); 
          ?>
        </div>
      </div>
    </div>
 </div>
 <style type="text/css">
  .breadcrumb {
    background-color: rgba(0, 0, 0, 0.5) !important;
  }
  .breadcrumb .breadcrumb-item a {
    color: white !important;
  }
  .breadcrumb .breadcrumb-item:hover a{
    color: blue !important;
  }
  .breadcrumb-item::before {
      float: left;
      padding-right: 0.5rem;
      color: white;
      content: "/";
  }
  .breadcrumb-item.active {
      color: white;
      opacity: 0.6;
  }
   .heros {
        width: 100%;
        background: url("../../images/jpa.jpg");
        position: relative;
        padding: 150px 0 0 0;
      }
       .heros:after {
        content: "";
        position: absolute;
          /*background-color: #0e14a2;*/
          height: 100vh;
          background-size: cover;
          background-position: center;
          z-index: 10;
        }
  }
  }
  }
 </style>
    <div class="-fx-image-gal">

  <div class="-fx-gal-item">
    <div class="-fx-gal-image-thumb" tabindex="1">
      <img src="https://picsum.photos/id/237/300/300" />
    </div>
    <div class="-fx-gal-image-big">
      <img src="https://picsum.photos/id/237/800/600" />
    </div>
  </div><!-- /-fx-gal-item -->

  <div class="-fx-gal-item">
    <div class="-fx-gal-image-thumb" tabindex="1">
      <img src="https://picsum.photos/id/238/300/300" />
    </div>
    <div class="-fx-gal-image-big">
      <img src="https://picsum.photos/id/238/800/600" />
    </div>
  </div><!-- /-fx-gal-item -->

  <div class="-fx-gal-item">
    <div class="-fx-gal-image-thumb" tabindex="1">
      <img src="https://picsum.photos/id/39/300/300" />
    </div>
    <div class="-fx-gal-image-big">
      <img src="https://picsum.photos/id/39/1024/768" />
    </div>
  </div><!-- /-fx-gal-item -->

  <div class="-fx-gal-item">
    <div class="-fx-gal-image-thumb" tabindex="1">
      <img src="https://picsum.photos/id/240/300/300" />
    </div>
    <div class="-fx-gal-image-big">
      <img src="https://picsum.photos/id/240/1920/1024" />
    </div>
  </div><!-- /-fx-gal-item -->

  <div class="-fx-gal-item">
    <div class="-fx-gal-image-thumb" tabindex="1">
      <img src="https://picsum.photos/id/341/300/300" />
    </div>
    <div class="-fx-gal-image-big">
      <img src="https://picsum.photos/id/341/800/600" />
    </div>
  </div><!-- /-fx-gal-item -->

  <div class="-fx-gal-item">
    <div class="-fx-gal-image-thumb" tabindex="1">
      <img src="https://picsum.photos/id/142/300/300" />
    </div>
    <div class="-fx-gal-image-big">
      <img src="https://picsum.photos/id/142/1920/1024" />
    </div>
  </div><!-- /-fx-gal-item -->

</div><!-- /gallery -->
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Mansalva&display=swap");


/* gallery specific CSS */

.-fx-image-gal {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 85%; /* arbitrary valye */
  margin: 0px auto;
}
.-fx-gal-item {
  width: 10%; /* for 3 columns */
  margin: 5px;
  overflow: hidden;
  border-radius: 15px;
}

.-fx-gal-image-thumb img {
  width: 100%;
  border-radius: 15px;
  cursor: pointer;
  -webkit-filter: grayscale(80%);
  -moz-filter: grayscale(80%);
  filter: grayscale(80%);
  transition: all 0.3s ease;
}

.-fx-gal-image-thumb:hover img {
  width: 100%;
  cursor: pointer;
  -webkit-filter: grayscale(0%);
  -moz-filter: grayscale(0%);
  filter: grayscale(0%);

  transform: scale(1.2);
  transition: all 0.5s ease;
}

.-fx-gal-image-thumb:focus + .-fx-gal-image-big {
  display: block;
}

.-fx-gal-image-big {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(5, 10, 15, 0.8);
  overflow: hidden;
  height: 100vh;
  width: 100vw;
  z-index: 999;
  transition: all 0.3s ease;
}

.-fx-gal-image-big img {
  max-width: 90vw;
  position: absolute;
  box-shadow: 0px 0px 800px 40px rgba(0, 0, 0, 0.9);
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

</style>