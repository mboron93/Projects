<?php
/* @var $this yii\web\View */
?>
<h1>Twój Koszyk</h1>

<p>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


if(isset($settings)){
foreach ($settings as $index) {
    echo $index['id'].' '.$index['nazwa'].' '.$index['porcja'].' '.$index['ilosc'].'szt '.$index['cena'].'zł <a href="/koszyk/usun?id='.$index['id'].'">-</a><br/>';
}
}
/*else if(!isset($settings)){
         \Yii::$app->getSession()->setFlash('warning', 'Koszyk posty');
}
*/

?>
</p>
