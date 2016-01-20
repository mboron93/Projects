<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;

/**
 * Site controller
 */
class UserController extends Controller
{

    public function actionIndex()
    {
      $model = new User();
      $model = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
      var_dump( $model);
       #$user->save();
        return $this->render('index');
    }
    
    public function actionSet() {
        
        Yii::$app->session->set('cos','mojid');

    }
    
    public function actionGet() {
        echo Yii::$app->session->get('cos');
        
    }
    public function actionTest(){
        return $this->render('test');
    }
    

  
   
}
