<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\MenuSub;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;    

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">


    <p>
        <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name_uz',
            // 'name_ru',
            // 'name_en',
            'date',
            //'views',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
             [
                'attribute'=>'page_menu_sub_id',
                'value'=>'pageMenuSub.name_uz',
                'filter'=>Html::activeDropDownList($searchModel, 'page_menu_sub_id', ArrayHelper::map(MenuSub::find()->Where(['id'=>[3,4]])->all(), 'id', 'name_uz'), ['class'=>'form-control', 'prompt'=>'yangilik turini tanlang']),
            ],
            // 'pageMenuSub.name_uz',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
