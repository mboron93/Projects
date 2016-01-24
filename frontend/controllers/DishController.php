<?php

namespace frontend\controllers;

class DishController extends \yii\web\Controller
{
    public function actionProto()
    {
        return $this->render('index');
    }
 public function actionIndex($id)
    {
      
             $query = \common\models\Dish::find()->where(['id_restauracji' => $id])->all();
        return $this->render('index',[
            'query'=>$query,
           
        ]);
        
    }
}
