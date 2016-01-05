<?php

namespace backend\controllers;

use Yii;
use common\models\Dish;
use backend\models\DishSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DishController implements the CRUD actions for Dish model.
 */
class DishController extends Controller
{
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
        $searchModel = new DishSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dish model.
     * @param integer $id_dania
     * @param integer $id_restauracji
     * @return mixed
     */
    public function actionView($id_dania, $id_restauracji)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_dania, $id_restauracji),
        ]);
    }

    /**
     * Creates a new Dish model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dish();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dania' => $model->id_dania, 'id_restauracji' => $model->id_restauracji]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dish model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_dania
     * @param integer $id_restauracji
     * @return mixed
     */
    public function actionUpdate($id_dania, $id_restauracji)
    {
        $model = $this->findModel($id_dania, $id_restauracji);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dania' => $model->id_dania, 'id_restauracji' => $model->id_restauracji]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Dish model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_dania
     * @param integer $id_restauracji
     * @return mixed
     */
    public function actionDelete($id_dania, $id_restauracji)
    {
        $this->findModel($id_dania, $id_restauracji)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dish model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_dania
     * @param integer $id_restauracji
     * @return Dish the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_dania, $id_restauracji)
    {
        if (($model = Dish::findOne(['id_dania' => $id_dania, 'id_restauracji' => $id_restauracji])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
