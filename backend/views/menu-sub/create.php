<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuSub */

$this->title = 'Create Menu Sub';
$this->params['breadcrumbs'][] = ['label' => 'Menu Subs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-sub-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
