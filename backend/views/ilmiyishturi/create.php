<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ilmiyishturi */

$this->title = 'Create Ilmiyishturi';
$this->params['breadcrumbs'][] = ['label' => 'Ilmiyishturis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ilmiyishturi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
