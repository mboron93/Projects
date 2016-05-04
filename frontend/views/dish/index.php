<?php
/* @var $this yii\web\View */
/*//idRestauracji->nazwa pobierze  idRestauracji jako nazwa */
use yii\grid\GridView;
$this->title = 'MENU';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nazwa_dania',
            'opis:ntext',
            'koszt_dania',
            'rodzaj:ntext',

        ],
 ]); ?>
