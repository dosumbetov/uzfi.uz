<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\MenuSub;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;  

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InstitutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instituts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <p>
        <?= Html::a('Create Institut', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
           
            // 'content_ru:ntext',
            // 'content_en:ntext',
            // 'insMenuSub.name_uz',

             [
                'attribute'=>'ins_menu_sub_id',
                'value'=>'insMenuSub.name_uz',
                'filter'=>Html::activeDropDownList($searchModel, 'ins_menu_sub_id', ArrayHelper::map(MenuSub::find()->all(), 'id', 'name_uz'), ['class'=>'form-control', 'prompt'=>'Menu Subni tanlang']),
            ],
             'content_uz:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
