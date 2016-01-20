<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use common\models\Order;
use common\models\Detail;

use common\models\Dish;


class KoszykController extends \yii\web\Controller
{
    
         public function actionIndex()//wyświetlanie
    {
        $koszyk = Yii::$app->session->get('zamowione');

        return $this->render('index', ['settings' => $koszyk]);
             //brak danych
           //id //nazwa //porcja // ilosc //cena
    }
    
    public function actionAdd($id)//wyświetlanie
    {
        //find dish WHERE is $id
         $query = Dish::find()->where(['id_dania' => $id])->one();
         //nie ma takiego
        if(!$query)
            {         
            \Yii::$app->getSession()->setFlash('warning', 'Nie ma takiego dania');
            return $this->goBack('index');
            }
  
        $koszyk = Yii::$app->session->get('zamowione');
         $jest=false;     

                 if (is_array($koszyk)) {
                    foreach ($koszyk as $key => $pozycja) {
                        if ($pozycja['id'] == $id) {
                          $jest=1;
                          $koszyk[$key]['ilosc']++;
                        }
                         
                 }}
            if(!$jest)
            {
                $koszyk[]=['id' => $id, 'nazwa' => $query->nazwa_dania,'porcja'=>'mała' , 'cena'=>$query->koszt_dania,'ilosc' => 1];
            }
            Yii::$app->session->set('zamowione',$koszyk);
              
           return $this->render('index', ['settings' => $koszyk]);
    }
    
    public function actionClean()//wyświetlanie
    {
          $koszyk=[];
          Yii::$app->session->set('zamowione',$koszyk);
           
          return $this->goBack('index');
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
         //sprwadzenie czy zalogowany -> z zalogowania sporotem do wyślij
        if(Yii::$app->user->isGuest)
            {   
            $this->redirect('/site/login');
            }
        else{
            //wysłanie do bazy
     $koszyk = Yii::$app->session->get('zamowione'); 
     //suma produktów
     $suma=0;
     foreach ($koszyk as $l) {
       $suma += $l['cena'];
     }
  
     //ustawienie zamówienia
        $order = new Order;
        $order->id_usera = (Yii::$app->user->identity->id);
        
        $order->wartosc = $suma;
        $value=date('Y-d-m h:i:s');
        $order->data = (Yii::$app->formatter->asTimestamp($value));
        $order->save();
         $id =  $order->id_order;
       
    // zapis produktów do bazy z powiązaniem id zamówienia
      
       foreach ($koszyk as $key => $pozycja) {
           $detail = new Detail;
           $detail->id_order= $id;
           $detail->id_dania= $pozycja['id'];
           $detail->porcja= $pozycja['porcja'];
           $detail->ilosc= $pozycja['ilosc'];
           $detail->cena= $pozycja['cena'];
           $detail->save();
       }
       \Yii::$app->getSession()->setFlash('success', 'Zamówienie Twoje zostało wysłane :)'); 
       
       return $this->redirect('clean');
    # $zapisz=1;
    # if($zapisz){
    #  \Yii::$app->getSession()->setFlash('success', 'Zamówienie Twoje zostało wysłane :)');
    # }else{
    #  \Yii::$app->getSession()->setFlash('warning', 'Zamówienie nie wysłane :/');
     }
  
  
     }
    }
