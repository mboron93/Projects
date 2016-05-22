<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RestaurantType */

$this->title = $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Restaurant Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'type_id' => $model->type_id, 'id_restauracji' => $model->id_restauracji], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'type_id' => $model->type_id, 'id_restauracji' => $model->id_restauracji], [
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
            'type_id',
            'type',
            'id_restauracji',
        ],
    ]) ?>

</div>
