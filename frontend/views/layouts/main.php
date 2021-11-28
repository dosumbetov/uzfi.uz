<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use backend\models\Menu;
use backend\models\MenuSub;
use backend\models\MenuTitle;
use backend\models\Emblems;
use cinghie\multilanguage\widgets\MultilanguageWidget; 

$emblems = Emblems::find()->all();
// use yii\helpers\Html;

$menu = Menu::find()->all();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/uzfi.ico" type="image/x-icon">
   <!--  <link rel="stylesheet" href="../newasset/css/plugins.css">
    <link rel="stylesheet" href="owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../newasset/css/style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- ALL CSS FILES -->
    <!-- <link href="css/materialize.css" rel="stylesheet"> -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet" /> -->
    <!-- <link href="css/style.css" rel="stylesheet" /> -->
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <!-- <link href="css/style-mob.css" rel="stylesheet" /> -->

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
  <style type="text/css">
    .emblem a {
      cursor: pointer;
      border-right: 1px solid grey;
      padding-right: 12px;
      margin-right: 15px;
    } .emblem a span {
      font-size: 12px;
      cursor: pointer;
    }
    .py-2 {
      padding: 0px;
    }
    .bg-primary {

    }
    .search-box {
      margin-top:-10px;
    }
    .input-search {
      margin-top: -10px;
    }

  </style>
      <div class="content-wrapper">
    <header class="wrapper bg-light">
      <div class="bg-primary text-white fw-bold fs-15 mb-2">
        <div class="container py-2 d-md-flex flex-md-row">
          <div class="d-flex flex-row emblem">
            <?
              foreach ($emblems as $emblems) {
                if ($emblems->link_type == 1) {
                  ?>
                    <a href="<?=Url::to(["site/".$emblems->link, 'id'=>$emblems->id])?>">
                      <img src="../<?=$emblems->img?>" height="<?=$emblems->height?>px;" width="<?=$emblems->width?>px;">
                    </a>
                  <?
                }else{
                  ?>
                    <a target="_blank" href="<?=$emblems->link?>">
                      <img src="../<?=$emblems->img?>" height="<?=$emblems->height?>px;" width="<?=$emblems->width?>px;">
                    </a>
                  <?
                }
              }
                ?>
              <a href="">
                <img src="../../images/emblems/sitemap.png" height="20px;" width="20px;">
              </a>
          </div>
          <div class="d-flex flex-row me-6 ms-auto">
                <div class="search-box">
                  <button class="btn-search"><i class="fas fa-search"></i></button>
                  <input type="text" name="search" class="input-search" placeholder="Qidiruv tizimi...">
                </div>
                <!-- <img src="../images/login.png" height="25px;"> -->
                <?= MultiLanguageWidget::widget([
                  'addCurrentLang' => true, // add current lang
                  'calling_controller' => $this->context,
                  'image_type'  => 'rounded', // classic or rounded
                  'link_home'   => true, // true or false
                  'widget_type' => 'classic', // classic or selector
                  'width'       => '28'
                ]); ?>
                <i class="fa fa-sign-in" aria-hidden="true" style="font-size: 28px;"></i>
          </div>
        </div>
        <!-- /.container -->
      </div>
   
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="<?=Url::home()?>">
              <img src="../../images/uzfi.png" height="70px;" srcset="../../images/uzfi.png" alt="eas" />
            </a>
            <span style="color: #212121;font-family: 'Roboto', sans-serif, Arial;font-size: 12px;display: inline-block;vertical-align: middle;line-height: 16px;">SAMARQAND DAVLAT UNIVERSITETINING<br>"O'ZBEKISTON-FINLANDIYA"<br>"PEDAGOGIKA INSTITUTI"</span>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
           <ul class="navbar-nav">
          <?
          $lang = Yii::$app->language;
          foreach ($menu as $menu) {
            if ($lang == 'uz') {
              $cmmenu = $menu->name_uz;
            }elseif ($lang == 'en') {
              $cmmenu = $menu->name_en;
            }elseif ($lang == 'ru') {
              $cmmenu = $menu->name_ru;
            }
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href=""><?=$cmmenu?></a>
                <ul class="dropdown-menu">
              <?
              $menutitle = MenuTitle::find()->Where(['menu_id'=>$menu->id])->all();
                foreach ($menutitle as $menutitle) {
                   $lang = Yii::$app->language;
                   if ($lang == 'uz') {
                      $cmmenutitle = $menutitle->name_uz;
                    }elseif ($lang == 'en') {
                      $cmmenutitle = $menutitle->name_en;
                    }elseif ($lang == 'ru') {
                      $cmmenutitle = $menutitle->name_ru;
                    }
                  ?>
                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href=""><?=$menutitle->name_uz?></a>
                      <ul class="dropdown-menu">
                    <?
                    $menusub = MenuSub::find()->Where(['menu_title_id'=>$menutitle->id])->all();
                      foreach ($menusub as $menusub) {
                        $lang = Yii::$app->language;
                        if ($lang == 'uz') {
                          $cmmenusub = $menusub->name_uz;
                        }elseif ($lang == 'en') {
                          $cmmenusub = $menusub->name_en;
                        }elseif ($lang == 'ru') {
                          $cmmenusub = $menusub->name_ru;
                        }
                        ?>
                          <li class="nav-item">
                            <?
                              if ($menusub->link_type == 1) {
                                ?>
                                  <a class="dropdown-item" href="<?=Url::to(["site/".$menusub->link, 'id'=>$menusub->id])?>"><?=$menusub->name_uz?></a>
                                <?
                              }else {
                                ?>
                                  <a class="dropdown-item" href="<?=$menusub->link?>"><?=$menusub->name_uz?></a>
                                <?
                              }
                            ?>
                          </li>
                        <?
                      }
                    ?>
                      </ul>
                    </li>
                  <?
                }
                  ?>
                </ul>
              </li>
            <?
          }
         ?>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item dropdown language-select text-uppercase">
                
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="<?=Url::to(['site/aloqa'])?>" class="btn btn-sm btn-primary rounded-pill">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
<style type="text/css">
  .navbar.transparent:not(.fixed) {
     padding-top: 0px !important;
  }
  .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden;
      height: 600px;
  }
