<?php

namespace backend\controllers;

use Yii;
use common\models\Detail;
use backend\models\DetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailController implements the CRUD actions for Detail model.
 */
class DetailController extends Controller
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
     * Lists all Detail models.
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
     * Displays a single Detail model.
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
     * Creates a new Detail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Detail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_or_detail' => $model->id_or_detail, 'id_dania' => $model->id_dania]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Detail model.
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
     * Deletes an existing Detail model.
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
     * Finds the Detail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_or_detail
     * @param integer $id_dania
     * @return Detail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_or_detail, $id_dania)
    {
        if (($model = Detail::findOne(['id_or_detail' => $id_or_detail, 'id_dania' => $id_dania])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
