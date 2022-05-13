<<<<<<< HEAD
<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\Rektorat;
use yii\data\ActiveDataProvider;

class RektoratController extends ActiveController
{
    public $modelClass = 'backend\models\Rektorat';
}


=======
<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\Rektorat;
use yii\data\ActiveDataProvider;

class RektoratController extends ActiveController
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
    		'query'=>Rektorat::find()->Where(['rek_menu_sub_id'=>[5,7,9]]),
    		'pagination'=>[
    			'pageSize' =>3
    		]
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


>>>>>>> cb46d8056e2e32dcdd1db28dd2a73d1ece97a48a
