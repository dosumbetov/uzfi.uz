<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\TutorFaculty;
use yii\data\ActiveDataProvider;

class FacultyorderController extends ActiveController
{
    public $modelClass = 'backend\models\TutorFaculty';

    public function actions()
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>TutorFaculty::find(),
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


