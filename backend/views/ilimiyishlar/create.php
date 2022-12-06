<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ilimiyishlar */

$this->title = 'Create Ilimiyishlar';
$this->params['breadcrumbs'][] = ['label' => 'Ilimiyishlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ilimiyishlar-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
