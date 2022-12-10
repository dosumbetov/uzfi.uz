<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorImg */

$this->title = 'Update Tutor Img: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutor Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tutor-img-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
