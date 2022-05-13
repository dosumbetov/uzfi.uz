<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\Pages;
use yii\data\ActiveDataProvider;

class NewsController extends ActiveController
{
    public $modelClass = 'backend\models\Pages';

    public function actions()   
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;   
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>Pages::find()->Where(['page_menu_sub_id'=>3])->orderBy(['id'=>SORT_DESC]),
    		'pagination'=>[
    			'pageSize' =>6
    		]
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


