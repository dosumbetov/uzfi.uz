<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\MenuTitle;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;    

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSubSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Subs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-8">
        <div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                     [
                        'attribute'=>'menu_title_id',
                        'value'=>'menuTitle.name_uz',
                        'filter'=>Html::activeDropDownList($searchModel, 'menu_title_id', ArrayHelper::map(MenuTitle::find()->all(), 'id', 'name_uz'), ['class'=>'form-control', 'prompt'=>'Menu title tanlang']),
                    ],
                    'name_uz',
                    // 'name_ru',
                    // 'name_en',
                    
                    // 'menuTitle.name_uz',
                    'link',
                    // 'link_type',

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
