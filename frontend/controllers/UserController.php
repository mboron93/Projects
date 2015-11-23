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
        $user = User::findOne(1);
        $user -> username = "aa";
        $user -> save();
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
