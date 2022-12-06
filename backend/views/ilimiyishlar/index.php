<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;  
use backend\models\Rektorat;
use backend\models\Ilmiyishturi;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IlimiyishlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ilimiyishlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-8">
        <div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'name_uz',
                    // 'name_ru',
                    // 'name_en',
                    'published_place_uz',
                    //'published_place_ru',
                    //'published_place_en',
                    //'date',
                    // 'ilimiyishlarRek.name_uz',
                    // 'ilimiyishlarTuri.name',

                     [
                        'attribute'=>'ilimiyishlar_rek_id',
                        'value'=>'ilimiyishlarRek.name_uz',
                        'filter'=>Html::activeDropDownList($searchModel, 'ilimiyishlar_rek_id', ArrayHelper::map(Rektorat::find()->all(), 'id', 'name_uz'), ['class'=>'form-control', 'prompt'=>'Menu title tanlang']),
                    ],

                     [
                        'attribute'=>'ilimiyishlar_turi_id',
                        'value'=>'ilimiyishlarTuri.name',
                        'filter'=>Html::activeDropDownList($searchModel, 'ilimiyishlar_turi_id', ArrayHelper::map(Ilmiyishturi::find()->all(), 'id', 'name'), ['class'=>'form-control', 'prompt'=>'Menu title tanlang']),
                    ],

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


    


</div>
