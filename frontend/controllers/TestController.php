<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use common\models\City;

/**
 * Site controller
 */
class TestController extends Controller
{
        public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['special'],
                'rules' => [
                    [
                        'actions' => ['special'],
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            return date('d-m') === '04-01';
                        }
                    ],
                ],
            ],
        ];
    }
    
    public function actionSpecial()
    {
        return $this->render('index');
    }
    public function actionIndex()
    {

 //  $tabela= Dish::findAll();

  // echo tabela[0];
// var_dump(City::find()->all()->);exit; 
//var_dump(User::findIdentity(6)->flag);exit; 
//$id = Yii::$app->user->is
$iden = Yii::$app->user->identity;

    }
    
    public function actionTestsession() {
        Yii::$app->session->set('zamowione',[
            ['id' => 1, 'nazwa' => 'pizza', 'cena' => 10, 'ilosc' => 2],
            ['id' => 2, 'nazwa' => 'pierogi', 'cena'=>12,'ilosc' => 1]
            ]);
    }
  
    public function actionDodajdokoszyka($co, $ile)
    {
        $koszyk = Yii::$app->session->get('zamowione');
        $koszyk[] = ['id' => time(), 'nazwa' => $co, 'cena' => 20, 'ilosc' => $ile];
        Yii::$app->session->set('zamowione',$koszyk);
    }
    
    public function actionUsunzkoszyka($id)
    {
        $koszyk = Yii::$app->session->get('zamowione');
        $nowykoszyk = [];
        if (is_array($koszyk)) {
            foreach ($koszyk as $pozycja) {
                if ($pozycja['id'] != $id) {
                    $nowykoszyk[] = $pozycja;
                }
            }
        }
        Yii::$app->session->set('zamowione',$nowykoszyk);
    }
    
    public function actionPokazkoszyk() {
        var_dump(Yii::$app->session->get('zamowione'));
        $koszyk=Yii::$app->session->get('zamowione');
   
         if (is_array($koszyk)) {
            foreach ($koszyk as $pozycja) {
                echo $pozycja['nazwa'].' '.$pozycja['cena']."zł <br/>";
            }
        }
        exit;
    }
    
    private function podsumujKoszyk()
    {
        $koszyk = Yii::$app->session->get('zamowione');
        $suma = 0;
        if (is_array($koszyk)) {
            foreach ($koszyk as $pozycja) {
                $suma += $pozycja['cena']*$pozycja['ilosc'];
            }
        }
        return $suma;
    }

    public function actionForm()
    {
        //var_dump(Yii::$app->user->identity->flag);exit;
        //var_dump(Yii::$app->session->get('zamowione'));exit;
        //var_dump($this->podsumujKoszyk());exit; 
        $users = User::find()->where('id=1')->all();
        
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
         return $this->render('test',['nazwa'=>$nazwa,'users' => $users]);
        
    }
}