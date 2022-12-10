<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorImg */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?php $form = ActiveForm::begin(); ?>

      <?
        if ($model->img == null) {
             echo $form->field($model, 'img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions'=>[
                'maxFileCount' => 1,
                'allowedFileExtensions'=>['jpg','jpeg','gif','png'],
                'showUpload' => false,
                'maxImageWidth' => 600,
                'maxImageHeight' => 400,
                'resizeImage' => true,
                'maxFilePreviewSize' => 10240,
                'minImageWidth' => 50,
                'minImageHeight'=> 50,
                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                'maxFileSize' => 1024
            ],
            ]); 
         }else{
        ?>
            <img src="/frontend/web/arguments/rek_img/<?=$model->img; ?>" width='50%'>
        <?
         } 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
