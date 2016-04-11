<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Dish */

$this->title = $model->id_dania;
$this->params['breadcrumbs'][] = ['label' => 'Dishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dish-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_dania' => $model->id_dania, 'id_restauracji' => $model->id_restauracji], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_dania' => $model->id_dania, 'id_restauracji' => $model->id_restauracji], [
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
            'id_dania',
            'nazwa_dania',
            'opis:ntext',
            'koszt_dania',
            'id_restauracji',
            'rodzaj:ntext',
        ],
    ]) ?>

</div>
