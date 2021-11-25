
<?
use backend\models\TchMenuTitle;
use backend\models\TchMenu;
use backend\models\Teacher;
use yii\helpers\Url;
?>
<style>
.collap {
  background-color: white;
  /*color: white;*/
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  padding-left: 100px;
}
.collap:after {
  content: '\002B';
  /*color: white;*/
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.conten {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
  list-style-type: none;
  padding-left: 100px;
}
.conten a {
  text-decoration: none;

}
.asd {
  padding-left: 100px;
  margin-top: 20px; 
}
.asd a:hover, a:focus {
     color: #23527c;
     font-weight: bold;
}
</style>
</head>
<body>
  <nav>
    <div class="nav nav-tabs asd" id="nav-tab" role="tablist">
      <?
        foreach ($tchmenu as $tchmenu) {
          ?>
          <a class="nav-item nav-link" id="nav-<?=$tchmenu->creater?>-tab" data-toggle="tab" href="#nav-<?=$tchmenu->creater?>" role="tab" aria-controls="nav-<?=$tchmenu->creater?>" aria-selected="true"><?=$tchmenu->name_uz?></a>
          <?
        }
      ?>
      
     <!--  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a> -->
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <?
      $tchmenu1 = TchMenu::find()->all();
      foreach ($tchmenu1 as $tchmenu1) {
        ?>
        <div class="tab-pane fade" style="color: black;" id="nav-<?=$tchmenu1->creater?>" role="tabpanel" aria-labelledby="nav-<?=$tchmenu1->creater?>-tab">
          <?
            $tchmenutitle = TchMenuTitle::find()->Where(['tch_menu_id' => $tchmenu1->id])->all();
            foreach ($tchmenutitle as $tchmenutitle) {
              ?>
                <button class="collap"><?=$tchmenutitle->name_uz?></button>
                <div class="conten">
                  <?
                    $teacher = Teacher::find()->Where(['tch_menu_title_id'=>$tchmenutitle->id])->all();
                    foreach ($teacher as $teacher) {
                      ?>
                        <li><a href="<?=Url::to(['site/teacher', 'id'=>$teacher->id])?>"><?=$teacher->name?></a></li>
                      <?
                    }
                  ?>
                </div>
              <?
            }
          ?>
        </div>
        <?
      }
    ?>
  </div>



<script>
var coll = document.getElementsByClassName("collap");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var conten = this.nextElementSibling;
    if (conten.style.maxHeight){
      conten.style.maxHeight = null;
    } else {
      conten.style.maxHeight = conten.scrollHeight + "px";
    } 
  });
}
</script>

<style type="text/css">
  .tab-content .tab-pane .conten li a{
     color: #000000;
     padding: 20px 10px;
     line-height: 60px;
     font-size: 16px;
     font-weight: 600;
    /* text-transform: uppercase;
     */
     position:relative;
}
 .tab-content .tab-pane .conten li a:hover{
     color: #e66030;
}
 .tab-content .tab-pane .conten li a:after{
     content: "";
     position: absolute;
     width: 100%;
     height: 3px;
     bottom: 12px;
     left: 0;
     color: #e66030;
     background-color: #e66030;
     visibility: hidden;
     -webkit-transform: scaleX(0);
     transform: scaleX(0);
     transition: all .15s ease-in;
     z-index: 1;
}
 .tab-content .tab-pane .conten li a:hover:after{
     visibility: visible;
     transform: scaleX(1);
     transition: all .25s ease-out;
}
 .tab-content .tab-pane .conten li:last-child a{
     padding-right:0px;
}
</style>