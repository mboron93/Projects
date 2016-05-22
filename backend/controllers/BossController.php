<?php

namespace backend\controllers;

use Yii;
use common\models\Dish;
use backend\models\DishSerach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DishController implements the CRUD actions for Dish model.
 */
class BossController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Dish models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
        public function actionDanie()
    {
        return $this->render('danie');
    }

    /**
     * Displays a single Dish model.
     * @param integer $id_dania
     * @param integer $id_restauracji
     * @return mixed
     */
   
}
