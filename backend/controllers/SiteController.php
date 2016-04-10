<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use common\models\User;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */   
  //  const $admin = "Admin";
  const admin = 'Admin';


    public function beforeAction($e)
  { 
        if(Yii::$app->user->isGuest)
        {
            return parent::beforeAction($e);
        }
        else{
            if((Yii::$app->user->identity->isAdmin())== self::admin)
                {
                    return true;
                }
             else {
              if ($this->action->getUniqueId() != 'site/error') {
                  Yii::$app->user->logout();
                Yii::$app->getSession()->setFlash('error', 'Nie masz praw dostępu !');
                $this->redirect(Url::to(['site/error']));
              }
              else {
               return true;
              }
        }  
    }
  } 
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','pomoc','create'],
                        'allow' => true,
                        'roles' => ['@'],//tylko zalogowani
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public function actionCreate()
    {
        $model = new Status();
 
        if ($model->load(Yii::$app->request->post())) {
          $model->created_by = Yii::$app->user->getId();
          $model->created_at = time();
          $model->updated_at = time();
           if ($model->save()) {             
             return $this->redirect(['view', 'id' => $model->id]);             
           } 
        } 
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

     public function actionPomoc()
    {
        return $this->render('pomoc');
    }
    
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
