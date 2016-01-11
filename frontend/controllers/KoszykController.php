<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use app\models\TestForm;


class KoszykController extends \yii\web\Controller
{
    
         public function actionIndex()//wyświetlanie
    {
        $koszyk = Yii::$app->session->get('zamowione');

        return $this->render('index', ['settings' => $koszyk]);
        
             //brak danych
           //id //nazwa //porcja // ilosc //cena
    
    }
    
    public function actionAdd()//wyświetlanie
    {
    echo "Id";
        
             //brak danych
           //id //nazwa //porcja // ilosc //cena
    
    }
   
         public function actionEntry()
    {   
        $model = new TestForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('test', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('test', ['model' => $model]);
        }
    }
    
    public function actionDodaj()
    {   //dodwanie po id gdzy będą dane
            $koszyk= Yii::$app->session->set('zamowione',[
            ['id' => 1, 'nazwa' => 'pizza', 'porcja'=>'duża' ,'cena' => 10, 'ilosc' => 2],
            ['id' => 2, 'nazwa' => 'pierogi','porcja'=>'duża' , 'cena'=>12,'ilosc' => 1]
            ]);
        //    return $this->render('index',['settings' => $koszyk]);
            return $this->redirect('index',['settings' => $koszyk]);
    }
    
    public function actionUsun($id)
    {
        $koszyk = Yii::$app->session->get('zamowione');
        $nowykoszyk = [];
        
         if (is_array($koszyk)) {
            foreach ($koszyk as $pozycja) {
                if ($pozycja['id'] != $id) {
                    $nowykoszyk[] = $pozycja;
                }
            }
         
      
          Yii::$app->session->set('zamowione',$nowykoszyk);
         \Yii::$app->getSession()->setFlash('success', 'Usunęto pozycję: '.$id);
        }
        return $this->goBack('index');

    }  
    
     public function actionWyslij()
    {
     $koszyk = Yii::$app->session->get('zamowione');
     $zapisz=1;
     if($zapisz){
      \Yii::$app->getSession()->setFlash('success', 'Zamówienie Twoje zostało wysłane :)');
     }else{
      \Yii::$app->getSession()->setFlash('warning', 'Zamówienie nie wysłane :/');
     }
     return $this->goBack('index');
    }
    
 public function actionForm()
    {
     echo 'FORMMMMM';
     return $this->render('index');
    }

}
