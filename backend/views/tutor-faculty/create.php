<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorFaculty */

$this->title = 'Create Tutor Faculty';
$this->params['breadcrumbs'][] = ['label' => 'Tutor Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-faculty-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
