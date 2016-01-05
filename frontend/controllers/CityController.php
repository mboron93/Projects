<?php

namespace frontend\controllers;

use common\models\City;

class CityController extends \yii\web\Controller
{
     public function actionIndex()
    {

     $query = City::find()->all();
     

        return $this->render('index',[
            'query'=>$query,
        ]);
        
    }
}
