<?php

namespace frontend\controllers;

class RestaurantController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $query = \common\models\Restaurant::find()->all();
        return $this->render('index',[
            'query'=>$query,
        ]);
    }

}