</style>
    <!-- /section -->
  </div>
  <!-- ##### Hero Area Start ##### -->


    <!-- ##### Hero Area End ##### -->
    <!--END HEADER SECTION-->
<?=$content?>
 <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            <div class="row wed-foot-link">
                <div class="col-md-3 foot-tc-mar-t-o">
                    <h4>Universitet</h4>
                    <ul style="margin-left: -38px;">
                        <li><a href="">Rektor tabrigi</a></li>
                        <li><a href="">Universitet nizomi</a></li>
                        <li><a href="">Me'yoriy hujjatlar</a></li>
                        <li><a href="">Umumiy ma'lumot</a></li>
                        <li><a href="">Onlayn murojaat</a></li>
                        <li><a href="">Qayta aloqa</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Tuzilma</h4>
                    <ul style="margin-left: -38px;">
                        <li><a href="">Rektorat</a></li>
                        <li><a href="">Kengashlar</a></li>
                        <li><a href="">Kafedralar</a></li>
                        <li><a href="">Markaz va bo'limlar</a></li>
                    </ul>
                </div>
                 <div class="col-md-3">
                    <h4>Faoliyat</h4>
                    <ul style="margin-left: -38px;">
                        <li><a href="">O'quv faoliyati</a></li>
                        <li><a href="">Ilmiy faoliyat</a></li>
                        <li><a href="">Ijtimoiy faoliyat</a></li>
                        <li><a href="">Xalqaro faoliyat</a></li>
                    </ul>
                </div>
                 <div class="col-md-3">
                    <h4>Yangiliklar</h4>
                    <ul style="margin-left: -38px;">
                        <li><a href="">E'lonlar</a></li>
                        <li><a href="">Tadbirlar</a></li>
                        <li><a href="">Bizning yutuqlar</a></li>
                        <li><a href="">fotogalereya</a></li>
                    </ul>
                </div>
            </div>
            <div class="row wed-foot-link-1">
                <div class="col-md-3 foot-tc-mar-t-o">
                    <h4>Manzil</h4>
                    <p>Manzil: Samarqand sh., Spitamen shoh ko‘chasi, 166-uy</p>
                    <p>Phone: <a href="#!">(66) 222-37-54</a></p>
                    <p>Email: <a href="#!">uzfi@.com</a></p>
                </div>
                <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.0442617391855!2d66.92115311473631!3d39.67121890856542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d192d50c43d2d%3A0xb165c3020cfe3714!2sSamDU%20O&#39;zbekiston-Finlandiya%20Pedagogika%20instituti!5e0!3m2!1sen!2s!4v1635831688417!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-3">
                    <h4>SOCIAL MEDIA</h4>
                    <ul style="margin-left: -38px;">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

