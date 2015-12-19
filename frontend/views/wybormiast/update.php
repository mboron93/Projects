<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WyborMiast */

$this->title = 'Update Wybor Miast: ' . ' ' . $model->id_miasta;
$this->params['breadcrumbs'][] = ['label' => 'Wybor Miasts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_miasta, 'url' => ['view', 'id' => $model->id_miasta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wybor-miast-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
