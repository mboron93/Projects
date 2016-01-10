<?php

namespace backend\controllers;

use Yii;
use common\models\Restaurant;
use backend\models\RestaurantSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RestaurantController implements the CRUD actions for Restaurant model.
 */
class RestaurantController extends Controller
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
     * Lists all Restaurant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RestaurantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Restaurant model.
     * @param integer $id_restauracji
     * @param integer $id_miasta
     * @return mixed
     */
    public function actionView($id_restauracji, $id_miasta)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_restauracji, $id_miasta),
        ]);
    }

    /**
     * Creates a new Restaurant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Restaurant();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_restauracji' => $model->id_restauracji, 'id_miasta' => $model->id_miasta]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Restaurant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_restauracji
     * @param integer $id_miasta
     * @return mixed
     */
    public function actionUpdate($id_restauracji, $id_miasta)
    {
        $model = $this->findModel($id_restauracji, $id_miasta);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_restauracji' => $model->id_restauracji, 'id_miasta' => $model->id_miasta]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Restaurant model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_restauracji
     * @param integer $id_miasta
     * @return mixed
     */
    public function actionDelete($id_restauracji, $id_miasta)
    {
        $this->findModel($id_restauracji, $id_miasta)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Restaurant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_restauracji
     * @param integer $id_miasta
     * @return Restaurant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_restauracji, $id_miasta)
    {
        if (($model = Restaurant::findOne(['id_restauracji' => $id_restauracji, 'id_miasta' => $id_miasta])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
