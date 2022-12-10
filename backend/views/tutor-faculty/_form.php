<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorFaculty */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'faculty_name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faculty_name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faculty_name_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
