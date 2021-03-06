<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RestaurantTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Restaurant Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Restaurant Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type_id',
            'type',
            'id_restauracji',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
