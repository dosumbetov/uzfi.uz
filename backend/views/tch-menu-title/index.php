<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TchMenuTitleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tch Menu Titles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tch-menu-title-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tch Menu Title', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz',
            'name_ru',
            'name_en',
            'tch_menu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
