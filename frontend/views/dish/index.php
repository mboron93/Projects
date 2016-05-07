<?php

use yii\helpers\Html;

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

            [
                'label' => 'Nazwa dania' ,
                'format' => 'raw',
                // here comes the problem - instead of parent_region I need to have parent
                'value' => function ($dataProvider) {
                     return Html::a($dataProvider->nazwa_dania, '/koszyk/add?id=' . $dataProvider->id_dania);
                 },
            ],

                       'opis:ntext',
            'koszt_dania',
            'rodzaj:ntext',  // this is what I want to display in link value - name of this related data

        ],
    ]); ?>
