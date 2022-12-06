<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ilmiyishturi */

$this->title = 'Update Ilmiyishturi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ilmiyishturis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ilmiyishturi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
