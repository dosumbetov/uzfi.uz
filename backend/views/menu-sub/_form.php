<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\MenuTitle;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuSub */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_title_id')->dropDownList(
        ArrayHelper::map(MenuTitle::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "Menu titleni tanlang",
        ]); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    

     <?= $form->field($model, 'link_type')->dropDownList(['1' => 'Ichki link', '2' => 'Tashqi link'],['prompt' => 'Link turini tanlang']) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
