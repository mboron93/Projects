<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WyborMiast */

$this->title = $model->id_miasta;
$this->params['breadcrumbs'][] = ['label' => 'Wybor Miasts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wybor-miast-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_miasta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_miasta], [
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
            'id_miasta',
            'miasto',
        ],
    ]) ?>

</div>
