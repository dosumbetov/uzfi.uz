<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmbPagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emb Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emb-pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emb Pages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name_uz',
            'name_ru',
            'name_en',
            // 'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'emb_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
