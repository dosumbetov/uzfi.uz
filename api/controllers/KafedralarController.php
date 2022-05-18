<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\CommonKafedra;
use yii\data\ActiveDataProvider;

class KafedralarController extends ActiveController
{
    public $modelClass = 'backend\models\CommonKafedra';

    public function actions()
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>CommonKafedra::find(),
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


