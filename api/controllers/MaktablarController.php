<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\MaktablarInfo;
use yii\data\ActiveDataProvider;

class MaktablarController extends ActiveController
{
    public $modelClass = 'backend\models\MaktablarInfo';

    public function actions()
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>MaktablarInfo::find(),
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


