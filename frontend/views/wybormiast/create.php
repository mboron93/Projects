<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WyborMiast */

$this->title = 'Create Wybor Miast';
$this->params['breadcrumbs'][] = ['label' => 'Wybor Miasts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wybor-miast-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
