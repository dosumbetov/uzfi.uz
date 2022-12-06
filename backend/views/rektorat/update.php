<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rektorat */

$this->title = 'Update Rektorat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rektorats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rektorat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
