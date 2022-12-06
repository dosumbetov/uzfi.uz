<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Rektorat;
use backend\models\Ilmiyishturi;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Ilimiyishlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'published_place_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'published_place_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'published_place_en')->textInput(['maxlength' => true]) ?>

    <value><b>Chop etilgan sana</b></value>
   <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
    ]);?>

    <?= $form->field($model, 'ilimiyishlar_rek_id')->dropDownList(
        ArrayHelper::map(Rektorat::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "Xodimni tanlang",
        ]); ?>

     <?= $form->field($model, 'ilimiyishlar_turi_id')->dropDownList(
        ArrayHelper::map(Ilmiyishturi::find()->all(), 'id', 'name'),
        [
            'prompt' => "Ilmiy ishlar turini tanlang",
        ]); ?> 


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
