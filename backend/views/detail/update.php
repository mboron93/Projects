<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Detail */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Detail',
]) . ' ' . $model->id_or_detail;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_or_detail, 'url' => ['view', 'id_or_detail' => $model->id_or_detail, 'id_dania' => $model->id_dania]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
