<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\Rektorat;
use yii\data\ActiveDataProvider;

class ManaviymarifiyfaoliyatController extends ActiveController
{
    public $modelClass = 'backend\models\Rektorat';

    public function actions()   
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;   
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>Rektorat::find()->Where(['rek_menu_sub_id'=>[30,39,40,41]]),
    		'pagination'=>[
    			'pageSize' =>10
    		]
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}
