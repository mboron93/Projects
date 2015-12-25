<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Restaurant */

$this->title = 'Update Restaurant: ' . ' ' . $model->id_restauracji;
$this->params['breadcrumbs'][] = ['label' => 'Restaurants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_restauracji, 'url' => ['view', 'id_restauracji' => $model->id_restauracji, 'id_miasta' => $model->id_miasta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restaurant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
