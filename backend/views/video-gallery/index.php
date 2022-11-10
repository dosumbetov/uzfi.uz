<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VideoGallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Video Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-8">
        <div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

            <p>
                <?= Html::a('Create Video Gallery', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'name_uz:ntext',
                    'type_uz',
                    //'type_ru',
                    //'type_en',
                    'img',
                    // 'link:ntext',
                    //'video_duration',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
    <div class="col-md-4">
       <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
