<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Detail */

$this->title = $model->id_or_detail;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id_or_detail' => $model->id_or_detail, 'id_dania' => $model->id_dania], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id_or_detail' => $model->id_or_detail, 'id_dania' => $model->id_dania], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_or_detail',
            'id_order',
            'id_dania',
            'porcja:ntext',
            'ilosc',
            'cena',
        ],
    ]) ?>

</div>
