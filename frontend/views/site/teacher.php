 <?
use yii\helpers\Url;


  foreach ($teacherinfo as $teacherinfo) {
    # code...
  }
 ?>

<section class="orqarasm">
    <img src="../images/pro-bg.jpg" width="100%;">
        <div class="pro-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <ul>
                             <li><a href="<?=Url::to(['site/teacher', 'id'=>$teacherinfo->staff_id])?>" class="pro-act">Dashboard</a></li>
                            <li><a href="<?=Url::to(['site/dbprofile', 'id'=>$teacherinfo->staff_id])?>">Profile</a></li>
                            <li><a href="<?=Url::to(['site/tchprofile', 'id'=>$teacherinfo->staff_id])?>">Galeriya</a></li>
                            <li><a href="<?=Url::to(['site/published', 'id'=>$teacherinfo->staff_id])?>">Kitoblar</a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
            
</section>
<div class="container ortafon">
    <div class="row">
        <div class="col-md-3 col-6 left_bar_tea">
            <img src="../images/<?=$teacherinfo->img?>" class="img_teacher">
            <h3 class="mt-3" style="text-align: center;"><?=$teacherinfo->name_uz?></h3>
            <p style="text-align: center;"><?=$teacherinfo->lavozim_uz?>, <br><?=$teacherinfo->rank_uz?></p>
            <hr style="margin: 0px; margin-bottom: 20px;">
            <p><i class="fa fa-telegram"></i><?=$teacherinfo->telegram?></p>
            <p><i class="fa fa-facebook"></i> <?=$teacherinfo->facebook?></p>
            <p><i class="fa fa-instagram"></i><?=$teacherinfo->instagram?></p>
        </div>
        <div class="col-md-9 col-6 middle_bar_tea">
           <h4 style="color: black;"><img src="../images/icon/db4.png" alt="" /> My Profile</h4>
           <hr style="margin: 0px; margin-bottom: 20px;">
          <table class="table caption-top">
            <thead>
              <tr>
                <th scope="col">Ismi</th>
                <th scope="col"><?=$teacherinfo->name_uz?></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Eamil</th>
                <td><?=$teacherinfo->email?></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Telefon raqami</th>
                <td><?=$teacherinfo->phone?></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Tug'ilgan sanasi</th>
                <td><?=$teacherinfo->birth?></td>
                <td></td>
                <td></td>
              </tr>
               <tr>
                <th scope="row">Manzil</th>
                <td><?=$teacherinfo->address_uz?></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
        </div>
    </div>
</div>


<style type="text/css">
    .left_bar_tea p i {
        margin-right: 20px;
        font-size: 20px;

    } 
    .img_teacher {
        position: relative;
        width: 250px;
        height: 280px;
       /* border: 2px solid #fff;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        border: 1px solid #F3F2F2;
        margin-top: -160px;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border-width: 3px 3px 3px;
        border-style: solid solid none;
        border-color: #F3F2F2 #F3F2F2 -moz-use-text-color;
        border-image: none;
        z-index: 2; 
        margin-left: -20px;
    }
    .left_bar_tea {
        margin-left: 30px;
        width: 250px;
        background-color: #fff;
        padding: 20px;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        margin-bottom: 80px;
        max-height: 450px !important;
    }
    .middle_bar_tea {
        position: relative;
        width: 750px;
        padding: 20px;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        margin-left: 50px;
        margin-top: 50px;
        margin-bottom: 50px;
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
     margin-left: 25px;
}
 .pro-menu ul li{
     display: inline-block;
}
 .pro-act{
     background: #225fd0;
     color: #fff !important;
}
 .pro-menu ul li a{
     padding: 17px 14px;
     line-height: 53px;
     color: #fff;
     font-weight: 500;
     border-right: 1px solid #405d7d;
}
 .pro-menu ul li a:hover{
     background: #225fd0;
     color: #fff;
}
</style>

