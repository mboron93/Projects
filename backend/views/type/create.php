<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RestaurantType */

$this->title = 'Create Restaurant Type';
$this->params['breadcrumbs'][] = ['label' => 'Restaurant Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
