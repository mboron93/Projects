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
class TestController extends Controller
{
    

    public function actionForm()
    {
        $nazwa='';
        if(Yii::$app->request->isPost)
        {   
            //var_dump($_POST);exit;
            var_dump($_FILES);
            $plik=$_FILES['img']['tmp_name'];
            $nazwa=md5(uniqid(time())).'.jpg';
            //$typ=$_FILES['img']['type'];
            move_uploaded_file($plik,Yii::$app->basePath.'/web/ussing/'.$nazwa);
            
           
            //echo  Yii::$app->request->post('nazw');exit; 
            
        }   
         return $this->render('test',['nazwa'=>$nazwa]);
        
    }
}