<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WyborMiastSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wybor Miasts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wybor-miast-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wybor Miast', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_miasta',
            'miasto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
