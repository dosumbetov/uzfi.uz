<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorFaculty */

$this->title = 'Update Tutor Faculty: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutor Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
