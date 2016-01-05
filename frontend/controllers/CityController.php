<?php

namespace frontend\controllers;

class CityController extends \yii\web\Controller
{
     public function actionIndex()
    {

     $query =\common\models\City::find()->all();
     

        return $this->render('index',[
            'query'=>$query,
        ]);
        
    }
}
