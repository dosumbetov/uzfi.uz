<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TutorImgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutor Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6">

        <div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                     [
                        'attribute' => 'img',
                        'format' => 'html',
                        'value' => function($model){
                            return Html::a($model->img, ['download', 'filename' => $model->img]);
                        }
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
    <div class="col-md-6">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
