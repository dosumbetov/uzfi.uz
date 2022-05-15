<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\Fakultet;
use yii\data\ActiveDataProvider;

class FakultetController extends ActiveController
{
    public $modelClass = 'backend\models\Fakultet';

    public function actions()   
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;   
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>Fakultet::find(),
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}
