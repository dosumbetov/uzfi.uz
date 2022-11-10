<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorInfo */

$this->title = 'Create Tutor Info';
$this->params['breadcrumbs'][] = ['label' => 'Tutor Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
