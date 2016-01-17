<?php
/* @var $this yii\web\View */
?>
<h1>Twój Koszyk</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                            <th>
                                    #
                            </th>
                            <th>
                                    Produkt
                            </th>
                            <th>
                                    Porcja
                            </th>
                            <th>
                                    Ilość
                            </th>
                            <th>
                                    Cena
                            </th>
                            <th>
                                    Usuń
                            </th>
                    </tr>
		</thead>
		<tbody>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

if(isset($settings)&&!empty($settings)){
    
foreach ($settings as $index) {
    echo '<tr>'
            . '<td>'.$index['id'].'</td>'
            . '<td>'.$index['nazwa'].'</td>'
            . '<td>'.$index['porcja'].'</td>'
            . '<td>'.$index['ilosc'].'szt </td>'
            . '<td>'.$index['cena'].'zł </td>'
            . '<td><a href="/koszyk/usun?id='.$index['id'].'"><button type="button" class="btn btn-xs active btn-danger">X</button></a></td></tr>';
}
}
else {
      \Yii::$app->getSession()->setFlash('warning', 'Koszyk posty');   
}

?>
		</tbody>
            </table>
            <a href="/koszyk/wyslij">
            	<button type="button" class="btn btn-primary">
		ZREALIZUJ
		</button>
            </a>
            <a href="/koszyk/clean">
            	<button type="button" class="btn btn-default">
		OPRÓŻNIJ
		</button>
            </a>
	</div>
    </div>
</div>