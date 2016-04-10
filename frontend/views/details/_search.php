<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\order_detailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_or_detail') ?>

    <?= $form->field($model, 'id_order') ?>

    <?= $form->field($model, 'id_dania') ?>

    <?= $form->field($model, 'porcja') ?>

    <?= $form->field($model, 'ilosc') ?>

    <?php // echo $form->field($model, 'cena') ?>

    <?php // echo $form->field($model, 'ulica') ?>

    <?php // echo $form->field($model, 'miasto') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
