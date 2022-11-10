<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuSub */

$this->title = 'Update Menu Sub: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menu Subs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-sub-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
