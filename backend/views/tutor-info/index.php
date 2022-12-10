<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\TutorFaculty;
use yii\helpers\Url;
use yii\helpers\ArrayHelper; 

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TutorInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutor Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: white; padding: 20px; border-radius: 10px 10px 0 0; border-top: 5px solid rgb(183 202 205);">

    <p>
        <?= Html::a('Create Tutor Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_uz',
            // 'name_ru',
            // 'name_en',
            'biriktirilgan_uz',
            //'biriktirilgan_ru',
            //'biriktirilgan_en',
            //'tel',
            //'telegram',
            //'email:email',
            //'manzil_uz:ntext',
            //'manzil_ru:ntext',
            //'manzil_en:ntext',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'tutor_duty_uz:ntext',
            //'tutor_duty_ru:ntext',
            //'tutor_duty_en:ntext',
            //'birik_talaba_royxati_uz:ntext',
            //'birik_talaba_royxati_ru:ntext',
            //'birik_talaba_royxati_en:ntext',
            //'tutor_menu_sub_id',
            // 'tutorFaculty.faculty_name_uz',
            [
                'attribute'=>'tutor_faculty_id',
                'value'=>'tutorFaculty.faculty_name_uz',
                'filter'=>Html::activeDropDownList($searchModel, 'tutor_faculty_id', ArrayHelper::map(TutorFaculty::find()->all(), 'id', 'faculty_name_uz'), ['class'=>'form-control', 'prompt'=>'Tegishli facultetni tanlang']),
            ],
            'tutorImg.img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
