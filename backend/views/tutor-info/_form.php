<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\MenuSub;
use backend\models\TutorFaculty;
use backend\models\TutorImg;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?php $form = ActiveForm::begin(); ?>

     <?
            $content1 = 
            $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'biriktirilgan_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'content_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).  
            $form->field($model, 'tutor_duty_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'birik_talaba_royxati_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content2 = 
            $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'biriktirilgan_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'content_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'tutor_duty_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'birik_talaba_royxati_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content3 = 
            $form->field($model, 'name_en')->textInput(['maxlength' => true]).
            $form->field($model, 'biriktirilgan_en')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_en')->textInput(['maxlength' => true]).
            $form->field($model, 'content_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'tutor_duty_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'birik_talaba_royxati_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
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



    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tutor_menu_sub_id')->dropDownList(
        ArrayHelper::map(MenuSub::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "Menu Subni tanlang",
        ]); ?>

        <?= $form->field($model, 'tutor_faculty_id')->dropDownList(
        ArrayHelper::map(TutorFaculty::find()->all(), 'id', 'faculty_name_uz'),
        [
            'prompt' => "Facultetni tanlang",
        ]); ?>

        <?= $form->field($model, 'tutor_img_id')->dropDownList(
        ArrayHelper::map(TutorImg::find()->all(), 'id', 'img'),
        [
            'prompt' => "Rasm tanlang",
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <img src="/frontend/web/arguments/rek_img/avatar.jpg" class="img-thumbnail" alt="..." id="my_image">
    </div>
    <div class="col-md-4">
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js">   
</script>  
<script>  
    $(document).ready(function(){
    $("#tutorinfo-tutor_img_id").change(function(){
        var selectedCountry = $(this).children("option:selected").text();
        // alert("You have selected the country - " + selectedCountry);
        $("#my_image").attr("src", '/frontend/web/arguments/rek_img/'+selectedCountry);
    });
}); 
</script>  