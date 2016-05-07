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
    
        public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['wyslij'],
                'rules' => [
                    [
                        'actions' => ['wyslij'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    
         public function actionIndex()//wyświetlanie
    {
        $koszyk = Yii::$app->session->get('zamowione');

        return $this->render('index', ['settings' => $koszyk]);
             //brak danych
           //id //nazwa //porcja // ilosc //cena
    }
    
    public function  actionLiczba()
    {
        $razem =0;
        $koszyk = Yii::$app->session->get('zamowione');
         foreach ($koszyk as $key => $pozycja) {
                          $razem+=$koszyk[$key]['ilosc']*$koszyk[$key]['cena'];
                        }
        $i= count($koszyk).'poz., o wartości: '.$razem.' zł';
        return $i;
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
           
          return $this->render('index');
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
return $this->actionIndex();

    }  
    public function actionDane()
    {
        $query = \common\models\order_detail::find()->all();
         return $this->render('index',[
            'query'=>$query,
        ]);
        
    } 
     public function actionWyslij()
    {

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
       $model = new Order();
if ($model->email()) {
                Yii::$app->session->setFlash('success', 'Przyjeliśmy twoje zamówienie. Na twoją pocztę przesłaliśmy potwierdzenie. ');
                return $this->redirect('clean');
            } else {
                Yii::$app->session->setFlash('error', 'Coś poszło nie tak, sróbuj ponownie.');
            }
    # $zapisz=1;
    # if($zapisz){
    #  \Yii::$app->getSession()->setFlash('success', 'Zamówienie Twoje zostało wysłane :)');
    # }else{
    #  \Yii::$app->getSession()->setFlash('warning', 'Zamówienie nie wysłane :/');
     }
}
