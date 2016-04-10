<?php

namespace backend\controllers;

use Yii;
use common\models\order_detail;
use common\models\order_detailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailsController implements the CRUD actions for order_detail model.
 */
class DetailsController extends Controller
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
     * Lists all order_detail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single order_detail model.
     * @param integer $id_or_detail
     * @param integer $id_dania
     * @return mixed
     */
    public function actionView($id_or_detail, $id_dania)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_or_detail, $id_dania),
        ]);
    }

    /**
     * Creates a new order_detail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new order_detail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_or_detail' => $model->id_or_detail, 'id_dania' => $model->id_dania]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing order_detail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_or_detail
     * @param integer $id_dania
     * @return mixed
     */
    public function actionUpdate($id_or_detail, $id_dania)
    {
        $model = $this->findModel($id_or_detail, $id_dania);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_or_detail' => $model->id_or_detail, 'id_dania' => $model->id_dania]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing order_detail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_or_detail
     * @param integer $id_dania
     * @return mixed
     */
    public function actionDelete($id_or_detail, $id_dania)
    {
        $this->findModel($id_or_detail, $id_dania)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the order_detail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_or_detail
     * @param integer $id_dania
     * @return order_detail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_or_detail, $id_dania)
    {
        if (($model = order_detail::findOne(['id_or_detail' => $id_or_detail, 'id_dania' => $id_dania])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
