<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Restaurant */

$this->title = $model->id_restauracji;
$this->params['breadcrumbs'][] = ['label' => 'Restaurants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_restauracji' => $model->id_restauracji, 'id_miasta' => $model->id_miasta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_restauracji' => $model->id_restauracji, 'id_miasta' => $model->id_miasta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_restauracji',
            'nazwa',
            'id_miasta',
        ],
    ]) ?>

</div>
