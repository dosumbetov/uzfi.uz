<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\TutorInfo;
use yii\data\ActiveDataProvider;

class TutorController extends ActiveController
{
    public $modelClass = 'backend\models\TutorInfo';

    public function actions()
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>TutorInfo::find(),
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


