<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonKafedraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="common-kafedra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'lavozim_uz') ?>

    <?php // echo $form->field($model, 'lavozim_ru') ?>

    <?php // echo $form->field($model, 'lavozim_en') ?>

    <?php // echo $form->field($model, 'darajasi_uz') ?>

    <?php // echo $form->field($model, 'darajasi_ru') ?>

    <?php // echo $form->field($model, 'darajasi_en') ?>

    <?php // echo $form->field($model, 'kafedra_hodim_uz') ?>

    <?php // echo $form->field($model, 'kafedra_hodim_ru') ?>

    <?php // echo $form->field($model, 'kafedra_hodim_en') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'qabul_uz') ?>

    <?php // echo $form->field($model, 'qabul_ru') ?>

    <?php // echo $form->field($model, 'qabul_en') ?>

    <?php // echo $form->field($model, 'manzil_uz') ?>

    <?php // echo $form->field($model, 'manzil_ru') ?>

    <?php // echo $form->field($model, 'manzil_en') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'email_uz') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'kafedra_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
