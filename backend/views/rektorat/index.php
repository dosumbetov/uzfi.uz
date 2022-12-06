<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\MenuSub;
use yii\helpers\Url;
use yii\helpers\ArrayHelper; 

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RektoratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rektorats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <p>
        <?= Html::a('Create Rektorat', ['create'], ['class' => 'btn btn-success']) ?>
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
            'lavozim_uz',
            //'lavozim_ru',
            //'lavozim_en',
            //'qabul_vaqti_uz',
            //'qabul_vaqti_ru',
            //'qabul_vaqti_en',
            //'tel',
            //'fax',
            //'email:email',
            //'telegram',
            //'manzil_uz',
            //'manzil_ru',
            //'manzil_en',
            //'vazifasi_uz:ntext',
            //'vazifasi_ru:ntext',
            //'vazifasi_en:ntext',
             [
                'attribute'=>'rek_menu_sub_id',
                'value'=>'rekMenuSub.name_uz',
                'filter'=>Html::activeDropDownList($searchModel, 'rek_menu_sub_id', ArrayHelper::map(MenuSub::find()->all(), 'id', 'name_uz'), ['class'=>'form-control', 'prompt'=>'Kerak bolimni tanlang']),
            ],
            //'tarjimaiyhol_uz:ntext',
            //'tarjimaiyhol_ru:ntext',
            //'tarjimaiyhol_en:ntext',

            'image.img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
