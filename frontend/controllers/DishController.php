<?php

namespace frontend\controllers;
use common\models\Dish;

class DishController extends \yii\web\Controller
{
    public function actionProto()
    {
        return $this->render('index');
    }
 public function actionIndex($id)
    {
        
     $result = Dish::find()->where(['id_restauracji' => $id])->orderBy('rodzaj,nazwa_dania')->all();
        return $this->render('index',[
            'result'=>$result,
        ]);
        
    }
}
