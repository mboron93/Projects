<?php

namespace frontend\controllers;
use Yii;
use common\models\Dish;
use backend\models\DishSerach;

class DishController extends \yii\web\Controller
{
    public function actionProto()
    {
        return $this->render('index');
    }
 public function actionIndex($id)
    {
        $searchModel = new DishSerach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    /* $result = Dish::find()->where(['id_restauracji' => $id])->orderBy('rodzaj,nazwa_dania')->all();
        return $this->render('index',[
            'result'=>$result,
        ]);*/
        
    }
}
