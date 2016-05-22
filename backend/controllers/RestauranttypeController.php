<?php

namespace backend\controllers;

use Yii;
use common\models\RestaurantType;
use backend\models\RestaurantTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RestauranttypeController implements the CRUD actions for RestaurantType model.
 */
class RestauranttypeController extends Controller
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
     * Lists all RestaurantType models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RestaurantTypeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RestaurantType model.
     * @param integer $type_id
     * @param integer $id_restauracji
     * @return mixed
     */
    public function actionView($type_id, $id_restauracji)
    {
        return $this->render('view', [
            'model' => $this->findModel($type_id, $id_restauracji),
        ]);
    }

    /**
     * Creates a new RestaurantType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RestaurantType();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'type_id' => $model->type_id, 'id_restauracji' => $model->id_restauracji]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RestaurantType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $type_id
     * @param integer $id_restauracji
     * @return mixed
     */
    public function actionUpdate($type_id, $id_restauracji)
    {
        $model = $this->findModel($type_id, $id_restauracji);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'type_id' => $model->type_id, 'id_restauracji' => $model->id_restauracji]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RestaurantType model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $type_id
     * @param integer $id_restauracji
     * @return mixed
     */
    public function actionDelete($type_id, $id_restauracji)
    {
        $this->findModel($type_id, $id_restauracji)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RestaurantType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $type_id
     * @param integer $id_restauracji
     * @return RestaurantType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($type_id, $id_restauracji)
    {
        if (($model = RestaurantType::findOne(['type_id' => $type_id, 'id_restauracji' => $id_restauracji])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
