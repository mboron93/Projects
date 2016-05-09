<?php

namespace frontend\controllers;
use Yii;
use common\models\Dish;
use backend\models\DishSerach;
use yii\data\ActiveDataProvider;

class DishController extends \yii\web\Controller
{
    public function actionProto()
    {
        return $this->render('index');
    }
 public function actionIndex($id)
    {
     
     $query = DishSerach::find()->where(['id_restauracji'=>$id]);

$dataProvider = new ActiveDataProvider([
    'query' => $query,
]);

//        $searchModel = new DishSerach();
//        $dataProvider = $searchModel->find()->where(['id_restauracji'=>$id])->all();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
             'dataProvider' => $dataProvider,

        ]);
    /* $result = Dish::find()->where(['id_restauracji' => $id])->orderBy('rodzaj,nazwa_dania')->all();
        return $this->render('index',[
            'result'=>$result,
        ]);*/
        
    }
}
