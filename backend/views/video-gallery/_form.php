<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\tabs\TabsX;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\MenuSub;
/* @var $this yii\web\View */
/* @var $model backend\models\VideoGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?php $form = ActiveForm::begin(); ?>

     <?
            $content1 = 
             $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'type_uz')->textInput(['maxlength' => true]);
        ?>

        <?
            $content2 = 
             $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'type_ru')->textInput(['maxlength' => true]);
        ?>

        <?
            $content3 = 
            $form->field($model, 'name_en')->textInput(['maxlength' => true]).
            $form->field($model, 'type_en')->textInput(['maxlength' => true]);
        ?>

       <? 
           $items = [
                [
                    'label'=>'<i class="fa fa-home"></i> Uzbek',
                    'content'=>$content1,
                ],
                [
                    'label'=>'<i class="fa fa-user"></i> Russian',
                    'content'=>$content2,
                ],
                [
                    'label'=>'<i class="fa fa-user"></i> English',
                    'content'=>$content3,
                ],
            ];

        ?>
        <?
            echo TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
                'encodeLabels'=>false
            ]);
        ?>

     <?
        if ($model->img == null) {
             echo $form->field($model, 'img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            ]); 
         }else{
        ?>
            <img src="<?=$model->img; ?>" width='50%'>
        <?
         } 
    ?>

    <?= $form->field($model, 'link')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'video_duration')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
