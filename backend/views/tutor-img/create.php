<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorImg */

$this->title = 'Create Tutor Img';
$this->params['breadcrumbs'][] = ['label' => 'Tutor Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-img-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
