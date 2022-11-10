<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktablarInfo */

$this->title = 'Create Maktablar Info';
$this->params['breadcrumbs'][] = ['label' => 'Maktablar Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maktablar-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
