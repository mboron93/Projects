<?php

namespace frontend\controllers;

class DishController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
