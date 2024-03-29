<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorInfo */

$this->title = 'Update Tutor Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutor Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tutor-info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
