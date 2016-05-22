<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RestaurantType */

$this->title = 'Update Restaurant Type: ' . ' ' . $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Restaurant Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_id, 'url' => ['view', 'type_id' => $model->type_id, 'id_restauracji' => $model->id_restauracji]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restaurant-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
